<?php session_start() ?>
<!DOCTYPE html>
<html lang="pl">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="public/css/coinflip-style.css" />
  <script type="text/javascript" src="src/js/burger.js" defer></script>
  <script type="text/javascript" src="src/js/coinflip.js" defer></script>
  <script src="https://kit.fontawesome.com/8a321b7213.js" crossorigin="anonymous"></script>
  <title>project_seven - Rzut monetą</title>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <div class="container">
    <?php include('components/navBar.php') ?>
    <?php include('components/burgerMenu.php') ?>
    <?php include('components/balanceContainer.php') ?>
    <div class="game-container">
      <form class="bet-form" action="/submitBet" method="POST">
        <?php include('components/inputBetAmount.php') ?>
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
        <button class="bet-form-submit" id="bet-form-submit" type="submit">Obstaw</button>
      </form>
      <div class="coinflip-result" id="coinflip-result">
        <span id="coinflip-result-text"></span>
      </div>
    </div>
  </div>
</body>

</html>