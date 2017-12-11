<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dorthe er uddannet Fysioterapeut og Personlig Træner. Hun har samtidig en uddannelse indenfor kostvejledning. Hendes primære målgruppe er børn, gravide og ældre.">
    <title>Dorthe Dalstrup - Personlig træner</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="css/stylesheet.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<?php include 'php/navigation.php';?>

<div class="container-fluid">
  <div class="row margin-space margin-ryk">
    <div class=" padding-space margin-space col-md-2 col-md-offset-3 col-sm-12 col-xs-12 blue-bg bloed-kant">
      <form action="index.html" method="post">
        <label>Brugernavn:</label> <br>
         <input class="form-control" type="text" name="brugernavn" placeholder="Indtast gyldigt brugernavn her" required> <br>
         <label>Kode:</label> <br>
        <input class="form-control" type="password" name="password" placeholder="Indtast kodeord her" >
        <br>
        <center><a href="#!"><button type="button" class="btn btn-info btn-koeb-design">Login »</button></a> </center>

      </form>
    </div>
    <div class="margin-space col-md-3 col-md-offset-1">
      <h1>Login</h1>
      <h3>Her kan du logge ind, for at se dine personlige oplysninger</h3>
      <p>Hvad er dette? <br> <br>
      Hos mig får du en personlig bruger, hvor du kan følge med i din udvikling, hvor du bl.a. kan se dit træningsprogram, kostplan, logbog mm.</p>
    </div>
  </div>
</div> <!-- Container END -->

<footer>
  <div class="container-fluid">
    <div class="row padding-space blue-bg">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <p class="text-right text-md-right text-sm-center text-xs-center footer-p">Copyright Dorthe Dalstrup 2017 ©</p>
      </div>
    </div>
  </div>

</footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  </body>
</html>
