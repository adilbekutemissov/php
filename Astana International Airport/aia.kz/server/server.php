<?php
  session_start();

  $firstname = "";
  $lastname = "";
  $login = "";
  $email = "";
  $errors = array();

  $db = mysqli_connect('wa.toad.cz', 'utemiadi', 'webove aplikace', 'utemiadi');

  if (isset($_POST['register'])) {
    $firstname = htmlspecialchars(mysqli_real_escape_string($db, $_POST['firstname']));
    $lastname = htmlspecialchars(mysqli_real_escape_string($db, $_POST['lastname']));
    $login = htmlspecialchars(mysqli_real_escape_string($db, $_POST['login']));
    $email = htmlspecialchars(mysqli_real_escape_string($db, $_POST['email']));
    $password1 = htmlspecialchars(mysqli_real_escape_string($db, $_POST['password1']));
    $password2 = htmlspecialchars(mysqli_real_escape_string($db, $_POST['password2']));

    if (empty($firstname)) { array_push($errors, "Firstname is required"); }
    if (empty($lastname)) { array_push($errors, "Lastname is required"); }
    if (empty($login)) { array_push($errors, "Login is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password1)) { array_push($errors, "Password is required"); }
    if (empty($password2)) { array_push($errors, "Confirm password is required");}
    if ($password1 != $password2) { array_push($errors, "The two passwords do not match");}

    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
      array_push($errors,"Only letters and white space allowed"); 
    }
    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      array_push($errors,"Only letters and white space allowed"); 
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      array_push($errors,"Invalid email format"); 
    }

    $user_check_query = "SELECT * FROM users WHERE login='$login' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) {
      if ($user['login'] === $login) {
        array_push($errors, "login already exists");
      }

      if ($user['email'] === $email) {
        array_push($errors, "email already exists");
      }
    }

    if (count($errors) == 0) {
      $password = password_hash($password1, PASSWORD_DEFAULT);
      mysqli_query($db, "INSERT INTO users (firstname, lastname, login, email, password) VALUES('$firstname', '$lastname', '$login', '$email', '$password')");
      $output .= '
        <div class="success" >
          <h3>Success</h3>
        </div>
      ';
      echo $output;
?>

<script>
  $(document).ready(function () {
    window.setTimeout(function () {
      location.href = "http://wa.toad.cz/~utemiadi/aia.kz/";}, 200
    );
  });
</script>

<?php } } ?>