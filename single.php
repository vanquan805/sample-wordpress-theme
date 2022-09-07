<?php get_header(); ?>
    <main role="main" class="container mt-4">
        <div class="row">
            <div class="col-md-8 blog-main">
                <?php while (have_posts()) : the_post();

                    get_template_part( 'templates/single-posts/default',  get_post_format() );

                endwhile; ?>
            </div><!-- /.blog-main -->

            <?php get_sidebar(); ?>

        </div><!-- /.row -->

    </main><!-- /.container -->
<?php get_footer();
