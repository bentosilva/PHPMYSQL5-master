<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Form Example</title>
  </head>
  <body>
    <p>
      <?php
      $firstName = $_REQUEST['firstname'];
      $lastName = $_REQUEST['lastname'];
      echo 'Welcome to our website, ' .
          htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . ' ' .
          htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . '!';
      ?>
    </p>
  </body>
</html>
