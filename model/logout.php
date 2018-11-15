<?php
  require_once '/var/www/user_data/ngubanova/me/join-mvc/model/authFunctions.php';

  if(isAuthorized())
    logOut();
  header('Location: /var/www/user_data/ngubanova/me/join-mvc/view/authorization.php');
?>
