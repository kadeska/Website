<!DOCTYPE html>
<html lang="en-US">
    <?php require('partials/head.php') ?>
    <body>
        <?php require('partials/nav.php') ?>
        <div class="body_element">
            <!-- Photo Gallery -->
            <!-- Note to self, make sure you update the host server code after comitting to github -->
            <div class="photo-grid">
                <!-- Add photos here -->
                <?php foreach(clean_readdir($local_dir) as $picture) : ?>
                    <!-- Clean this up in the future -->
                    <?php echo '<img src="data/Pictures/My_Work/'.$picture.'">'; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <?php require('partials/footer.php') ?>
    </body>
</html>
<!-- A comment -->