<?php
include("config/db_connect.php");

$errors = ["username" => "", "email" => "", "note" => ""];
//initialization
$username_isValid = $email_isValid = $note_isValid = false;
$username = $email = $note = $fish = $quantity = $fish2 = $quantity2 = "";
if (isset($_POST['orders'])){
  //error message if field is left empty
  if (empty($_POST['username'])){
    $errors['username'] = "Field must not be blank";

  }
  else {
      //stores the username in a variable to compare later
      $username = $_POST['username'];
      // checks if username already exists in the database
      $sql = "SELECT * FROM orders WHERE username = '$username'";
      $found = mysqli_query($conn,$sql);
      if (mysqli_num_rows($found) > 0) {
        $errors['username'] = "Already Exists" ;
      }
      else {
          $username_isValid = true;
        }
      // echo mysqli_error($conn);
    }


  if (empty($_POST['email'])){
    $errors['email'] = "Field must not be blank";

  }
  else{
      //stores the username in a variable to compare later
      $email = $_POST['email'];
      $sql = "SELECT * FROM userdata WHERE email='$email'";
      $found = mysqli_query($conn,$sql);
      if (mysqli_num_rows($found) > 0) {
        $errors['email'] = "Already Exists" ;
      }
      elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Email is invalid";
      }
      else{
        $email_isValid = true;
      }
    }


    if (empty($_POST['note'])) {
      $errors['note'] = "Field must not be blank";
    }
    else {
      $note = $_POST['note'];
      $note_isValid = true;
    }

    $fish = $_POST['fish'];
    $quantity = $_POST['quantity'];
    $fish2 = $_POST['fish2'];
    $quantity2 = $_POST['quantity2'];

  if ($email_isValid && $username_isValid && $note_isValid) {
    $sql = "INSERT INTO orders(username, email, fish, note, quantity, fish2, quantity2) VALUES('$username','$email', '$fish', '$note', '$quantity', '$fish2', '$quantity2')";
    if (mysqli_query($conn,$sql)) {
      header('Location: order_receipt.php');
    } else {
      echo "ERROR INSERTION: " . mysqli_error($conn) . "<br>";
    }
  }





}
?>









<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Aqua Store | Egypt</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/form.css">
    <link rel="stylesheet" href="styles/structure.css">
  </head>
  <body class="fishbackground">
    <div class="flexbox-container">
      <div class="flex-box1 titleborder">
        <div class="flex-box-baby1">
          <h1 class="title">&#128032; Aqua Store</h1>
        </div>
        <div class="flexboxnew">
          <a href="login.php">Login</a>
        </div>
        <div class="flexboxnew" style="color:#C83200;">
          <?php include("templates/session_start.php")?>
        </div>
      </div>
      <?php include("templates/nav.php") ?>
        <div class="flex-boxF form-wrap">
          <form action="orders.php" method="post">

            <input id="name" class="user" type="text" name="username" value="" placeholder="Username..">
            <div class="danger"> <p> <?php echo $errors['username'] ?> </p> </div>

            <input id="email" class="user" type="text" name="email" value="" placeholder="Email..">
            <div class="danger"> <p> <?php echo $errors['email'] ?> </p> </div>


            <label for="fish"></label>
            <select id="choice1" class="user" name="fish">
              <option value="koi">Koi</option>
              <option value="zebradanios">ZebraDanios</option>
              <option value="swordtails">SwordTails</option>
              <option value="neontetras">NeonTetras</option>
            </select>

            
            <label for="fish2">[optional]</label>
            <select id="choice2" class="user" name="fish2">
              <option value="nothing">Nothing</option>
              <option value="koi">Koi</option>
              <option value="zebradanios">ZebraDanios</option>
              <option value="swordtails">SwordTails</option>
              <option value="neontetras">NeonTetras</option>
            </select>

            <br><br>
            <textarea id="textarea" class="user" name="note" rows="8" cols="80" placeholder="Enter notes that we should take notice of.."></textarea>
            <div class="danger"> <p> <?php echo $errors['note'] ?>  </p></div>


            <label for="quantity">Quantity (between 1 and 8):</label>
            <input id="quantity" class="user" type="number" name="quantity" min="1" max="8" value="1">



            <label for="quantity2">Quantity [optional]</label>
            <input id="quantity2" class="user" type="number" name="quantity2" min="1" max="4">


            <input class="user" type="submit" name="orders" value="submit">

          </form>
        </div>
      <div class="flex-box3"></div>
    </div>

    <?php include("templates/dropdown.php") ?>
  </body>
</html>
