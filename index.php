<?php require("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo SITE_NAME; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- normalize css -->
<!-- <link rel="stylesheet" type="text/css" href="<?php echo STYLES_PATH . "normalize.css"; ?>" /> -->
<!-- awesome fonts css -->
<link rel="stylesheet" type="text/css" href="<?php echo STYLES_PATH . "font-awesome.min.css"; ?>" />
<!-- bootstrap 3.3.7 css -->
<link rel="stylesheet" type="text/css" href="<?php echo STYLES_PATH . 'bootstrap/bootstrap.min.css' ?>">
<!-- bootstrap select css -->
<link rel="stylesheet" type="text/css" href="<?php echo STYLES_PATH . 'bootstrap/bootstrap-select.min.css' ?>">
<!-- global css -->
<link rel="stylesheet" type="text/css" href="<?php echo STYLES_PATH . "global.css"; ?>" />
<?php if (!empty($css)) : ?>
<!-- page css -->
<link rel="stylesheet" type="text/css" href="<?php echo STYLES_PATH . $css . '.page.css'; ?>" />
<?php endif ; ?>
<!-- jQuery -->
<script src="<?php echo JS_PATH . 'jquery.min.js'?>"></script>
<!-- bootstrap-select -->
<script src="<?php echo JS_PATH . 'bootstrap-select.min.js'?>"></script>
</head>
<body>

<!-- Navbar -->
<?php include INC_PATH . 'bootstrap_navbar.php'; ?>

<!-- Page -->
<?php include INC_PATH . 'pages/' . $page . '.page.php'; ?>

<!-- Footer -->
<?php include INC_PATH . 'footer.php'; ?>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo JS_PATH . 'bootstrap.min.js'; ?>"></script>

<!-- Bootstrap DateTime JavaScript -->
<script src="<?php echo JS_PATH . 'bootstrap-datetime.min.js'; ?>"></script>

<!-- Smooth scrolling -->
<script src="<?= JS_PATH . 'smoothscroll.js'; ?>"></script>

<!-- Fade in elements with scrollreveal https://github.com/jlmakes/scrollreveal -->
<script src="<?php echo JS_PATH . 'scrollreveal.min.js'; ?>"></script>
<script>
    window.sr = ScrollReveal();
	sr.reveal('.sr1');
    sr.reveal('.sr2', 100);
</script>

<!-- Carousel -->
<script>
    $(document).ready(function() {
        $('.carousel').carousel({
            interval: 3000
        })
    });
</script>

</body>
</html>
