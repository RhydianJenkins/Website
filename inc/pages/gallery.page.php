<!--

TODO:

Make sure all thumbnail images are the same size (preferebly cast to 400x300 px)
Make a script that generates the slides. Can't ahve all the albums on the same page - it will be a mess
Maybe look into disabling bootstraps autoscroll
Maybe look into getting the image to fit the frame on larger screens perfectly? (margin-0-auto is a tmp fix)
-->

<div class="container">

    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header">Gallery</h1>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb pointer-hover" data-toggle="modal" data-target=".album1">
            <a class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb pointer-hover" data-toggle="modal" data-target=".album1">
            <a class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb pointer-hover" data-toggle="modal" data-target=".album1">
            <a class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb pointer-hover" data-toggle="modal" data-target=".album1">
            <a class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb pointer-hover" data-toggle="modal" data-target=".album1">
            <a class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb pointer-hover" data-toggle="modal" data-target=".album1">
            <a class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb pointer-hover" data-toggle="modal" data-target=".album1">
            <a class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb pointer-hover" data-toggle="modal" data-target=".album1">
            <a class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb pointer-hover" data-toggle="modal" data-target=".album1">
            <a class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb pointer-hover" data-toggle="modal" data-target=".album1">
            <a class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb pointer-hover" data-toggle="modal" data-target=".album1">
            <a class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb pointer-hover" data-toggle="modal" data-target=".album1">
            <a class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
        </div>
    </div>

</div><!-- /.container -->


<div class="container text-center">

    <div class="modal fade album1" tabindex="-1" role="dialog" aria-labelledby="album1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive margin-0-auto" src="http://placehold.it/800x400" alt="...">
                            <div class="carousel-caption">
                                One Image Description
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-responsive margin-0-auto" src="http://placehold.it/800x300" alt="...">
                            <div class="carousel-caption">
                                Another Image Description
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-responsive margin-0-auto" src="http://placehold.it/800x300" alt="...">
                            <div class="carousel-caption">
                                And another Image Description
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>