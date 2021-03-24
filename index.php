
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
      </div>
      <?php include("templates/nav.php")?>
      <div class="flex-box2">
        <div class="flex-box-baby2">
          <div class="mySlides fade">
            <img src="images/gty_koi_mi_130728_4x3t_992.jpg" style="width:300px">
          </div>
          <div class="mySlides fade">
            <img src="images/download.jfif" style="width:300px">
          </div>
          <div class="mySlides fade">
            <img src="images/neon-tetra-for-destkop-1024x683.jpg" style="width:300px">
          </div>
        </div>
        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>

        <div class="flex-box-baby2 txt-col">
          <p class="main">Welcome to Aqua Store, here you will find all types of oriental fish, there's
            also an Encyclopedia that will help you better understand the fish we're selling you,
            whether they're the grumpy kind or the scary ones.</p>
        </div>
      </div>
      <br>
      <hr style="width:70%; border: 1px solid #000080;">
      <div class="flex-box3">
        <div class="flex-box-baby1">
          <ul>
            <p><u style="font-size:25px">Examples of fish Sold</u></p>
            <li class="Lucida change-points">KoiFish</li>
            <li class="Lucida change-points">ZebraDanios</li>
            <li class="Lucida change-points">Swordtails</li>
            <li class="Lucida change-points">NeonTetras</li>
            <li class="Lucida change-points">MiniPiranha</li>
            <li class="Lucida change-points">Betta</li>
            <li class="Lucida change-points">Goldfish</li>
            <li class="Lucida change-points">Angelfish</li>
          </ul>
        </div>
        <div class="flex-box-baby2">
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="https://en.wikipedia.org/wiki/Koi">
              <img src="images/architecture-asian-building-colordiversity-colorful-delicacy-fish-fishbackground-fishdelicacy-fishpond-fishpopulation-fishswarm-136381924.jpg" alt="Koi">
            </a>
            <div class="card-text">Koi fish</div>
          </div>
        </div>


        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="https://en.wikipedia.org/wiki/Zebrafish">
              <img src="images/download.jfif" alt="Zebra Danios" width="600" height="400">
            </a>
            <div class="card-text">Zebra Danios</div>
          </div>
        </div>

        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="https://en.wikipedia.org/wiki/Neon_tetra">
              <img src="images/neon-tetra-for-destkop-1024x683.jpg" alt="Neon Tetras" width="600" height="400">
            </a>
            <div class="card-text">Neon Tetras</div>
          </div>
        </div>

        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="https://en.wikipedia.org/wiki/Piranha">
              <img src="images/piranhas-swimming-underwater-589726451-5c879b7546e0fb00015f8ff9.jpg" alt="Mini piranhas" width="600" height="400">
            </a>
            <div class="card-text">Mini Piranha</div>
          </div>
        </div>
    </div>




    <?php include("templates/dropdown.php") ?>
  </body>
</html>
