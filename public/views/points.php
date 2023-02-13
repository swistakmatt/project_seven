<?php session_start() ?>
<!DOCTYPE html>
<html lang="pl">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="public/css/points-style.css">
  <script type="text/javascript" src="src/js/burger.js" defer></script>
  <script type="text/javascript" src="src/js/points.js" defer></script>
  <script src="https://kit.fontawesome.com/8a321b7213.js" crossorigin="anonymous"></script>
  <title>project_seven - Punkty</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>
  <div class="container">
    <?php include('components/navBar.php') ?>
    <?php include('components/burgerMenu.php') ?>
    <div class="content-container">
      <div class="redeem-points-container">
        <?php if (isset($_SESSION['email'])) : ?>
          <span class="points-text">Drogi użytkowniku, punkty odbierać można co 3600 sekund</span>
          <form class="redeem-points-form" action="claimPoints" method="POST">
            <button class="redeem-points-form--button" type="submit" name="redeem_points">Odbierz punkty</button>
          </form>
          <div class="claim-result" id="claim-result">
            <span id="claim-result-text"></span>
          </div>
        <?php endif; ?>
        <?php if (!isset($_SESSION['email'])) : ?>
          <span class="points-warning">Aby korzystać z tej funkcji musisz być zalogowany</span>
        <?php endif; ?>
      </div>
    </div>
  </div>
</body>

</html>