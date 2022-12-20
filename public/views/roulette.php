<!DOCTYPE html>
<html lang="pl">
    <head>
        <link rel="stylesheet" type="text/css" href="public/css/style.css">
        <link type='text/css' href='http://fonts.googleapis.com/css?family=Lato:400,700' />
        <script src="https://kit.fontawesome.com/8a321b7213.js" crossorigin="anonymous"></script>
        <title>project_seven - Roulette</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    </head>
    <body>
        <div class="container">
            <div class="nav-container">
                <img class="small-logo-svg" src="public/img/seven-logo.svg">
                <div class="nav-buttons-container">
                    <a href="/roulette">
                        <img class="roulette-svg" src="public/img/roulette.svg">
                        <span class="nav-button">Ruletka</span>
                    </a>
                    <a href="/coinflip">
                        <img class="coinflip-svg" src="public/img/dollar-coin.svg">
                        <span class="nav-button">Rzut monetą</span>
                    </a>
                    <a href="">
                        <img class="polish-flag-svg" src="public/img/polish-flag.svg">
                        <span class="language-text">PL</span>
                    </a>
                    <a href="">
                        <i class="fa-solid fa-gift"></i>
                        <span class="claim-points-text">Odbierz punkty</span>
                    </a>
                    <a href="/login">
                        <span class="login-button">Zaloguj</span>
                    </a>
                </div>
            </div>
            <div class="saldo-container">
                <span class="saldo-text">Saldo: 0</span>
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
                <div class="roulette-game-stats">
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
                        <span class="stat-value-text">0</span>
                        <span class="small-stats-dot"></span>
                        <span class="stat-value-text">0</span>
                        <span class="small-stats-dot"></span>
                        <span class="stat-value-text">0</span>
                </div>
            </div>
        </div>
    </body>
</html>