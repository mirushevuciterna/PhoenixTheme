<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phoenix Theme</title>
    <?php wp_head(); ?>
    <script src="https://use.fontawesome.com/6cadc76375.js"></script>
</head>

<body>
    
        <?php wp_nav_menu(array('theme_location'=>'primarymenu')); ?> 

        <nav class="navbar navbar-expand-lg = navbar-dark bg-light p-0">
            <a class="navbar-brand p-lg-5" href="http://localhost/testsite/wordpress/">EkkoCharity</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse navbar-light bg-light" id="navbarSupportedContent">
                <?php wp_nav_menu( array (
            'theme_location' => 'primarymenu',
            'container' => false,
            'menu_class' => 'navbar-nav m-auto ' 
            ) ); ?>
            </div>

            <div class="butonitest d-none d-lg-inline">
                <button id="butoniNav" type="button" class="btn btn-primary">Get Involved </button>
            </div>

        </nav>