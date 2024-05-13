<?php
    $cookie_name = "test-1";
    $cookie_value = "dota2 Web";
    if (!isset($_COOKIE[$cookie_name])) {
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" /></head>
    <link rel="stylesheet" href="./All css/style.css">
</head>
<body>
    <header class="header">
        <nav>
          <div class="logo">
            <a href="index.html">T<span>K</span></a>
          </div>
          <input type="checkbox" id="menu-toggle">
          <label for="menu-toggle" class="menu-icon">&#9776;</label>
          <ul class="menu">
            <li><a href="./index.html">Home</a></li>
            <li><a href="./login.html">Login</a></li>
            <li><a href="./Games.html">Games</a></li>
            <li><a href="./News.html">News</a></li>
            <li><a href="./About.html">About</a></li>
          </ul>
        </nav>
      </header>

        

        <div class="content">
            <h1>Dota2 Website</h1>
            <p>Every day, millions of players worldwide enter the battle as one of over a hundred Dota Heroes in a 5v5 team clash. <br>
                Dota is the deepest multi-player action RTS game ever made and there's always a new strategy or tactic to discover. <br>
                It's completely free to play and always will be – start defending your ancient now.</p>

            <div>
                <a href="Heroes.html"><button class="btn" type="button"><span class="span"></span>HEROES</button></a>
                <button class="btn" type="button"><span class="span"></span>ITEMS</button>
            </div>
        </div>
    

    <div class="footer">&copy;<span id="year"> </span><span>Afshari & Fathi </span></div>

    <script src="Script.js"></script>
</body>
</html>
