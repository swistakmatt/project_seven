<?php session_start() ?>
<!DOCTYPE html>
<html lang="pl">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="public/css/ranking-style.css">
  <script type="text/javascript" src="src/js/ranking.js" defer></script>
  <script type="text/javascript" src="src/js/burger.js" defer></script>
  <script src="https://kit.fontawesome.com/8a321b7213.js" crossorigin="anonymous"></script>
  <title>project_seven - Ranking</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>
  <div class="container">
    <?php include('components/navBar.php') ?>
    <?php include('components/burgerMenu.php') ?>
    <div class="content-container">
      <div class="ranking-container">
        <div class="ranking-column-names">
          <p class="rank">Miejsce</p>
          <p class="name">Pseudonim gracza</p>
          <p class="score">Saldo</p>
        </div>
        <ul></ul>
      </div>
      <div class="ranking-info-container">
        <div class="ranking-info">
          <img class="stacked-coins-svg" src="public/img/stacked-coins.svg">
        </div>
      </div>
    </div>
  </div>
</body>

</html>