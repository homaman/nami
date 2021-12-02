<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="include/css/bootstrap.min.css" rel="stylesheet" >
<link href="include/css/inctest.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="">
    <title>Your website Title</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800" rel="stylesheet" />
    <link href="css/main.css?v=3" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/home.css">

  <body>
    <?include_once('header.php');?>
    <div class="s006">
      <form method="post" action="results.php" id="searchsubmit">
      <div id="dontfuck" class="switchform">
        <fieldset>
          <legend>What are you looking for?</legend>
          <div class="inner-form">
            <div class="input-field">
              <button class="btn-search" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                </svg>
              </button>

              <input name="search" id="search" type="text" placeholder="Ladies" />
              <input name="jsonResponse" id="jsonResponse" type="hidden" value="" />
            </div>
          </div>
          <div class="suggestion-wrap">
    <button id="searchBtn">Search</button>
    <button id="viewResults" class="btn btn-success" style="display: none;" >View Result</button>

          </div>

        </fieldset>
      </div>
</form>
    </div>


<script src="js/jquery.min.js"></script>
<script src="js/local.js"></script>
<script src="include/js/jquery.min.js"></script>
<script src="include/js/popper.min.js"></script>
<script src="include/js/bootstrap.min.js"></script>
<script src="include/js/mdb.min.js"></script>


</body>
</html>
