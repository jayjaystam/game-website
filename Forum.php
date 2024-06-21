<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/php/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha384-dfZpZjJZKLOpXDQm2aDM0jF7efvH+2T8XzUmikXr6q0jZ9ZlHAAKRII5oD33J4k5"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <nav class="navbar">
      <div class="logo">
        <img src="https://art.pixilart.com/fb41e74302b2297.png" alt="Logo" />
      </div>
      <div class="search-bar">
        <input type="text" placeholder="Search..." />
      </div>
      <?php if (isset($user)): ?>
        
      <p>Welcome <?= htmlspecialchars($user["name"]) ?></p>
      
      <p><a href="php/logout.php">Log out</a></p>
      
  <?php else: ?>
      
      <p><a href="php/login2.php">Log in</a> or <a href="signup.html">sign up</a></p>
      
  <?php endif; ?>
    </nav>
<!-- hier heb je de knoppen om naar de andere pagina's te komen-->
    <div class="iets">
      <div class="div-links">
        <div class="sidebar">
          <a href="index.php"><p>Home</p></a>
          <a href="Forum.php"><p>Forums</p></a>
          <a href="NAV-HTML.php"><p>Games</p></a>
        </div>
      </div>

    <div class="div-mid">
      <div class="form">
        <div class="balkje">
          <h1>Forum</h1>
        </div>

        <div class="balkje1 balkbreedte balkafbeelding">
          <img src="img/rainbow6.jpg" />
          <p>
            "
"Rainbow Six" is een bekende first-person shooter (FPS) game ontwikkeld door Ubisoft, waarin spelers leiding geven aan elite anti-terrorisme-eenheden. De game staat bekend om zijn intense teamgebaseerde actie en realistische benadering van tactische gevechten."
          </p>
        </div>
        <div class="commentaar"> 
          <ul>
          <li>👍Like</li>
            <li>🎇Share</li>
            <li>💬Comment</li>
          </ul>
        </div>
        <div class="balkje3 balkbreedte balkafbeelding">
          <p>
          De "Sims" is een populaire levenssimulatiegame ontwikkeld door Maxis en uitgegeven door Electronic Arts, waar spelers virtuele personages creëren en besturen in een gesimuleerde wereld. Spelers kunnen het leven van hun Sims beheren, inclusief hun behoeften, relaties, carrières en huisvesting, terwijl ze hun unieke verhalen vertellen.
          </p>
          <img src="img/sims.jpg" />
        </div>
      </div>
      <div class="commentaar"> 
          <ul>
          <li>👍Like</li>
            <li>🎇Share</li>
            <li>💬Comment</li>
          </ul>
        </div>

      <div class="form2">
        <div class="kat">
          <h1>Games</h1>
        </div>

        <a href="NAV-HTML.html">
          <div class="afbeelding1">
            <img src="img/minecraft.jpg" alt="Minecraft" width="150px" height="150px" style="float: left" />
          </div>
        </a>
        <a href="NAV-HTML.html">
          <div class="afbeelding2">
            <img src="img/hogwarts.jpg" style="float: left" ; width="150px" ; height="150px" ; />
          </div>
        </a>
        <div class="afbeelding3">
          <img src="img/valorant.jpg" style="float: left" ; width="150px" ; height="150px" ; />
        </div>

        <div class="afbeelding4">
          <img src="img/fortnite.jpg" style="float: left" ; width="150px" ; height="150px" ; />
        </div>

        <div class="afbeelding5">
          <img src="img/disney.jpg" style="float: left" ; width="150px" ; height="150px" ; />
        </div>

        <div class="afbeelding6">
          <img src="img/zomboid.jpg" style="float: left" ; width="150px" ; height="150px" ; />
        </div>

        <div class="afbeelding7">
          <img src="img/csgo.jpg" style="float: left" ; width="150px" ; height="150px" ; />
        </div>

        <div class="afbeelding8">
          <img src="img/7days.jpg" style="float: left" ; width="150px" ; height="150px" ; />
        </div>

        <div class="afbeelding9">
          <img src="img/Ark.jpg" style="float: left" ; width="150px" ; height="150px" ; />
        </div>

        <div class="afbeelding10">
          <img src="img/forest.jpg" style="float: left" ; width="150px" ; height="150px" ; />
        </div>

        <div class="afbeelding11">
          <img src="img/genshin.jpg" style="float: left" ; width="150px" ; height="150px" ; />
        </div>

        <div class="afbeelding12">
          <img src="img/gta.jpg" style="float: left" ; width="150px" ; height="150px" ; />
        </div>

        <div class="afbeelding13">
          <img src="img/lego.jpg" style="float: left" ; width="150px" ; height="150px" ; />
        </div>

        <div class="afbeelding14">
          <img src="img/LOL.jpg" style="float: left" ; width="150px" ; height="150px" ; />
        </div>

        <div class="afbeelding15">
          <img src="img/phasmo.jpg" style="float: left" ; width="150px" ; height="150px" ; />
        </div>

        <div class="afbeelding16">
          <img src="img/rainbow6.jpg" style="float: left" ; width="150px" ; height="150px" ; />
        </div>

        <div class="afbeelding17">
          <img src="img/starwars.jpg" style="float: left" ; width="150px" ; height="150px" ; />
        </div>

        <div class="afbeelding18">
          <img src="img/valheim.jpg" style="float: left" ; width="150px" ; height="150px" ; />
        </div>
      </div>
    </div>

    <div class="div-rechts">
      <div class="sidebar-right"></div>
    </div>
  </div>

  <footer>
    <div class="social-links">
      <a href="https://www.instagram.com/" target="_blank"><img src="img/insta trans.png" alt="Instagram" /></a>
      <a href="https://www.facebook.com/" target="_blank"><img src="img/facebook trans.png" alt="Facebook" /></a>
      <a href="https://twitter.com/" target="_blank"><img src="img/twitter trans.png" alt="Twitter" /></a>
    </div>
  </footer>
</body>

</html>