<head>
  <link rel="stylesheet" type="text/css" href="public/css/components/burgerMenu-style.css">
</head>

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
    <?php if ($_SESSION['role'] == 1) : ?>
      <a class="admin-button" href="/admin">
        <span class="admin-button_text">Panel administratora</span>
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