<head>
  <link rel="stylesheet" type="text/css" href="public/css/components/inputBetAmount-style.css">
</head>

<div class="bet-form-amount">
  <img class="stacked-coins-svg" src="public/img/stacked-coins.svg" />
  <input class="bet-input" id="bet-input" type="number" name="bet" value="0" />
  <div class="bet-input-button" onclick="changeValue(0)">Wyczyść</div>
  <div class="bet-input-button" onclick="incrementValue(1)">+1</div>
  <div class="bet-input-button" onclick="incrementValue(10)">+10</div>
  <div class="bet-input-button" onclick="incrementValue(100)">+100</div>
  <div class="bet-input-button" onclick="halfValue()">1/2</div>
  <div class="bet-input-button" onclick="doubleValue()">2x</div>
  <div class="bet-input-button" onclick="changeValue(<?php echo $_SESSION['balance']; ?>)">Wszystko</div>
</div>