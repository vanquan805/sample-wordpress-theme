<?php get_header(); ?>
    <main role="main" class="container mt-4">
        <div class="row">
            <div class="col-md-8 blog-main">
                <?php
                if (function_exists('yoast_breadcrumb') && !is_front_page()) {
                    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                }
                ?>
                <header class="page-header">
                    <h1 class="page-title"><?php _e('404 Page Not Found') ?></h1>
                </header>
            </div><!-- /.blog-main -->

            <?php get_sidebar(); ?>

        </div><!-- /.row -->

    </main><!-- /.container -->
<?php get_footer();
