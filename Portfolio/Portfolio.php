<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/portfolio.css" />
    <link rel="icon" type="image/x-icon" href="Assets/Comp Assets/Logo.png">
</head>
<body>

    <?php require_once("header.php");?>

    <main>
        <div class="Site">
            <div id="Python">
                <img src="Assets/Comp Assets/Asset 15.png" class="code">
                <p class="code_desc">Formatted Python code that could<br>be used for detailed filtering of<br>entries in a spreadsheet.</p>
            </div>
            
            <div id="Robotics">
            <img src="Assets/Comp Assets/Asset 16.png" class="cert">
                <p class="cert_desc">2nd place in the First Lego League<br>for Innovation Project pertaining to<br>improving the delivery and cargo<br>scene.</p>
            </div>

            <div id="Innovation">
                <img src="Assets/Comp Assets/Asset 17.png" class="idea">
                <p class="idea_desc">Created the concept of <br>Locker varient for use at MRT<br>stations for easier package<br>transfers.</p>
            </div>

            <div id="General">
                <h1>General Skills</h1>
                <p>
                    Project Management<br>
                    Teamwork<br>
                    Time Management<br>
                    Leadership<br>
                    Effective Communication<br>
                    Critical Thinking<br>
                    Flutter<br>
                    C++/C#<br>
                    Python<br>
                    HTML/PHP/CSS<br>
                </p>
            </div>
        </div>
    </main>

        <?php require_once("footer.html");?>

</html>