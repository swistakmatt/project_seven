<head>
    <link rel="stylesheet" type="text/css" href="public/css/components/navBar-style.css">
</head>

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
        <a class="gift-button" href="/points">
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