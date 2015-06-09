<?php 

  session_start();

  include("connection.php");

  $query = "SELECT diary FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";

  $result = mysqli_query($link, $query);

  $row = mysqli_fetch_array($result);

  $diary = $row['diary'];


 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Online Diary</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">

    .navbar-brand {
      font-size:2em;
    }

    .topContainer {
      background-image: url("BP2.JPG");
      width: 100%;
      height: 400px;
      background-size: cover;
    }

    #topRow {
      margin-top: 90px;
      text-align: center;
    }

    #topRow h1 {
      color: white;
      font-size: 400%;
    }
    
    #topRow p {
      color: white;
      font-size: 150%;
    }

    .marginTop {
      margin-top: 40px;
    }

    .center {
      text-align: center;
    }

    .title {
      margin-top: 100px;
      font-size: 50px;
    }

    .footer {
      background-color: #B0D1FB;
      width: 100%;
      padding-top: 70px;
    }

    .marginBottom {
      margin-bottom: 30px;
    }

    .icolor {
      color: white;
    }


    </style>



  </head>
  <body data-spy="scroll" data-target=".navbar-collapse">

   <div class="navbar navbar-default navbar-fixed-top">

      <div class="container">

        <div class="navbar-header pull-left">

          <a class="navbar-brand" href="">Online Diary</a>

        </div>

        <div class="pull-right"> 

			     <ul class="navbar-nav nav">
				      <li><a href="OnlineDiary.php?logout=1">Log Out</a></li>

        </div>
      </div>
   </div>

   <div class="container contentContainer topContainer" id="home">

    <div class="row marginBottom">

      <div class="col-md-6 col-md-offset-3" id="topRow">

        <textarea class="form-control"><?php echo $diary; ?></textarea>

      </div>
    </div>
   </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script>

      $(".contentContainer").css("min-height", $(window).height());

      $("textarea").css("height", $(window).height()-120);

      $("textarea").keyup(function() {

        $.post("updatediary.php", {diary:$("textarea").val()} );

      });

    </script>

  </body>
</html>