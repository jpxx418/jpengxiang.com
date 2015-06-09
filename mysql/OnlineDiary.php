<? include("login.php"); ?>

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
      margin-top: 100px;
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
      margin-top: 30px;
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

        <div class="navbar-header">

          <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

          </button>

          <a class="navbar-brand" href="">Online Diary</a>

        </div>

        <div class="collapse navbar-collapse"> 


          <form class="navbar-form navbar-right" method="post">
            <div class="form-group">
              <input type="email" name="loginemail" placeholder="Email" class="form-control" 
              value="<?php echo addslashes($_POST['loginemail']); ?>"/>
            </div>
            <div class="form-group">
              <input type="password" name="loginpassword" placeholder="Password" class="form-control" 
              value="<?php echo addslashes($_POST['loginpassword']); ?>"/>
            </div>
            <input type="submit" name="submit" class="btn btn-success" value="Log In"/>
          </form>

        </div>
      </div>
   </div>

   <div class="container contentContainer topContainer" id="home">

    <div class="row marginBottom">

      <div class="col-md-6 col-md-offset-3" id="topRow">

        <h1 class="marginTop">Online Diary</h1>
        <p class="lead">Your own private diary, with you wherever you go.</p>

        <?php

          if ($error) {
            echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
          }

          if ($message) {
            echo '<div class="alert alert-success">'.addslashes($message).'</div>';
          }

        ?>

        <p class="bold marginTop" id="scolor">Interested? Sign Up Below!</p>

        <form class="marginTop" method="post">

          <div class="form-group">
            <label for="email" class="icolor">Email Address</label>
            <input type="email" name="email" class="form-control" placeholder="Your email" 
            value="<?php echo addslashes($_POST['email']); ?>"/>
          </div>

          <div class="form-group">
            <label for="password" class="icolor">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" 
            value="<?php echo addslashes($_POST['password']); ?>"/>
          </div>

          <input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg marginTop" />
          
        </form>

      </div>
    </div>
   </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">

      $(".contentContainer").css("min-height", $(window).height());

    </script>

  </body>
</html>