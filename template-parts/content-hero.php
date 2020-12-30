<!-- <h1>
    <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
    </a>
</h1> -->

<a class="db link hero min-vh-100 cover bg-center flex items-center justify-center" style="<?php section_background('hero_image'); ?>" href="<?php the_permalink(); ?>">
    <div class="hero-content white tc ph3 ph4-l">

        <h1 class="hero-heading f2 f1-l archivo b mt0 mb3 ttu lh-title">
            <?php the_title(); ?>
        </h1>
        
        <?php if( get_field('subhead') ): ?>
            <p class="hero-subhead f2 f1-l mb5 mb6-l mt0 tenor ttu lh-title">
                <?php the_field('subhead'); ?>
            </p>
        <?php endif; ?>
        <!-- tracked class in tachyons add space between letters -->
        <?php if( get_field('date') ): ?>
            <p class="f6 date archivo ma0 ttu tracked">
                <?php set_date(get_field('date'));?>
            </p>
        <?php endif; ?>
        
    </div>
</a>