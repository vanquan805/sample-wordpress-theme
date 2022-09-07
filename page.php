<?php get_header(); ?>
    <main role="main" class="container mt-4">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 blog-main">
                <?php while (have_posts()) : the_post();

                    get_template_part( 'templates/single-posts/page',  get_post_format() );

                endwhile; ?>

            </div><!-- /.blog-main -->
        </div><!-- /.row -->

    </main><!-- /.container -->
<?php get_footer();