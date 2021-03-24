<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Aqua Store | Egypt</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/form.css">
    <link rel="stylesheet" href="styles/structure.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
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
      <div class="flexCardRow">
        <div class="cardCol">
          <div class="card">

            <div class="fish-name">
              <h3 class="h3">Species Name</h3>
              <p class="species-name">Shrimps</p>
            </div>
            <div class="characteristic">
              <h3 class="h3">Likes</h3>
              <ul class="likes">
                <li><i class="fas fa-seedling"></i>Algae</li>
                <li><i class="fas fa-drumstick-bite"></i>animal protein</li>
                <li><i class="fas fa-leaf"></i>vegetable matter</li>
              </ul>
              <div class="view-more">
              <a onclick="show1()" class="btn" href="#hide1">More details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="cardCol">
          <div class="card">

            <div class="fish-name">
              <h3 class="h3">Species Name</h3>
              <p class="species-name">piranhas</p>
            </div>
            <div class="characteristic">
              <h3 class="h3">Likes</h3>
              <ul class="likes">
                <li><i class="fas fa-bug"></i>insects</li>
                <li><i class="fas fa-fish"></i>other fish</li>
                <li><i class="fas fa-bug"></i> worms</li>
              </ul>
              <div class="view-more">
              <a onclick="show2()" class="btn" href="#hide2">More details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="cardCol">
          <div class="card">

            <div class="fish-name">
              <h3 class="h3">Species Name</h3>
              <p class="species-name">Octopus</p>
            </div>
            <div class="characteristic">
              <h3 class="h3">Likes</h3>
              <ul class="likes">
                <li><i class="fas fa-bread-slice"></i>Crabs</li>
                <li><i class="fas fa-bread-slice"></i>Shrimps</li>
                <li><i class="fas fa-bread-slice"></i>Lobsters</li>
              </ul>
              <div class="view-more">
              <a onclick="show3()" class="btn" href="#hide3">More details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="flexCardRow">
        <div class="cardCol">
          <div class="card">

            <div class="fish-name">
              <h3 class="h3">Species Name</h3>
              <p class="species-name">Neon Tetras</p>
            </div>
            <div class="characteristic">
              <h3 class="h3">Likes</h3>
              <ul class="likes">
                <li><i class="fas fa-bread-slice"></i>algae</li>
                <li><i class="fas fa-bread-slice"></i>larvae from insects</li>
                <li><i class="fas fa-bread-slice"></i>flakes</li>
              </ul>
              <div class="view-more">
              <a onclick="show4()" class="btn" href="#hide4">More details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="cardCol">
          <div class="card">

            <div class="fish-name">
              <h3 class="h3">Species Name</h3>
              <p class="species-name">Koi Fish</p>
            </div>
            <div class="characteristic">
              <h3 class="h3">Likes</h3>
              <ul class="likes">
                <li><i class="fas fa-bread-slice"></i>shrimp</li>
                <li><i class="fas fa-bread-slice"></i>lettuce</li>
                <li><i class="fas fa-bread-slice"></i>peas</li>
              </ul>
              <div class="view-more">
              <a onclick="show5()" class="btn" href="#hide5">More details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="cardCol">
          <div class="card">

            <div class="fish-name">
              <h3 class="h3">Species Name</h3>
              <p class="species-name">Zebra Danios</p>
            </div>
            <div class="characteristic">
              <h3 class="h3">Likes</h3>
              <ul class="likes">
                <li><i class="fas fa-bread-slice"></i>flakes</li>
                <li><i class="fas fa-bread-slice"></i>bloodworms</li>
                <li><i class="fas fa-bread-slice"></i>Daphnia</li>
              </ul>
              <div class="view-more">
              <a onclick="show6()" class="btn" href="#hide6">More details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="flexCardRow">
        <div class="cardCol">
          <div class="card">

            <div class="fish-name">
              <h3 class="h3">Species Name</h3>
              <p class="species-name">Crocodiles</p>
            </div>
            <div class="characteristic">
              <h3 class="h3">Likes</h3>
              <ul class="likes">
                <li><i class="fas fa-frog"></i>small frogs</li>
                <li><i class="fas fa-bread-slice"></i>lizards</li>
                <li><i class="fas fa-bread-slice"></i>crustaceans</li>
              </ul>
              <div class="view-more">
              <a onclick="show7()" class="btn" href="#hide7">More details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="cardCol">
          <div class="card">

            <div class="fish-name">
              <h3 class="h3">Species Name</h3>
              <p class="species-name">Water-Turtles</p>
            </div>
            <div class="characteristic">
              <h3 class="h3">Likes</h3>
              <ul class="likes">
                <li><i class="fas fa-bread-slice"></i>worms</li>
                <li><i class="fas fa-bread-slice"></i>lettuce</li>
                <li><i class="fas fa-bread-slice"></i>grapes</li>
              </ul>
              <div class="view-more">
              <a onclick="show8()" class="btn" href="#hide8">More details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="cardCol">
          <div class="card">

            <div class="fish-name">
              <h3 class="h3">Species Name</h3>
              <p class="species-name">Guppies</p>
            </div>
            <div class="characteristic">
              <h3 class="h3">Likes</h3>
              <ul class="likes">
                <li><i class="fas fa-bread-slice"></i>egg yolk</li>
                <li><i class="fas fa-bread-slice"></i>brine shrimp</li>
                <li><i class="fas fa-bread-slice"></i>flakes</li>
              </ul>
              <div class="view-more">
                <a onclick="show9()" class="btn" href="#hide9">More details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <div class="flexbox-container">
      

        <input class="btn1" value="Hide Details" type="button" onClick="hide()">

        <div class="hidden" name="hide1" id="hide1" style="display:none;">
          <div class="flex-box4">
            <h1 class="titlebox">Shrimps</h1>
          </div>
          <div class="flex-box4">
            <div class="flex-box-baby3">
              <h3 class="hugetext">Likes</h3>
            </div>
            <div class="flex-box-baby3">
              <h3 class="hugetext">dislikes</h3>
            </div>
          </div>
          <div class="flex-box4">
            <div class="sect">
              <ul>
                <li>apples</li>
                <li>apples</li>
                <li>apples</li>
                <li>apples</li>
                <li>apples</li>
              </ul>
            </div>
            <div class="sect">
              <ul>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
              </ul>
            </div>
          </div>
          <div class="flex-box4">
            <div class="description">
              <h2>Description</h2>
            </div>
            <div class="paragraph">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
        <div class="hidden" name="hide2" id="hide2" style="display:none;">
          <div class="flex-box4">
            <h1 class="titlebox">Piranhas</h1>
          </div>
          <div class="flex-box4">
            <div class="flex-box-baby3">
              <h3 class="hugetext">Likes</h3>
            </div>
            <div class="flex-box-baby3">
              <h3 class="hugetext">dislikes</h3>
            </div>
          </div>
          <div class="flex-box4">
            <div class="sect">
              <ul>
                <li>apples</li>
                <li>apples</li>
                <li>apples</li>
                <li>apples</li>
                <li>apples</li>
              </ul>
            </div>
            <div class="sect">
              <ul>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
              </ul>
            </div>
          </div>
          <div class="flex-box4">
            <div class="description">
              <h2>Description</h2>
            </div>
            <div class="paragraph">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
        <div class="hidden" name="hide3" id="hide3" style="display:none;">
          <div class="flex-box4">
            <h1 class="titlebox">Octupus</h1>
          </div>
          <div class="flex-box4">
            <div class="flex-box-baby3">
              <h3 class="hugetext">Likes</h3>
            </div>
            <div class="flex-box-baby3">
              <h3 class="hugetext">dislikes</h3>
            </div>
          </div>
          <div class="flex-box4">
            <div class="sect">
              <ul>
                <li>apples</li>
                <li>apples</li>
                <li>apples</li>
                <li>apples</li>
                <li>apples</li>
              </ul>
            </div>
            <div class="sect">
              <ul>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
              </ul>
            </div>
          </div>
          <div class="flex-box4">
            <div class="description">
              <h2>Description</h2>
            </div>
            <div class="paragraph">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
        <div class="hidden" name="hide4" id="hide4" style="display:none;">
          <div class="flex-box4">
            <h1 class="titlebox">Neon Tetras</h1>
          </div>
          <div class="flex-box4">
            <div class="flex-box-baby3">
              <h3 class="hugetext">Likes</h3>
            </div>
            <div class="flex-box-baby3">
              <h3 class="hugetext">dislikes</h3>
            </div>
          </div>
          <div class="flex-box4">
            <div class="sect">
              <ul>
                <li>apples</li>
                <li>apples</li>
                <li>apples</li>
                <li>apples</li>
                <li>apples</li>
              </ul>
            </div>
            <div class="sect">
              <ul>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
              </ul>
            </div>
          </div>
          <div class="flex-box4">
            <div class="description">
              <h2>Description</h2>
            </div>
            <div class="paragraph">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
        <div class="hidden" name="hide5" id="hide5" style="display:none;">
          <div class="flex-box4">
            <h1 class="titlebox">Koi Fish</h1>
          </div>
          <div class="flex-box4">
            <div class="flex-box-baby3">
              <h3 class="hugetext">Likes</h3>
            </div>
            <div class="flex-box-baby3">
              <h3 class="hugetext">dislikes</h3>
            </div>
          </div>
          <div class="flex-box4">
            <div class="sect">
              <ul>
                <li>apples</li>
                <li>apples</li>
                <li>apples</li>
                <li>apples</li>
                <li>apples</li>
              </ul>
            </div>
            <div class="sect">
              <ul>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
              </ul>
            </div>
          </div>
          <div class="flex-box4">
            <div class="description">
              <h2>Description</h2>
            </div>
            <div class="paragraph">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
        <div class="hidden" name="hide6" id="hide6" style="display:none;">
          <div class="flex-box4">
            <h1 class="titlebox">Zebra Danios</h1>
          </div>
          <div class="flex-box4">
            <div class="flex-box-baby3">
              <h3 class="hugetext">Likes</h3>
            </div>
            <div class="flex-box-baby3">
              <h3 class="hugetext">dislikes</h3>
            </div>
          </div>
          <div class="flex-box4">
            <div class="sect">
              <ul>
                <li>apples</li>
                <li>apples</li>
                <li>apples</li>
                <li>apples</li>
                <li>apples</li>
              </ul>
            </div>
            <div class="sect">
              <ul>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
              </ul>
            </div>
          </div>
          <div class="flex-box4">
            <div class="description">
              <h2>Description</h2>
            </div>
            <div class="paragraph">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
        <div class="hidden" name="hide7" id="hide7" style="display:none;">
          <div class="flex-box4">
            <h1 class="titlebox">Crocodiles</h1>
          </div>
          <div class="flex-box4">
            <div class="flex-box-baby3">
              <h3 class="hugetext">Likes</h3>
            </div>
            <div class="flex-box-baby3">
              <h3 class="hugetext">dislikes</h3>
            </div>
          </div>
          <div class="flex-box4">
            <div class="sect">
              <ul>
                <li>apples</li>
                <li>apples</li>
                <li>apples</li>
                <li>apples</li>
                <li>apples</li>
              </ul>
            </div>
            <div class="sect">
              <ul>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
              </ul>
            </div>
          </div>
          <div class="flex-box4">
            <div class="description">
              <h2>Description</h2>
            </div>
            <div class="paragraph">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
        <div class="hidden" name="hide8" id="hide8" style="display:none;">
          <div class="flex-box4">
            <h1 class="titlebox">Water-Turtles</h1>
          </div>
          <div class="flex-box4">
            <div class="flex-box-baby3">
              <h3 class="hugetext">Likes</h3>
            </div>
            <div class="flex-box-baby3">
              <h3 class="hugetext">dislikes</h3>
            </div>
          </div>
          <div class="flex-box4">
            <div class="sect">
              <ul>
                <li>apples</li>
                <li>apples</li>
                <li>apples</li>
                <li>apples</li>
                <li>apples</li>
              </ul>
            </div>
            <div class="sect">
              <ul>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
              </ul>
            </div>
          </div>
          <div class="flex-box4">
            <div class="description">
              <h2>Description</h2>
            </div>
            <div class="paragraph">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
        <div class="hidden" name="hide9" id="hide9" style="display:none;">
          <div class="flex-box4">
            <h1 class="titlebox">Guppies</h1>
          </div>
          <div class="flex-box4">
            <div class="flex-box-baby3">
              <h3 class="hugetext">Likes</h3>
            </div>
            <div class="flex-box-baby3">
              <h3 class="hugetext">dislikes</h3>
            </div>
          </div>
          <div class="flex-box4">
            <div class="sect">
              <ul>
                <li>apples</li>
                <li>apples</li>
                <li>apples</li>
                <li>apples</li>
                <li>apples</li>
              </ul>
            </div>
            <div class="sect">
              <ul>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
                <li>Tomatoes</li>
              </ul>
            </div>
          </div>
          <div class="flex-box4">
            <div class="description">
              <h2>Description</h2>
            </div>
            <div class="paragraph">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
      </div>
<script type="text/javascript">
function hide(){

  var hidden = document.getElementsByClassName("hidden");
  for(var i = 0; i < hidden.length; i++){
    if (hidden[i].style.display='block'){
      hidden[i].style.display='none';
    }
  }
}

function show1(){
  hide();
  document.getElementById('hide1').style.display='block';
}
function show2(){
  hide();
  document.getElementById('hide2').style.display='block';
}
function show3(){
  hide();
  document.getElementById('hide3').style.display='block';
}
function show4(){
  hide();
  document.getElementById('hide4').style.display='block';
}
function show5(){
  hide();
  document.getElementById('hide5').style.display='block';
}
function show6(){
  hide();
  document.getElementById('hide6').style.display='block';
}
function show7(){
  hide();
  document.getElementById('hide7').style.display='block';
}
function show8(){
  hide();
  document.getElementById('hide8').style.display='block';
}
function show9(){
  hide();
  document.getElementById('hide9').style.display='block';
}


</script>
    

      


    <?php include("templates/dropdown.php") ?>
  </body>
</html>
