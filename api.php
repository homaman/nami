<?php error_reporting(0); set_time_limit(50);
if(!isset($_GET['s_key'])){
$er = ['error'=> 'enter the search key'];
exit(json_encode($er));
}

$search = $_GET['s_key'];

function clearImage($imgLink){
$expl_secret = end(explode(",", $imgLink));
$image = str_replace("3x", "", $expl_secret);
$image = str_replace(" ", "", $image);
return $image;
}

$count = 0;
$amazonApi = curl_init('https://www.amazon.com/s?k='.urlencode($search).'&rh=n%3A154606011');
curl_setopt($amazonApi, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($amazonApi, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($amazonApi, CURLOPT_ENCODING, '');
curl_setopt($amazonApi, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
$response = curl_exec($amazonApi);
libxml_use_internal_errors(true);
$dom = new DomDocument();
$dom->loadHTML($response);
libxml_use_internal_errors(false);
$xpath = new DOMXpath($dom);

for ($i=0; $i < 18 ; $i++) :
$var = $xpath->query('//span[@class="a-size-medium a-color-base a-text-normal"]')->item($i)->nodeValue;

if(isset($var)){
$count++;
}else{
	break;
}
endfor;

if($count > 0){

$dataa = array();
//$dataa = ['count'=> $count];
for ($scrape_i=0; $scrape_i < $count; $scrape_i++) { 
$title = $xpath->query('//span[@class="a-size-medium a-color-base a-text-normal"]')->item($scrape_i)->nodeValue;
$imgLink = $xpath->query('//img[@data-image-latency="s-product-image"]/@src')->item($scrape_i)->nodeValue;
$rate = $xpath->query('//span[@class="a-icon-alt"]')->item($scrape_i)->nodeValue;
$price = $xpath->query('//span[@class="a-offscreen"]')->item($scrape_i)->nodeValue;
$link = $xpath->query('//a[@class="a-size-base a-link-normal a-text-normal"]/@href')->item($scrape_i)->nodeValue;

/*
$byhref = $xpath->evaluate('//a[@class="a-size-base a-link-normal"]/@href')->item($scrape_i)->nodeValue;
$byname = $xpath->evaluate('//a[@class="a-size-base a-link-normal"]')->item($scrape_i)->nodeValue;
$clearByname = trim(preg_replace('/\s+/',' ', $byname));
$addDashToByName = str_replace(" ", "-", $clearByname);
error_reporting(0);
if(strpos($byhref, $addDashToByName) !== FALSE){
	$by = $byname;
}elseif(strpos($byhref, '/contact-us') !== FALSE){
	$by = 'Unknown';
}else{
	$by = 'Unknown';

}

*/


    $dataa[] = array(
      "p_title" => $title,
      "p_image" =>  $imgLink,//clearImage($imgLink),
      "p_rate" => $rate,
      "p_price" => $price,
      'p_link'=> $link,
   //   'by'=> $by
    );


}
echo $varo = json_encode($dataa);

}else{
$er = ['error'=> 'not_found_result'];
exit(json_encode($er));
}
?>