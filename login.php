<?php include("templates/validation.php") ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/form.css">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/structure.css">
    <title>Login Page</title>
  </head>
  <body class="fishbackground">
    <div class="flexbox-container">
      <div class="flex-box1 titleborder">
        <div class="flex-box-baby1">
          <h1 class="title">&#128032; Aqua Store</h1>
        </div>
      </div>
      <?php include("templates/nav.php") ?>
      <div class="flex-boxF form-wrap" style="flex-direction: column;">
        <h2>Login</h2>
        <form action="login.php" method="post">
          <input id="email" type="text" name="email" placeholder="XXX@gmail.com">
          <div class="danger"> <p> <?php echo $errors['email'] ?> </p> </div>
          <br>
          <input id="password" type="text" name="password" placeholder="password">
          <div class="danger"> <p> <?php echo $errors['password'] ?> </p> </div>
          <br>
          &nbsp; &nbsp; &nbsp;
          <br>
          <br>
          <input type="submit" name="login" value="Submit">
        </form>
      </div>
      <br>
      <div class="flex-boxF form-wrap" style="flex-direction: column;">
        <h2>Sign up</h2>
        <form action="login.php" method="post">
            <input type="text" name="fname" placeholder="first name">
            <div class="danger"> <p> <?php echo $errors['fname'] ?> </p> </div>
            <br>
            <input type="text" name="lname" placeholder="last name">
            <div class="danger"> <p> <?php echo $errors['lname'] ?> </p> </div>
            <br>
            <input type="text" name="email" placeholder="XXX@gmail.com">
            <div class="danger"> <p> <?php echo $errors['email'] ?> </p> </div>
            <br>
            <input type="text" name="password" placeholder="password">
            <div class="danger"> <p> <?php echo $errors['password'] ?> </p> </div>
            <br>
            <br>
            <input type="submit" name="signup" onclick="setCookie()" value="Submit">
        </form>
        <?php if(isset($_COOKIE['email']) and isset($_COOKIE['password'])){
                $email = $_COOKIE['email'];
                $password = $_COOKIE['password'];

                echo "<script>
                document.getElementById('email').value = '$email';
                document.getElementById('password').value = '$password';
                </script>";
              }
        ?>
      </div>
    </div>

    <?php include("templates/dropdown.php") ?>
  </body>
</html>


