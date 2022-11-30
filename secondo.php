<?php

$paragrafo = $_POST['paragrafo'];
$parola = $_POST['parola'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>secondo</title>
</head>
<body>
  

<h1>

  <?php echo $paragrafo ?> <br>
  <?php echo 'ha' ?>
  <?php echo strlen($paragrafo)?>
  <?php echo 'caratteri' ?> <br>

  <?php echo str_replace('funk', '***', $paragrafo) ?><br>

  <?php echo 'ha' ?>
  <?php echo strlen($paragrafo)?>
  <?php echo 'caratteri' ?> <br>


</h1>


</body>
</html>