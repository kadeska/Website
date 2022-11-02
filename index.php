<!DOCTYPE html>
<html lang="en-US">

<head>
    <title> Test website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <nav class="nav__links">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="projects.html">Projects</a></li>
                <li><a href="help.html">Help</a></li>
                <li><a href="about.html">About</a></li>
            </ul>
        </nav>
        <a class="cta" href="contact.html"><button>Contact</button></a>
    </header>

    <!-- <div class="parallax"></div> -->

    <div class="parallax-box">
        <p class="parallax-text">
            Welcome to my website!! <br>
            Here I will show you all of my past and current projects.
            Check out my Discord server!
        </p>

        <!-- Add images here -->
        <div class="image-grid">
            <!-- <img src="data/Pictures/My_Work/A(edited).jpg" alt="pottery"> -->

            <?php
            echo 'Hello World!';
            ?>

        </div>

    </div>

    <!--
    <iframe src="https://discordapp.com/widget?id=361934565520048148&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
    -->

    <footer>
        <p>&copy; 2021 Me</p>
    </footer>
</body>

</html>