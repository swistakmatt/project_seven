<!DOCTYPE html>
<html lang="pl">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="public/css/register-style.css">
  <script src="https://kit.fontawesome.com/8a321b7213.js" crossorigin="anonymous"></script>
  <title>project_seven - Rejestracja</title>
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
    <span class="register-text">Stwórz konto</span>
    <div class="register-container">
      <form>
        <div class="register-input-container">
          <label for="email"> Email</label>
          <input name="email" type="text" placeholder="jankowalski@email.com">
          <label for="password"> Hasło</label>
          <input name="password" type="password" placeholder="123!słodkiekotki420">
          <label for="password"> Powtórz hasło</label>
          <input name="password" type="password" placeholder="123!słodkiekotki420">
          <button id="register-button"><img id="submit-arrow" src="public/img/submit-arrow.svg"></button>
        </div>
      </form>
    </div>
    <a href="/login">
      <span>Masz już konto?</span>
    </a>
  </div>
</body>

</html>