
<!DOCTYPE>
<html>
  <head>
    <title>Formulaire d'authentification</title>
  </head>
  <body>
    <form action="accueil.php" method="post">
      <fieldset>
        <legend>Identifiez-vous</legend>
        <?php
          if(!empty($errorMessage))
          {
            echo '<p>', htmlspecialchars($errorMessage) ,'</p>';
          }
        ?>
       <p>
          <label for="login">Login :</label>
          <input type="text" name="login" id="login" value="" />
        </p>
        <p>
          <label for="password">Password :</label>
          <input type="password" name="password" id="password" value="" />
          <input type="submit" name="submit" value="Se connecter"/>
        </p>
      </fieldset>
    </form>
  </body>
</html>
<?php

  define('LOGIN','alex');
  define('PASSWORD','alex');
  $errorMessage = '';

  if(!empty($_POST))
  {
    if(!empty($_POST['login']) && !empty($_POST['password']))
    {
      if($_POST['login'] !== LOGIN)
      {
        $errorMessage = 'Mauvais login !';
      }
        elseif($_POST['password'] !== PASSWORD)
      {
        $errorMessage = 'Mauvais password !';
      }
        else
      {
        session_start();
        $_SESSION['login'] = LOGIN;
        exit();
      }
    }
      else
    {
      $errorMessage = 'Veuillez inscrire vos identifiants svp !';
    }
  }
?>
