<!--

TODO:

Make sure all thumbnail images are the same size (preferebly cast to 400x300 px)
Make a script that generates the slides. Can't ahve all the albums on the same page - it will be a mess
Maybe look into disabling bootstraps autoscroll
Maybe look into getting the image to fit the frame on larger screens perfectly? (margin-0-auto is a tmp fix)
BUG: when you click on an image, all other images are replaced by that one.

-->

<div class="container">

    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header">Gallery</h1>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb pointer-hover">
            <a class="thumbnail">
                <img class="img-responsive center-block" src="http://placehold.it/400x300" data-toggle="modal" data-target="#myModal" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb pointer-hover">
            <a class="thumbnail">
                <img class="img-responsive center-block" src="http://placehold.it/400x300" data-toggle="modal" data-target="#myModal" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb pointer-hover">
            <a class="thumbnail">
                <img class="img-responsive center-block" src="http://placehold.it/400x300" data-toggle="modal" data-target="#myModal" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb pointer-hover">
            <a class="thumbnail">
                <img class="img-responsive center-block" src="http://placehold.it/400x300" data-toggle="modal" data-target="#myModal" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb pointer-hover">
            <a class="thumbnail">
                <img class="img-responsive center-block" src="http://placehold.it/400x300" data-toggle="modal" data-target="#myModal" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb pointer-hover">
            <a class="thumbnail">
                <img class="img-responsive center-block" src="http://placehold.it/400x300" data-toggle="modal" data-target="#myModal" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb pointer-hover">
            <a class="thumbnail">
                <img class="img-responsive center-block" src="http://placehold.it/400x300" data-toggle="modal" data-target="#myModal" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb pointer-hover">
            <a class="thumbnail">
                <img class="img-responsive center-block" src="http://placehold.it/400x300" data-toggle="modal" data-target="#myModal" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb pointer-hover">
            <a class="thumbnail">
                <img class="img-responsive center-block" src="http://placehold.it/400x300" data-toggle="modal" data-target="#myModal" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb pointer-hover">
            <a class="thumbnail">
                <img class="img-responsive center-block" src="http://placehold.it/400x300" data-toggle="modal" data-target="#myModal" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb pointer-hover">
            <a class="thumbnail">
                <img class="img-responsive center-block" src="http://placehold.it/400x300" data-toggle="modal" data-target="#myModal" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb pointer-hover">
            <a class="thumbnail">
                <img class="img-responsive center-block" src="http://placehold.it/400x300" data-toggle="modal" data-target="#myModal" alt="">
            </a>
        </div>
    </div>

</div><!-- /.container -->

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <img class="showimage img-responsive center-block" style="width: 100%; height: 100%;" src="" />
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
            $(".img-responsive").attr("src", image);
        });
});
</script>