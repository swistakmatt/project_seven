<!DOCTYPE html>
<html lang="pl">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="public/css/login-style.css">
  <script src="https://kit.fontawesome.com/8a321b7213.js" crossorigin="anonymous"></script>
  <title>project_seven - Logowanie</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <div class="container">
    <a class="language-container" href="">
      <img class="polish-flag-svg" src="public/img/polish-flag.svg">
      <span class="language-text">PL</span>
    </a>
    <div class="logo-container">
      <img class="logo-svg" src="public/img/seven-logo.svg">
    </div>
    <span class="login-text">Zaloguj się</span>
    <div class="login-container">
      <div class="messages-container">
        <?php
        if (isset($messages)) {
          foreach ($messages as $message) {
            echo $message;
          }
        }
        ?>
      </div>
      <form action="login" method="POST">
        <div class="login-input-container">
          <label for="email"> Email</label>
          <input name="email" type="text" placeholder="jankowalski@email.com">
          <label for="password"> Hasło</label>
          <input name="password" type="password" placeholder="123!słodkiekotki420">
        </div>
        <div class="checkbox-container">
          <input type="checkbox" id="keep-logged" name="keep-logged" value="true">
          <label for="keep-logged"> Nie wylogowuj mnie</label>
        </div>
        <button type="submit"><img id="submit-arrow" src="public/img/submit-arrow.svg"></button>
      </form>
    </div>
    <a href="/recover">
      <span>Nie możesz się zalogować?</span>
    </a>
    <a href="/register">
      <span>Stwórz konto</span>
    </a>
  </div>
</body>

</html>