<!DOCTYPE html>
<html lang="en-US">
<?php require('partials/head.php') ?>
<body>
    <?php require('partials/nav.php') ?>
    
    <!-- <div class="parallax"></div> -->

    <div class="parallax-box">
        <p class="parallax-text">
            Welcome to my website!! <br>
            Here I will show you all of my past and current projects.
            Check out my Discord server!
        </p>

        <!-- Add images here -->
       <ul>
           <?php foreach(clean_readdir($local_dir) as $picture) : ?>
               <li>
                   <?= print_r($picture); ?>
                   <?php echo '<img src="data/Pictures/My_Work/'.$picture.'">'; ?>
                </li>
            <?php endforeach; ?>
       </ul>

    </div>

    <!--
    <iframe src="https://discordapp.com/widget?id=361934565520048148&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
    -->

<?php require('partials/footer.php') ?>
</body>

</html>