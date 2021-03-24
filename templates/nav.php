<nav>
  <ul>
    <li class="dropDownIcon main-nav" onclick="dropDown()"><a href="#">&#9776;</a></li>
    <li class="get-li displayNone main-nav"><a href="encyclopedia.php">Encyclopedia</a></li>
    <li class="get-li displayNone main-nav"><a href="index.php">Home</a></li>
    <li class="get-li displayNone main-nav"><a href="about.php">About</a></li>
    <li class="get-li displayNone main-nav"><a id="shop">Shop</a></li>
  </ul>
</nav>



<script>
var shopbutton = document.getElementById("shop");
shopbutton.onclick = function(){
  <?php 
  if (isset($user)) {
      $usercheck = "true";
  }else{
    $usercheck = "false";
  }
  ?>
  if (<?php echo $usercheck; ?>){
    window.location.href = 'orders.php';
  }else{
    alert("you need to login first");
  }
}
</script>