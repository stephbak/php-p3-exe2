<?php
$number1 = 0;
$number2 = 50;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>php partie3</title>
</head>
<body>
  <?php while($number1 <= 20){ ?>
    <p><?= $number1 * $number2 ?></p>
    <?php
    $number1++ ;
  } ?>
</body>
</html>
