<article id="post-<?php the_ID(); ?>" class="card flex-md-row mb-4 box-shadow h-md-250">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <img class="card-img-right flex-auto d-none d-md-block"
             data-src="" alt="<?php the_title() ?>"
             style="width: 200px; height: 100%;"
             src="<?php the_post_thumbnail_url(); ?>"
             data-holder-rendered="true">
    </a>
    <div class="card-body d-flex flex-column align-items-start">
        <header class="entry-header">
            <strong class="d-inline-block mb-2 text-uppercase"><?php the_category(', '); ?></strong>
            <h3 class="mb-0"><a class="text-dark" href="<?php the_permalink(); ?>"
                                title="<?php the_title() ?>"><?php the_title(); ?></a></h3>
            <div class="mb-1 text-muted"><a class="text-muted" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <time class="entry-date published updated"
                          datetime="<?php the_date('c'); ?>"><?php the_time(get_option('date_format')); ?></time>
                </a></div>
        </header>
        <p class="card-text mb-auto"><?php the_excerpt(); ?><a class="text-muted" href="<?php the_permalink(); ?>"
                                                               title="<?php the_title() ?>"><?php _e('Continue reading'); ?></a></p>
    </div>
</article>