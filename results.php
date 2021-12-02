<? error_reporting(0); ?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="include/css/bootstrap.min.css" rel="stylesheet" >
<link href="include/css/inctest.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<link rel="stylesheet" type="text/css" href="css/results.css">

</head>
<body>
<?

$decodeResponse = json_decode(urldecode($_POST['jsonResponse']),true);
$elementscount = count($decodeResponse); 

?>
    <?include_once('header.php');?>

<div class="container">
<div class="result">
<br />
<?

if($elementscount == 0){
  echo '<div id="error-msg" class="alert-danger">'."We couldn't find anything with this word, Please make sure to write the name of the book or author correctly<br/>";
  echo '<a href="index.php">Back To home</a>';
  echo '</div>';
  exit;
}

?>
<h3 id="nums">Number of search results (<?echo$elementscount;?>)</h3>
<div class="card-deck">
<?php  foreach ($decodeResponse as $val){ ?>
<?
if(strlen($val['p_title']) > 55){
$newtitle = substr($val['p_title'], 0,55).'...';
}else{
	$newtitle = $val['p_title'];
}
?>
  <div  id="cardcss" class="card" >
      <img class="card-img-top img-fluid" src="<? echo $val['p_image'];?>">
      <div class="card-body">
        <p id="cardtextcss" class="card-text"><?echo $newtitle; ?></p>

      </div>
      <a href="show.php?key=<?echo $val['p_link'];?>&price=<?echo$val['p_price']?>&rate=<?echo$val['p_rate']?>&searchkey=<?echo$_POST['search']?>" id="viewprd" class="btn btn-deep-purple btn-sm"><i class="fas fa-eye"></i> View</a>

    </div>

<?php  } ?>


</div>    
  
   

</div>
</div>
<script src="include/js/jquery.min.js"></script>
<script src="include/js/popper.min.js"></script>
<script src="include/js/bootstrap.min.js"></script>
<script src="include/js/mdb.min.js"></script>

</body>
</html>