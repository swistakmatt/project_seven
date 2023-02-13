<?php session_start() ?>
<!DOCTYPE html>
<html lang="pl">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="public/css/roulette-style.css">
  <script type="text/javascript" src="src/js/burger.js" defer></script>
  <script type="text/javascript" src="src/js/roulette.js" defer></script>
  <script src="https://kit.fontawesome.com/8a321b7213.js" crossorigin="anonymous"></script>
  <title>project_seven - Ruletka</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>
  <div class="container">
    <?php include('components/navBar.php') ?>
    <?php include('components/burgerMenu.php') ?>
    <?php include('components/balanceContainer.php') ?>
    <div class="game-container">
      <div class="roulette-game-container">
        <div class="game-dots">
          <span class="game-dot"></span>
          <span class="game-dot"></span>
          <span class="game-dot"></span>
          <span class="game-dot"></span>
          <span class="game-dot"></span>
          <span class="game-dot"></span>
          <span class="game-dot"></span>
          <span class="game-dot"></span>
          <span class="game-dot"></span>
          <span class="game-dot"></span>
          <span class="game-dot"></span>
        </div>
      </div>
      <div class="roulette-stats">
        <div class="earlier-throws-stats">
          <span class="earlier-throws-text">Poprzednie rzuty</span>
          <span class="stats-dot"></span>
          <span class="stats-dot"></span>
          <span class="stats-dot"></span>
          <span class="stats-dot"></span>
          <span class="stats-dot"></span>
          <span class="stats-dot"></span>
          <span class="stats-dot"></span>
          <span class="stats-dot"></span>
        </div>
        <div class="hundred-throws-stats">
          <span class="hundred-throws-text">Ostatnie 100</span>
          <span class="small-stats-dot"></span>
          <span class="stat-value-text">8</span>
          <span class="small-stats-dot"></span>
          <span class="stat-value-text">43</span>
          <span class="small-stats-dot"></span>
          <span class="stat-value-text">49</span>
        </div>
      </div>
      <form class="bet-form" action="/roulette" method="POST">
        <?php include('components/inputBetAmount.php') ?>
        <div class="bet-form-color">
          <button class="color-button" type="submit" name="color" value="red" disabled>
            <span class="button-dot--red"></span>
            <span class="color-button-bet">Obstaw</span>
            <span class="color-button-multiplier">Wygrana 2x</span>
          </button>
          <button class="color-button" type="submit" name="color" value="green" disabled>
            <span class="button-dot--green"></span>
            <span class="color-button-bet">Obstaw</span>
            <span class="color-button-multiplier">Wygrana 14x</span>
          </button>
          <button class="color-button" type="submit" name="color" value="white" disabled>
            <span class="button-dot--white"></span>
            <span class="color-button-bet">Obstaw</span>
            <span class="color-button-multiplier">Wygrana 2x</span>
          </button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>