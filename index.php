<?php include("includes/header.php"); ?>
<?php
    $photos = Photo::find_all();
?>

        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-12">
                <?php foreach($photos as $photo): ?>
                    <div class="thumbnails row">
                        <div class="col-xs-6 col-md-3">
                            <a class="thumbnail" href="">
                                <img src="" alt="">
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

<?php include("includes/footer.php"); ?>
