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
        <!-- Note to self, make sure you update the host server code first before comitting to github -->
       <ul class="image-grid">
           <?php foreach(clean_readdir($local_dir) as $picture) : ?>
               <li>
                   <!-- Clean this up in the future -->
                   <div class="image">
                       <?php echo '<img src="data/Pictures/My_Work/'.$picture.'">'; ?>
                    </div>
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
<!-- A comment -->