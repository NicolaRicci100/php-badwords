<?php
$word = $_GET['word'];
$paragraph = $_GET['paragraph'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>badwords</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script defer src="js/script.js"></script>
</head>

<body>
  <h2>la parola è <?= $word ?></h2>
  <h2>il paragrafo è <?= $paragraph ?></h2>
</body>

</html>