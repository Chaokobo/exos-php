<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>EXO 2.1 php</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>
</head>
<body>
<?php 
    $a = 2;
    $b = 6;
    $c = 3;

    $delta = $b*$b-4*$a*$c;

    if ($delta < 0)
    {
        print("L'équation n'admet aucune solution.");
    }
    if ($delta == 0)
    {
        $s = (-1*$b)/(2*$a);
        print("L'équation admet une solution double s=".$s);
    }
    if ($delta > 0)
    {
        $s1 = (-1*$b - sqrt($delta))/(2*$a);
        $s2 = (-1*$b + sqrt($delta))/(2*$a);
        print("L'équation admet deux solutions s1=".$s1." et s2=".$s2);
    }
?>
</body>
</html>