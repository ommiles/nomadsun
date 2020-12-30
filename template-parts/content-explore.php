<div class="container center ph4-l mb5 mb6-l">

    <h2 class="archivo f2 center tc ttu lh-title mv0 explore-title">
        Let's Explore Together
    </h2>
    <div class="flex-m flex-ns flex-wrap justify-between">
    <?php
    // organise our options into a data object
    $args = array(
    'posts_per_page' => 3,
    'orderby' => 'rand',
    'post__not_in' => array( $post -> ID ),
    );
    // a variable with our query and options
    $query = new WP_Query( $args );
    // do a loop with our new query code 
    if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
    <!-- code as we’re used to already! -->
        <a href="<?php the_permalink(); ?>" class="db w-100 w-third-ns ph3 mb3 mb0-ns">
            <div class="aspect-ratio aspect-ratio--1x1">
                <div class="aspect-ratio--object bg-center cover flex items-center justify-center ph3" style="<?php section_background('hero_image'); ?>);">
                    <p class="archivo white mv0 ttu tracked f5 f4-l tc lh-title">
                        <?php the_title(); ?>
                    </p>
                </div>    
            </div>
        </a>
    <?php endwhile; endif; ?>
    </div>
</div>