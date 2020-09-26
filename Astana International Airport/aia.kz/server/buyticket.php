<?php
  session_start();

  $firstname = "";
  $lastname = "";
  $departure_date = "";
  $departure_time = "";
  $arrival_time = "";
  $flight="";
  $travel_class="";
  $arrival_date = "";
  $of="";
  $toward="";
  $errors = array(); 

  $db = mysqli_connect('wa.toad.cz', 'utemiadi', 'webove aplikace', 'utemiadi');

  //Jest-li byla kliknuta tlacitko s jmenem "buy" vyplnuje tato podminka
  if (isset($_POST['buy'])) {
    $firstname = htmlspecialchars(mysqli_real_escape_string($db, $_POST['firstname']));
    $lastname = htmlspecialchars(mysqli_real_escape_string($db, $_POST['lastname']));
    $departure_date = htmlspecialchars(mysqli_real_escape_string($db, $_POST['departure_date']));
    $arrival_date = htmlspecialchars(mysqli_real_escape_string($db, $_POST['arrival_date']));
    $of = htmlspecialchars(mysqli_real_escape_string($db, $_POST['of']));
    $toward = htmlspecialchars(mysqli_real_escape_string($db, $_POST['toward']));
    $departure_time = htmlspecialchars(mysqli_real_escape_string($db, $_POST['departure_time']));
    $arrival_time = htmlspecialchars(mysqli_real_escape_string($db, $_POST['arrival_time']));
    $flight = htmlspecialchars(mysqli_real_escape_string($db, $_POST['flight']));
    $travel_class = htmlspecialchars(mysqli_real_escape_string($db, $_POST['travel_class']));
    $login=$_SESSION['login'];

    if (empty($firstname)) { array_push($errors, "Firstname is required"); }
    if (empty($lastname)) { array_push($errors, "Lastname is required"); }
    if (empty($departure_date)) { array_push($errors, "DATE is required"); }
    if (empty($arrival_date)) { array_push($errors, "DATE is required"); }
    if (empty($of)) { array_push($errors, "Of is required"); }
    if (empty($toward)) { array_push($errors, "To is required"); }
    if (empty($departure_time)) { array_push($errors, "TIME is required"); }
    if (empty($arrival_time)) { array_push($errors, "TIME is required"); }
    if (empty($flight)) { array_push($errors, "Flight is required"); }

    $user_check_query = "SELECT * FROM tickets WHERE firstname='$firstname' AND lastname='$lastname' AND departure_date='$departure_date' AND arrival_date='$arrival_date' AND of='$of' AND toward='$toward' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) {
      if (($user['firstname'] === $firstname) && ($user['lastname']===$lastname) && ($user['departure_date']===$departure_date) && ($user['arrival_date']===$arrival_date) && ($user['of']===$of) && ($user['toward']===$toward)) {
        array_push($errors, "This passenger already exists");
      }
    }

    if (count($errors) == 0) {
      $res = mysqli_query($db, "INSERT INTO tickets (firstname, lastname, departure_date, arrival_date, of, toward, departure_time, arrival_time,flight, login) VALUES('$firstname', '$lastname', '$departure_date', '$arrival_date', '$of', '$toward', '$departure_time', '$arrival_time', '$flight', '$login')");
      $row=mysqli_fetch_array($res);
      $output .= '
        <div class="good" >
          <h3>Purchase successful</h3>
        </div>
      ';
      echo $output;
    }
  }
?>