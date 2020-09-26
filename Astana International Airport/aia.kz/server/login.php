<?php
  //tato cast funkce dela prihlaseni a odhlaseni uzivatele
  session_start();

  $login = "";
  $error = array();

  $db = mysqli_connect('wa.toad.cz', 'utemiadi', 'webove aplikace', 'utemiadi');
  if (isset($_POST['login_user'])) {
    $login = htmlspecialchars(mysqli_real_escape_string($db,$_POST['log']));
    $password = htmlspecialchars(mysqli_real_escape_string($db,$_POST['password']));
    
    if (empty($login)) {
      array_push($error, "Login is required");
    }
    if (empty($password)) {
      array_push($error, "Password is required");
    }
    
    if (count($error) == 0) {
      $query = "SELECT * FROM users WHERE login='$login'";
      $result = mysqli_query($db, $query);
      $user_info = mysqli_fetch_assoc($result);
      if (password_verify($password,$user_info['password'])) {
        $_SESSION['login'] = $login;
      }else {
          array_push($error, "Incorrect login or password");
      }
    }
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['login']);
  }
?>