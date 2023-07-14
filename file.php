<?php
//parola inserita dall'utente
$word = $_GET['word'];
//parola censurata
$censored_word = str_replace($word, '* * *', $word);
//lunghezza della parola
$lenght_word = strlen($word);
//paragrafo scritto dall'utente
$paragraph = $_GET['paragraph'];
//lunghezza paragrafo
$lenght_paragraph = strlen($paragraph);
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
</head>

<body class="bg-light">
  <div class="container text-center mt-5">
    <h2>La parola è <span class="text-warning"><?= $censored_word ?></span> e il numero di cratteri è <span class="text-warning"><?= $lenght_word ?></span></h2>
    <h2>Il paragrafo è <span class="text-warning"><?= $paragraph ?></span> e il numero di cratteri è <span class="text-warning"><?= $lenght_paragraph ?></span></h2>
  </div>
</body>

</html>