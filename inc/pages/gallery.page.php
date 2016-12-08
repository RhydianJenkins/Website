<!--

TODO:

Make sure all thumbnail images are the same size (preferebly cast to 400x300 px)
Make a script that generates the slides. Can't ahve all the albums on the same page - it will be a mess
Maybe look into disabling bootstraps autoscroll
Maybe look into getting the image to fit the frame on larger screens perfectly? (margin-0-auto is a tmp fix)
BUG: when you click on an image, all other images are replaced by that one.

-->

<?php
    $images = scandir(GALLERY_PATH . 'album_one');
    $images = array_values(preg_grep('/\.(jpg|jpeg|png|gif)(?:[\?\#].*)?$/i', $images));
?>

<div class="container">
    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header">Gallery</h1>
        </div>
        
        <?php foreach($images as $image) : ?>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb pointer-hover">
                <a class="thumbnail">
                    <img class="img-responsive center-block" src="<?= GALLERY_PATH . 'album_one/' . $image; ?>" data-toggle="modal" data-target="#myModal" alt="">
                </a>
            </div>
        <?php endforeach ; ?>

    </div>
</div>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <img id="large-image" class="showimage img-responsive center-block" style="width: 100%; height: 100%; max-height: 800px;" src="" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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