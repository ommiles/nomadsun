<div class="flex flex-wrap container center ph4-l content-parent content-align">
<?php 
  global $hero_post;
  $args = array(
    'posts_per_page' => 4,
    // this will make sure it doesn’t show us the hero post
    'post__not_in' => array($hero_post),
    'orderby' => 'rand',
  );

  $the_query = new WP_Query($args);
  if ($the_query->have_posts()): while ($the_query->have_posts()):     $the_query->the_post(); 
?>

  <a class="db link mb4 ph3" href="<?php the_permalink();?>">
    <div class="aspect-ratio aspect-ratio--1x1 aspect-ratio--16x9-ns">
      <div class="as-ra--ob cover bg-center flex items-center justify-center" style="<?php section_background('hero_image');?>">
        <p class="archivo white ma0 ttu tracked f5 f4-l ph4 tc lh-title">
          <?php the_title();?>
        </p>
      </div>
    </div>
  </a>

<?php endwhile; endif; ?>
</div>