<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?=$title; ?></title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="<?=$assets;?>bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=$assets;?>font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?=$assets;?>css/animate.css">
        <link rel="stylesheet" href="<?=$assets;?>css/magnific-popup.css">
        <link rel="stylesheet" href="<?=$assets;?>flexslider/flexslider.css">
        <link rel="stylesheet" href="<?=$assets;?>css/form-elements.css">
        <link rel="stylesheet" href="<?=$assets;?>css/style.css">
        <link rel="stylesheet" href="<?=$assets;?>css/my.css">    
        <link rel="stylesheet" href="<?=$assets;?>css/media-queries.css">
        <link rel="stylesheet" media="screen" href="<?=$assets; ?>libs/jqvmap/jqvmap/jqvmap.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Javascript -->
        <script src="<?=$assets;?>js/jquery-1.11.1.min.js"></script>
        <script src="<?=$assets;?>bootstrap/js/bootstrap.min.js"></script>
        <script src="<?=$assets;?>js/bootstrap-hover-dropdown.min.js"></script>
        <script src="<?=$assets;?>js/jquery.backstretch.min.js"></script>
        <script src="<?=$assets;?>js/wow.min.js"></script>
        <script src="<?=$assets;?>js/retina-1.1.0.min.js"></script>
        <script src="<?=$assets;?>js/jquery.magnific-popup.min.js"></script>
        <script src="<?=$assets;?>flexslider/jquery.flexslider-min.js"></script>
        <script src="<?=$assets;?>js/jflickrfeed.min.js"></script>
        <script src="<?=$assets;?>js/masonry.pkgd.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="<?=$assets;?>js/jquery.ui.map.min.js"></script>
        <script src="<?=$assets; ?>libs/jqvmap/jqvmap/jquery.vmap.js"></script>
        <script src="<?=$assets; ?>libs/jqvmap/jqvmap/maps/jquery.vmap.world.js"></script>
        <script src="<?=$assets; ?>libs/jqvmap/jqvmap/data/jquery.vmap.sampledata.js"></script>


        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?=$assets; ?>ico/icon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=$assets;?>ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=$assets;?>ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=$assets;?>ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?=$assets; ?>ico/apple-touch-icon-57-precomposed.png">
    
    </head>

    <body>
        
            <!-- Top menu -->
            <nav class="navbar" role="navigation">
                <?=$topmenu; ?>
            </nav>


            <!-- CONTENT -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <?=$content; ?>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <?=$content1; ?>
                    </div>
                </div>
            </div>

            <hr>

            <!-- FOOTER -->
            <footer>
                <?=$footer; ?>
            </footer>
            
    
    <script src="<?=$assets;?>js/scripts.js"></script>
    <script src="<?=$assets;?>js/menu.js"></script>
    <script>
        $('#main').removeClass('active');
        $('#country').addClass('active');
    </script>
    </body>

</html>