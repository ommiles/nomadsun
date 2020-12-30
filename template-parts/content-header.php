
<div class="flex-l">

<div class="w-100 w-60-l vh-50 vh-100-l cover bg-center" style="<?php section_background('hero_image'); ?>);"></div>
    <div class="w-100 w-40-l flex items-center justify-center ph3 ph4-l relative">
        <div class="tc">
            <p class="f6 archivo mt0 mb5 mb0-l ttu tracked absolute-l top-0-l left-0-l w-100-l pt5">
                <?php set_date(get_field('date')); ?>
                <span class="line mt4"></span>
            </p>
            <h1 class="f2 f1-l archivo mt0 mb2 ttu lh-title tracked">
                <!-- standard wordpress data -->
                <?php the_title(); ?>
            </h1>
            <p class="f2 f1-l mt0 mb4 mb5-l tenor ttu tracked lh-title">
                <?php the_field('subhead'); ?>
            </p>
            <p class="f4 cardo i measure center mv0">
                <!-- specific to this component -->
                <?php the_sub_field('header_intro'); ?>
            </p>
        </div>
    </div>
</div>