<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>EXO 1 php</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>
</head>
<body>
<div><?php 
    $NombreAleatoire = rand(0,100);
    if ($NombreAleatoire%2==1){


       echo "<div class='bleu'>".$NombreAleatoire." est impair </div>";

    }

    if ($NombreAleatoire%2==0){

        echo "<div class='rouge'>".$NombreAleatoire." est pair </div>";

    }
?></div>
</body>
</html>