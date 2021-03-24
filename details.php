<?php
include("config/db_connect.php");

if (isset($_GET['ID'])){
    $ID = $_GET['ID'];
    $sql = "SELECT * FROM orders WHERE ID = $ID";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}

?>


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
    <div class="squareR">
      <h1>Details</h1>
    </div>
      <table>
        <thead>
          <tr>
            <td>username</td>
            <td>email</td>
            <td>fish</td>
            <td>note</td>
            <td>quantity</td>
            <td>second fish</td>
            <td>quantity of second fish</td>
          </tr>
        </thead>
        <tbody>
          <tr>
        <?php if ($row) {?>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['fish']; ?></td>
            <td><?php echo $row['note']; ?></td>
            <td><?php echo $row['quantity']; ?></td>
            <td><?php echo $row['fish2']; ?></td>
            <td><?php echo $row['quantity2']; ?></td>
          </tr>
        </body>
      </table>

    <div class="flex-box2">
      <?php } else{ ?>
      <h2>No Information Found</h2>
      <?php } ?>
    </div>
  </div>


  <?php include("templates/dropdown.php") ?>
</body>
</html>
