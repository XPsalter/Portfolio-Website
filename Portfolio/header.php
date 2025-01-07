<header>
    <?php 
    $host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $siteurl = explode("/", $host);
    $site = $siteurl[count($siteurl)-1];
    ?>
    <nav>
    <label for="hamburger">&#9776;</label>
    <input type="checkbox" id="hamburger" />
        <img src = "Assets/Comp Assets/Logo.png" id="logo">
        <ul id="menu">
            
            <li id="Home"><a href = "index.php"
            <?php 
            if ($site == "" || $site == "index.php"){
                echo 'class="focus"';
            }
            ?>>HOME</a></li>
            
            <li id="Portfolio"><a href = "Portfolio.php" 
            <?php 
            if ($site == "Portfolio.php"){
                echo 'class="focus"';
            }
            ?>>PORTFOLIO</a></li>
            
            <li id="Comms"><a href = "contact.php" 
            <?php 
            if ($site == "contact.php"){
                echo 'class="focus"';
            }
            ?>>CONTACT</a></li>
        </ul>
    </nav>
    <hr>
</header>