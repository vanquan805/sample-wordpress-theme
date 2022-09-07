<?php get_header(); ?>
    <main role="main" class="container mt-4">
        <div class="row">
            <div class="col-md-8 blog-main">
                <?php
                if (function_exists('yoast_breadcrumb') && !is_front_page()) {
                    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                }
                $not_paged = get_query_var('paged');
                $not_paged = ( empty($not_paged) ) ? true : false;
                ?>

                <header class="page-header">
                    <?php if (is_category()) : ?>
                        <h1 class="page-title blog-post-title"><?php _e( 'Category' ); ?>: <?php single_cat_title(''); ?></h1>
                        <?php if ( $not_paged ) echo '<div class="archive-desc">'. category_description() .'</div>'; ?>
                    <?php elseif( is_tag() ) : ?>
                        <h1 class="page-title blog-post-title"><?php _e( 'Tag', 'basic' ); ?> <?php single_tag_title(); ?></h1>
                        <?php if ( $not_paged ) echo '<div class="archive-desc">'. tag_description() .'</div>'; ?>
                    <?php elseif (is_day()) : ?>
                        <h1 class="page-title blog-post-title"><?php _e( 'Day archives:' ); ?> <?php the_time('F jS, Y'); ?></h1>
                    <?php elseif (is_month()) : ?>
                        <h1 class="page-title blog-post-title"><?php _e( 'Monthly archives:' ); ?> <?php the_time('F, Y'); ?></h1>
                    <?php elseif (is_year()) : ?>
                        <h1 class="page-title blog-post-title"><?php _e( 'Year archives:' ); ?> <?php the_time('Y'); ?></h1>
                    <?php elseif (is_author()) : ?>
                        <h1 class="page-title blog-post-title"><?php _e( 'Author archives' ); ?></h1>
                        <div class="archive-desc"><?php the_author_meta('description'); ?></div>
                    <?php elseif (isset($_GET['paged']) && !empty($_GET['paged'])) : ?>
                        <h1 class="page-title blog-post-title arhivetitle"><?php _e( 'Archive' ); ?></h1>
                    <?php endif; ?>
                </header>


                <?php while (have_posts()) : the_post();
                    get_template_part('templates/archives/default', get_post_format());
                endwhile; ?>

                <?php the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => __('Older'),
                    'next_text' => __('Newer'),
                )); ?>

            </div><!-- /.blog-main -->

            <?php get_sidebar(); ?>

        </div><!-- /.row -->

    </main><!-- /.container -->
<?php get_footer();
