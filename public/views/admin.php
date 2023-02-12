<?php session_start() ?>
<!DOCTYPE html>
<html lang="pl">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="public/css/admin-style.css">
  <script type="text/javascript" src="src/js/admin.js" defer></script>
  <script src="https://kit.fontawesome.com/8a321b7213.js" crossorigin="anonymous"></script>
  <title>project_seven - Panel administratora</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <div class="container">
    <div class="admin-container">
      <?php if ($_SESSION['role'] == 1) : ?>
        <div class="admin-column-names">
          <p class="nickname">nickname</p>
          <p class="id_user">id_user</p>
          <p class="email">email</p>
          <p class="created">created</p>
          <p class="role">role</p>
          <p class="balance">balance</p>
          <p class="claim_timestamp">claim_timestamp</p>
        </div>
        <ul></ul>
      <?php endif; ?>
    </div>
  </div>
</body>

</html>