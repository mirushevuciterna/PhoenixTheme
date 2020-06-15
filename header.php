<!doctype html>
<html>
    <head> 
        <meta charset="utf-8">
        <title>Phoenix Theme</title>
        <?php wp_head(); ?>
    </head>

    <body>

       <!-- <?php wp_nav_menu(array('theme_location'=>'primarymenu')); ?> -->
       
            <nav class="navbar navbar-expand-lg bg-light ">
                <a class="navbar-brand" href="http://localhost/testsite/wordpress/">EkkoCharity</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php wp_nav_menu( array (
                    'theme_location' => 'primarymenu',
                    'container' => false,
                    'menu_class' => 'navbar-nav m-auto ' 
                    ) ); ?>  
                </div>

                <button id="butoniNav" type="button" class="btn btn-primary">Get Involved </button>

            </nav>
