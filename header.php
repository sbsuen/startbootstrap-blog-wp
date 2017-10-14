<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php wp_head();?>

</head>

<body>

    <!-- Navigation -->
    <!-- TODO: Add in dynamic navbar for pages taking li and a classes into account -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo get_bloginfo( 'wpurl' );?>">
                <?php echo get_bloginfo( 'name' ); ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php 
            wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'theme_location' => 'primary',
                    'menu_class' => 'navbar-nav ml-auto',
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'navbarResponsive'
                )
            );
            ?>
        </div>
    </nav>
