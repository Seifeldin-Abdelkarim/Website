
<?php
session_start();


echo "<a href='logout.php'>Logout</a>";
if (isset($_SESSION['email'])){
echo "welcome " . $_SESSION['email'];
$user = true;
}
else{
echo "welcome " . "Guest";
}
?>