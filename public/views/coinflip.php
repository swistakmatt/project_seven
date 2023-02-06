<?php session_start() ?>
<!DOCTYPE html>
<html lang="pl">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="public/css/coinflip-style.css" />
  <script type="text/javascript" src="src/js/burger.js" defer></script>
  <script src="https://kit.fontawesome.com/8a321b7213.js" crossorigin="anonymous"></script>
  <title>project_seven - Rzut monetą</title>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <div class="container">
    <div class="nav-container">
      <img class="small-logo-svg" src="public/img/seven-logo.svg" />
      <div class="nav-buttons-games">
        <a href="/roulette">
          <img class="roulette-svg" src="public/img/roulette.svg" />
          <span class="nav-buttons-games--roulette">Ruletka</span>
        </a>
        <a href="/coinflip">
          <img class="coinflip-svg" src="public/img/dollar-coin.svg" />
          <span class="nav-buttons-games--coinflip">Rzut monetą</span>
        </a>
      </div>
      <div class="nav-buttons-options">
        <a href="">
          <img class="polish-flag-svg" src="public/img/polish-flag.svg" />
          <span class="language_text">PL</span>
        </a>
        <a class="gift-button" href="">
          <img class="gift-svg" src="public/img/gift.svg" />
          <span class="claim-points_text">Odbierz punkty</span>
        </a>
        <?php if (isset($_SESSION['email'])) : ?>
          <span class="logged-in-text">Zalogowany jako: <?php echo $_SESSION['nickname']; ?></span>
        <?php endif; ?>
        <?php if (!isset($_SESSION['email'])) : ?>
          <a class="login-button" href="/login">
            <span class="login-button_text">Zaloguj</span>
          </a>
        <?php endif; ?>
        <div class="burger-menu-button">
          <div class="burger-menu-line line1"></div>
          <div class="burger-menu-line line2"></div>
          <div class="burger-menu-line line3"></div>
        </div>
      </div>
    </div>
    <div class="burger-nav">
      <div class="burger-nav-top">
        <?php if (!isset($_SESSION['email'])) : ?>
          <a class="register-button" href="/register">
            <span class="register-button_text">Stwórz konto</span>
          </a>
        <?php endif; ?>
        <a class="ranking-button" href="/ranking">
          <span class="ranking-button_text">Ranking</span>
        </a>
        <?php if (isset($_SESSION['email'])) : ?>
          <a class="logout-button" href="/logout">
            <span class="logout-button_text">Wyloguj</span>
          </a>
        <?php endif; ?>
      </div>
      <div class="burger-nav-bottom">
        <a class="info-button" href="">
          <span class="info-button_text">O nas</span>
        </a>
        <a class="info-button" href="">
          <span class="info-button_text">Pomoc</span>
        </a>
      </div>
    </div>
    <div class="saldo-container">
      <span class="saldo-text">Saldo:</span>
      <span class="saldo-amount"><?php echo $_SESSION['balance']; ?></span>
      <img class="single-coin-svg" src="public/img/single-coin.svg" />
    </div>
    <form class="bet-form" action="/coinflip" method="POST">
      <div class="bet-form-amount">
        <img class="stacked-coins-svg" src="public/img/stacked-coins.svg" />
        <input class="bet-input" type="number" name="bet" />
        <button class="bet-input-button">Wyczyść</button>
        <button class="bet-input-button">+1</button>
        <button class="bet-input-button">+10</button>
        <button class="bet-input-button">+100</button>
        <button class="bet-input-button">1/2</button>
        <button class="bet-input-button">2x</button>
        <button class="bet-input-button">Wszystko</button>
      </div>
      <div class="bet-form-options">
        <div class="form-answer">
          <input type="radio" name="side" value="heads" id="heads" required />
          <label for="heads" class="coinflip-labels">
            <img class="heads-svg" src="public/img/coinflip-coin.svg" />
          </label>
        </div>
        <div class="form-answer">
          <input type="radio" name="side" value="tails" id="tails" required />
          <label for="tails" class="coinflip-labels">
            <img class="tails-svg" src="public/img/coinflip-coin.svg" />
          </label>
        </div>
      </div>
      <button class="bet-form-submit" type="submit">Obstaw</button>
    </form>
    <div class="coinflip-result"></div>
  </div>
</body>

</html>