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
  <div class="row margin-ryk padding-space margin-space">
    <div class="col-md-offset-2 col-md-4 col-sm-12 col-xs-12">
      <h1>Kontakt mig i dag</h1>
        <form class="" action="index.html" method="post">
          <div class="form-group">
            <label>Fulde navn</label>
            <input type="text" class="form-control" id="navn" placeholder="John doe">
            <label>Køn</label> <br>
            <input type="radio" name="options" id="option1" checked> Mand
            <input type="radio" name="options" id="option2"> Kvinde <br>
            <label>E-mail</label>
            <input type="email" class="form-control" id="email" placeholder="din@email.her">
            <label>Beskrivelse</label>
            <textarea class="form-control" id="comment" rows="5" placeholder="Skriv en kort beskrivelse om dig selv"></textarea> <br>
            <a href="om-mig.html"><button type="button" class="btn btn-info btn-koeb-design">Send »</button></a>
          </div>
        </div>
        <div class="col-md-offset-0 col-md-4 col-sm-12 col-xs-12">
          <h1>Jeg ser frem til samarbejdet!</h1>
          <h2>Vejen til Globe Fitness</h2>
          <h3>Krøyer Kielbergs Vej 3, Skanderborg</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2228.615497030902!2d9.923328116172403!3d56.042646080631904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464c6ef628197025%3A0x630352dabf689c5a!2sKr%C3%B8yer+Kielbergs+Vej+3%2C+8660+Skanderborg!5e0!3m2!1sen!2sdk!4v1512568518078" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
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
