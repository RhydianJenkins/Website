<!--

TODO:

Make the album name after 'Galley' pretty

Order the albums somehow

album names cannot have spaces?

-->

<?php
    $albumFound = false;
    $albums = array_filter(scandir(GALLERY_PATH), function($item) {
        return $item[0] !== '.';
    });
    foreach ($albums as $album) {
        $allFiles = scandir(GALLERY_PATH . $album);
        $allImages = array_values(preg_grep('/\.(jpg|jpeg|png|gif)(?:[\?\#].*)?$/i', $allFiles));
        $albumsArray[$album] = $allImages[array_rand($allImages)];    // Set to random image
    }
    if (!empty($_GET['album']) && file_exists(GALLERY_PATH . $_GET['album'])) {
        $albumFound = true;
        $images = scandir(GALLERY_PATH . $_GET['album']);
        $images = array_values(preg_grep('/\.(jpg|jpeg|png|gif)(?:[\?\#].*)?$/i', $images));
    }
?>

<div class="container">
    <div class="col-lg-12">
        <h1 class="page-header">
            <a style="color: rgb(50, 60, 70);" href="?page=gallery">
                <span id="back-arrow" class="fa fa-arrow-left hidden" style="margin-left: -40px; position: absolute;"></span>
                Albums</a>
            <?= $albumFound ? '/ ' . $_GET['album'] : '' ; ?>
        </h1>
    </div>
</div>

<div class="container-fluid" style="margin-left: 10px; margin-right: 10px;">
    <div class="row">
        
        <?php if (!$albumFound) : ?>
            <?php foreach($albumsArray as $albumName => $albumCover) : ?>
                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 thumb pointer-hover padding-0 sr2">
                    <a class="thumbnail" href="?page=gallery&album=<?= $albumName; ?>">
                        <img class="img-responsive center-block" src="<?= GALLERY_PATH . $albumName . '/' . $albumCover; ?>">
                        <p class="text-center padding-10 margin-0" style="white-space: nowrap;"><?= $albumName; ?></p>
                    </a>
                </div>
            <?php endforeach ; ?>
        <?php else : ?>
            <?php foreach($images as $image) : ?>
                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 thumb pointer-hover padding-0 sr2">
                    <a class="thumbnail">
                        <img class="img-responsive center-block" src="<?= GALLERY_PATH . $_GET['album'] . '/' . $image; ?>" data-toggle="modal" data-target="#myModal" alt="">
                    </a>
                </div>
            <?php endforeach ; ?>
        <?php endif ; ?>

    </div>
</div>

<div id="myModal" class="modal fade" role="dialog">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog modal-lg vertical-align-center">
            <div class="modal-content">
                <div class="modal-body">
                    <img id="large-image" class="showimage img-responsive center-block" style="width: 100%; height: 100%; max-height: 800px;" src="" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close <span class="fa fa-times"></span></button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function () {
    $('#myModal').on('show.bs.modal', function (e) {
        var image = $(e.relatedTarget).attr('src');
        $("#large-image").attr("src", image);
    });
});
</script>

<?php if ($albumFound) : ?>
    <!-- show back arrow -->
    <script>
        $('#back-arrow').addClass('sr1').removeClass('hidden');
    </script>
<?php endif ; ?>