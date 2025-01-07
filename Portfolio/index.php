<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="icon" type="image/x-icon" href="Assets/Comp Assets/Logo.png">
</head>

<body>
    <?php 
    require_once("header.php"); 
    ?>

    <section id="main">
    <div class="title">
            <h1>“A Creative Programmer with<br>ideas bordering insanity”</h1>
        </div>

        <div class="name">
            <p id="user">XPsykic</p>
            <p id="real">Chan Yu Feng</p>
        </div>

        <section id="its_me">
            <img src="Assets/Comp Assets/Portrait.jpg" id="Portrait">
        </section>

        <div class="desc">
                <p>I am an Engineer who studied at Nanyang Polytechnic<br>
                    in the Infocomm and Media Engineering course. I have a<br>
                    passion for programming, world building, and gaming.</p>

                <p>Most people would consider me a quite passion driven<br>
                    with a bit of a tendancy to do things that interest<br>
                    me more often than not.</p>
        </div>
    </section>

    <?php require_once("footer.html"); ?>


</body>
</html>
