<?php session_start();
      session_destroy();
      if(isset($_COOKIE['email']) and isset($_COOKIE['password'])){
        $email = $_COOKIE['email'];
        $password = $_COOKIE['password'];
        setcookie('email', $email, time()-1);
        setcookie('password', $password, time()-1);
      }
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/form.css">
    <link rel="stylesheet" href="styles/structure.css">
    <title>logout</title>
</head>
<body class="fishbackground">
  <div class="flexbox-container">
    <div class="flex-box1 titleborder">
      <div class="flex-box-baby1">
        <h1 class="title">&#128032; Aqua Store</h1>
      </div>
      <div class="flex-box-baby2">
        <a href="login.php" >Login</a>
      </div>
    </div>
    <?php include("templates/nav.php") ?>
    <div class="flex-box2 form-wrap">
      
      <h2>You have successfully logged out. 
      click on the login in the top of the page to login again</h2>
    </div>
  </div>
</body>
</html>