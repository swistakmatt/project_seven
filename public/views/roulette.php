<!DOCTYPE html>
<html lang="pl">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="public/css/roulette-style.css">
  <script src="https://kit.fontawesome.com/8a321b7213.js" crossorigin="anonymous"></script>
  <title>project_seven - Ruletka</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>
  <div class="container">
    <div class="nav-container">
      <img class="small-logo-svg" src="public/img/seven-logo.svg">
      <div class="nav-buttons-games">
        <a href="/roulette">
          <img class="roulette-svg" src="public/img/roulette.svg">
          <span class="nav-buttons-games--roulette">Ruletka</span>
        </a>
        <a href="/coinflip">
          <img class="coinflip-svg" src="public/img/dollar-coin.svg">
          <span class="nav-buttons-games--coinflip">Rzut monetą</span>
        </a>
      </div>
      <div class="nav-buttons-options">
        <a href="">
          <img class="polish-flag-svg" src="public/img/polish-flag.svg">
          <span class="language_text">PL</span>
        </a>
        <a class="gift-button" href="">
          <img class="gift-svg" src="public/img/gift.svg">
          <span class="claim-points_text">Odbierz punkty</span>
        </a>
        <a class="login-button" href="/login">
          <span class="login-button_text">Zaloguj</span>
        </a>
        <div class="burger-menu-button">
          <div class="burger-menu-line"></div>
          <div class="burger-menu-line"></div>
          <div class="burger-menu-line"></div>
        </div>
      </div>
    </div>
    <div class="burger-nav">
      <div class="burger-nav-top">
        <a class="signin-button" href="/login">
          <span class="signin-button_text">Stwórz konto</span>
        </a>
        <a class="ranking-button" href="/login">
          <span class="ranking-button_text">Ranking</span>
        </a>
        <a class="logout-button" href="/login">
          <span class="logout-button_text">Wyloguj</span>
        </a>
      </div>
      <div class="burger-nav-bottom">
        <a class="info-button" href="/login">
          <span class="info-button_text">O nas</span>
        </a>
        <a class="info-button" href="/login">
          <span class="info-button_text">Pomoc</span>
        </a>
      </div>
    </div>
    <div class="saldo-container">
      <span class="saldo-text">Saldo:</span>
      <span class="saldo-amount">21370</span>
      <img class="single-coin-svg" src="public/img/single-coin.svg">
    </div>
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
      <div class="bet-form-amount">
        <img class="stacked-coins-svg" src="public/img/stacked-coins.svg">
        <input class="bet-input" type="number" name="bet">
        <button class="bet-input-button">Wyczyść</button>
        <button class="bet-input-button">+1</button>
        <button class="bet-input-button">+10</button>
        <button class="bet-input-button">+100</button>
        <button class="bet-input-button">1/2</button>
        <button class="bet-input-button">2x</button>
        <button class="bet-input-button">Wszystko</button>
      </div>
      <div class="bet-form-color">
        <button class="color-button" type="submit" name="color" value="red">
          <span class="button-dot--red"></span>
          <span class="color-button-bet">Obstaw</span>
          <span class="color-button-multiplier">Wygrana 2x</span>
        </button>
        <button class="color-button" type="submit" name="color" value="green">
          <span class="button-dot--green"></span>
          <span class="color-button-bet">Obstaw</span>
          <span class="color-button-multiplier">Wygrana 14x</span>
        </button>
        <button class="color-button" type="submit" name="color" value="white">
          <span class="button-dot--white"></span>
          <span class="color-button-bet">Obstaw</span>
          <span class="color-button-multiplier">Wygrana 2x</span>
        </button>
      </div>
    </form>
  </div>
  <script src="../../src/js/burger.js"></script>
</body>

</html>