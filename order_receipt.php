<?php
include("config/db_connect.php");

$sql = "SELECT * FROM orders";
$results = mysqli_query($conn,$sql);
$rows = mysqli_fetch_all($results,MYSQLI_ASSOC);
mysqli_free_result($results);
mysqli_close($conn);

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
  </div>
  <?php include("templates/nav.php") ?>
  <div class="flex-box1">
    <h1>order results</h1>
  </div> 
  <table>
    <thead>
      <tr>
        <td>ID</td>
        <td>username</td>
        <td>email</td>
        <td>fish</td>
        <td>quantity</td>
        <td>More Details</td>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($rows as $row) { ?>
        <tr>
          <td> <?php echo $row['ID'] ?> </td>
          <td> <?php echo $row['username'] ?> </td>
          <td> <?php echo $row['email'] ?> </td>
          <td> <?php echo $row['fish'] ?> </td>
          <td> <?php echo $row['quantity'] ?> </td>
          <td> <a class="button" href="details.php?ID=<?php echo $row['ID']; ?>">View More Details</a> </td>
        </tr>
      <?php } ?>
    </tbody>

  </table>



  <?php include("templates/dropdown.php") ?>
</body>
</html>
