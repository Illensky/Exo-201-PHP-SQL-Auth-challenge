<?php
require __DIR__ . '/parts/header.php';
?>
    <form action="/check_login.php" method="post">
      <div>
        <label for="username">Identifiant</label>
        <input type="text" name="username">
      </div>
      <div>
        <label for="password">Mot de passe </label>
        <input type="password" name="password">
      </div>
      <div>
          <input type="submit" name="loginSubmit" value="Se connecter">
      </div>
    </form>
  </body>
</html>
