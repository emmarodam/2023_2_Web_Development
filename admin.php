<?php
session_start();
if( ! $_SESSION ){
  header('Location: /login.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>
    Hi <?= $_SESSION['email'] ?>
  </h1>
</body>
</html>