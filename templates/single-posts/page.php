<article id="post-<?php the_ID(); ?>">
    <?php
    if (function_exists('yoast_breadcrumb') && !is_front_page()) {
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
    }
    ?>
    <?php if (!is_front_page()) { ?>
        <header class="entry-header">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
               class="text-black"><?php the_title('<h1 class="entry-title blog-post-title">', '</h1>'); ?></a>
            <p class="blog-post-meta">
                <a class="text-muted" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <time class="entry-date published updated"
                          datetime="<?php the_date('c'); ?>"><?php the_time(get_option('date_format')); ?></time>
                </a>
                <?php
                printf('by %s',
                    '<a class="text-muted" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_html(get_the_author_meta('display_name')) . '">' . esc_html(get_the_author_meta('display_name')) . '</a>'
                );
                ?>
            </p>
        </header>
    <?php } ?>
    <section class="entry-content mt-3">
        <?php the_content(); ?>
    </section>

    <?php if (!is_page()) { ?>
        <?php if (has_tag() || has_category()) { ?>
            <footer class="entry-footer">
                <?php
                if (has_category()) { ?>
                    <aside class="entry-taxonomy">
                        <div class="cat-links">
                            <?php _e('Categories'); ?>: <?php the_category(', '); ?></div>
                    </aside>
                <?php } ?>

                <?php
                if (has_tag()) { ?>
                    <aside class="entry-tag">
                        <div class="tag-links">
                            <?php _e('Tags'); ?>: <?php the_tags('', ', ', ''); ?></div>
                    </aside>
                <?php } ?>

            </footer>
        <?php } ?>
    <?php } ?>

    <?php if (!is_front_page()) { ?>
        <section class="entry-comments pt-3 mb-3">
            <?php
            if (comments_open() || get_comments_number()) {
                comments_template();
            }
            ?>
        </section>
    <?php } ?>
</article>