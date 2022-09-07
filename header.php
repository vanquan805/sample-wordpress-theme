<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <link rel="profile" href="https://gmpg.org/xfn/11"/>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo wp_get_document_title(); ?></title>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <?php
    if (is_singular()) {
        wp_enqueue_script('comment-reply');
    }
    ?>

    <?php wp_head(); ?>

    <script type="application/javascript">
        let ajax_url = "<?php echo admin_url('admin-ajax.php');?>";
    </script>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<header id="site-header">
    <div class="container">
        <div class="row">
            <div id="site-logo" class="col-6 col-md-6 col-lg-3">
                <a class="logo" href="<?php echo esc_url(get_home_url(null, '/')); ?>"
                   title="<?php echo get_bloginfo('name'); ?>">
                    <h1><?php echo get_bloginfo('name'); ?></h1>
                </a>
            </div>
            <div id="site-menu" class="col-md-9 col-lg-9">
                <div class="nav-scroller">
                    <nav class="nav">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary_menu'
                        ));
                        ?>
                    </nav>
                </div>
            </div>

            <div id="site-menu-mobile" class="col-6 col-md-6">
                <a class="navbar-toggler float-right" href="#" data-toggle="open"><i class="bi bi-list"></i></a>
                <nav class="nav">
                    <a class="navbar-toggler float-right" href="#" data-toggle="close"><i class="bi bi-x-lg"></i></a>
                    <div class="clearfix"></div>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary_menu'
                    ));
                    ?>
                </nav>
            </div>
        </div>
    </div>


</header>