<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>EXO 2.2 php</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>
</head>
<body>
<?php
    $a = array(
    'Nom' => 'Boulanger',
    'Prenom' => 'Sam', 
    'MDP' => 'oui',);
    echo "Nom : ".$a['Nom']." ; ";
    echo "Prenom : ".$a['Prenom']." ; ";
    echo "Mot de passe : ".$a['MDP'];
?>
</body>
</html>