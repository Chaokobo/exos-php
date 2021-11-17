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
    $a = array(3,5,9,15,1);
    for ($i=0;$i<=3;$i++)
    {
        echo "$a[$i],";
    }
    echo "$a[4]";
?>
<table>
    <tr>
    <?php for ($i=0;$i<=4;$i++)
    {
        echo '<td>'.$a[$i].'</td>';
    }
    ?>
    </tr>
</table>
</body>
</html>