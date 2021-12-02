<?php set_time_limit(50); error_reporting(0);
if(!isset($_GET['key']) || !isset($_GET['rate']) || !isset($_GET['price'])){
header("Location: index.php");
exit;
}
include_once 'simple_html_dom.php';
$url = 'https://www.amazon.com'.$_GET['key'];

$amazonFetch = curl_init($url);
curl_setopt($amazonFetch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($amazonFetch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($amazonFetch, CURLOPT_ENCODING, '');
curl_setopt($amazonFetch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
$response = curl_exec($amazonFetch);
libxml_use_internal_errors(true);
$dom = new DomDocument();
$dom->loadHTML($response);
libxml_use_internal_errors(false);
$xpath = new DOMXpath($dom);
$title = $xpath->query('//span[@id="productTitle"]')->item(0)->nodeValue;
$img = $xpath->query('//img[@class="a-dynamic-image frontImage"]/@src')->item(0)->nodeValue;
$error = $xpath->query('//img/@alt')->item(1)->nodeValue;

if(strpos($error, "Sorry") !== FALSE){
header("Location:index.php");
exit;
}



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="include/css/bootstrap.min.css" rel="stylesheet" >
<link href="include/css/inctest.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<link rel="stylesheet" type="text/css" href="css/show.css">
<title><?echo$desc;?></title>

</head>
<body>
<?include_once("header.php");?>
<div class="container">
<div class="spaces" ></div>
<article class="row single-post mt-4 no-gutters" id="contentrow">
<div class="col-md-12">
<div class="image-wrapper float-left pr-4">
<img src="<?echo$img?>" alt="" class="z-depth-3" id="imglol" />
<p></p>


</div>
<h3 class="single-post-content-wrapper p-3" id="titlepg"><?echo$title;?></h3>

<?php
$rate = $_GET['rate'];
if(strpos($rate ,"3 Stars") !== FALSE){
	echo '
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star notchecked"></span>
<span class="fa fa-star notchecked"></span>
	';
}elseif(strpos($rate, "2 Stars") !== FALSE){
	echo '
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star notchecked"></span>
<span class="fa fa-star notchecked"></span>
<span class="fa fa-star notchecked"></span>
	';
}elseif(strpos($rate, "5 stars") !== FALSE || strpos($rate, "5.0") !== FALSE ){

	echo '
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
	';
}elseif(strpos($rate, "1 Star") !== FALSE){

	echo '
<span class="fa fa-star checked z-depth-3"></span>
<span class="fa fa-star notchecked"></span>
<span class="fa fa-star notchecked"></span>
<span class="fa fa-star notchecked"></span>
<span class="fa fa-star notchecked"></span>
	';

}elseif(strpos($rate, "4 Star") !== FALSE || strpos($rate, "4 star") !== FALSE ){
	echo '
<span class="fa fa-star checked z-depth-3"></span>
<span class="fa fa-star checked z-depth-3"></span>
<span class="fa fa-star checked z-depth-3"></span>
<span class="fa fa-star checked z-depth-3"></span>
<span class="fa fa-star notchecked"></span>
	';
}


?>
<div id="pricediv">
<span id="pricefirstspan"><?echo htmlspecialchars($_GET['price']);?></span> 
 <span id="pricelastspan"> Free </span>
</div>
</div>

<a href="download.link.here"  class="btn btn-dark-green btn-lg btn-block">Free Donwload</a>
<a href="read.link.here" class="btn btn-outline-light waves-effect btn-lg z-depth-0 btn-block">Read Only</a>

</article>

<div class="breakspace"></div>
<div class="desc">
<? 
echo $noscript = $xpath->query('//noscript')->item(1)->nodeValue;
?>
</div>


<?php
$amazonApi = curl_init('https://www.amazon.com/s?k='.urlencode($_GET['searchkey']).'&rh=n%3A154606011');
curl_setopt($amazonApi, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($amazonApi, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($amazonApi, CURLOPT_ENCODING, '');
curl_setopt($amazonApi, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
$response2 = curl_exec($amazonApi);
libxml_use_internal_errors(true);
$dom2 = new DomDocument();
$dom2->loadHTML($response2);
libxml_use_internal_errors(false);
$xpath2 = new DOMXpath($dom2);
$dataa = array();

for ($i=0; $i < 5 ; $i++) :
$var = $xpath2->query('//span[@class="a-size-medium a-color-base a-text-normal"]')->item($i)->nodeValue;

if(isset($var)){
$count++;
}else{
	break;
}
endfor;



for ($scrape_i=0; $scrape_i < 5; $scrape_i++) { 
$title_2 = $xpath2->query('//span[@class="a-size-medium a-color-base a-text-normal"]')->item($scrape_i)->nodeValue;
$imgLink_2 = $xpath2->query('//img[@data-image-latency="s-product-image"]/@src')->item($scrape_i)->nodeValue;
$rate_2 = $xpath2->query('//span[@class="a-icon-alt"]')->item($scrape_i)->nodeValue;
$price_2 = $xpath2->query('//span[@class="a-offscreen"]')->item($scrape_i)->nodeValue;
$link_2 = $xpath2->query('//a[@class="a-size-base a-link-normal a-text-normal"]/@href')->item($scrape_i)->nodeValue;

    $dataa[] = array(
      "p_title" => $title_2,
      "p_image" =>  $imgLink_2,//clearImage($imgLink),
      "p_rate" => $rate_2,
      "p_price" => $price_2,
      'p_link'=> $link_2,
    );


}

?>

<div style="height:70px;"></div>

<div class="card-deck">
<hr />
<?php  
if($count != 0){
foreach ($dataa as $val){

if(strlen($val['p_title']) > 55){
$newtitle = substr($val['p_title'], 0,55).'...';
}else{
	$newtitle = $val['p_title'];
}

 ?>

  <div id="cardcss" class="card" >
      <img id="imgloco"  class="card-img-top img-fluid" src="<? echo $val['p_image'];?>">
      <div class="card-body">
        <p id="cardtextcss" class="card-text"><?echo $newtitle; ?></p>
      </div>
      <a href="show.php?key=<?echo $val['p_link'];?>&price=<?echo$val['p_price']?>&rate=<?echo$val['p_rate']?>&searchkey=<?echo$_GET['searchkey']?>" id="viewprd" class="btn btn-deep-purple btn-sm"><i class="fas fa-eye"></i> View</a>

    </div>

<? }

}else{
	echo '<center><h4 style="color:white;"> not found any same result </h4></center>';
}
?>

</div>
<div class="breakspace"></div>

</div>


<script src="include/js/jquery.min.js"></script>
<script src="include/js/popper.min.js"></script>
<script src="include/js/bootstrap.min.js"></script>
<script src="include/js/mdb.min.js"></script>

</body>
</html>