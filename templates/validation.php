<?php
include("config/db_connect.php");

$errors = ["email" => "", "password" => "", "fname" => "", "lname" => ""];
//initialization
$email_isValid = $password_isValid = $fname_isValid = $lname_isValid = false;
$email = $password = $fname = $lname = "";
if (isset($_POST['signup'])){
  //error message if field is left empty
  if (empty($_POST['email'])){
    $errors['email'] = "Field must not be blank";

  }
  else {
      //stores the email in a variable to insert later
      $email = $_POST['email'];
      // checks if email already exists in the database
      $sql = "SELECT * FROM userdata WHERE email = '$email'";
      $found = mysqli_query($conn,$sql);
      if (mysqli_num_rows($found) > 0) {
        $errors['email'] = "Already Exists" ;
      }
      //validates the email if its @something.com
      elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Email is invalid";
      }
      //gives the email_isValid a true, if in the end all of those variables are true, the posts will be inserted into the table.
      else {
          $email_isValid = true;
        }
    }


    if (empty($_POST['password'])) {
      $errors['password'] = "Field must not be blank";
    }
    else{
      $password = $_POST['password'];
      $password_isValid = true;
    }


    if (empty($_POST['fname'])) {
      $errors['fname'] = "Field must not be blank";
    }
    else {
      $fname = $_POST['fname'];
      $fname_isValid = true;
    }

    if (empty($_POST['lname'])) {
      $errors['lname'] = "Field must not be blank";
    }
    else {
      $lname = $_POST['lname'];
      $lname_isValid = true;
    }
    //if all of the conditions are true, they will be inseted into the table and the page will be redirected to the index page
  if ($email_isValid && $password_isValid && $fname_isValid && $lname_isValid) {
    $sql = "INSERT INTO userdata(email, password, fname, lname) VALUES('$email', '$password', '$fname', '$lname')";
    if (mysqli_query($conn,$sql)) {
      header('Location: index.php');
    //will type an error for which insertion isnt working
    } else {
      echo "ERROR INSERTION: " . mysqli_error($conn) . "<br>";
    }
  }


}

if (isset($_POST['login'])){
  //error message if field is left empty
  if (empty($_POST['email'])){
    $errors['email'] = "Field must not be blank";

  }
  else {
      //stores the email in a variable to insert later
      $email = $_POST['email'];
      // checks if email already exists in the database
      $sql = "SELECT * FROM userdata WHERE email = '$email'";
      $found = mysqli_query($conn,$sql);
      if (mysqli_num_rows($found) > 0) {
        $email_isValid = true;
      }
      //if it isnt in the database, there will be an error message
      else {
        $errors['email'] = "Email is invalid";
      }
    }

    if (empty($_POST['password'])) {
      $errors['password'] = "Field must not be blank";
    }
    else{
      $password = $_POST['password'];
      // checks if email already exists in the database
      $sql = "SELECT * FROM userdata WHERE password = '$password'";
      $found = mysqli_query($conn,$sql);
      if (mysqli_num_rows($found) > 0) {
        $password_isValid = true;
      }
      //if it isnt in the database, there will be an error message
      else {
        $errors['password'] = "password is invalid";
      }
    }
    //if all of the conditions are true, they will be inseted into the table and the page will be redirected to the index page
  if ($email_isValid && $password_isValid) {
    setcookie('email', $email, time()+100*200*2);
    setcookie('password', $password, time()+100*200*2);
    session_start();
    $_SESSION['email'] = $email;
    if (mysqli_query($conn,$sql)) {
      header('Location: index.php');
    //will type an error for which insertion isnt working
    } else {
      echo "ERROR INSERTION: " . mysqli_error($conn) . "<br>";
    }
  }
}

?>
