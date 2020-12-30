<div class="gallery container flex-wrap center flex ph4-l">
    <?php $images = get_sub_field('gallery'); ?>
    <?php foreach($images as $image) : ?>
        <!-- get image by ID and customize size in custom.css -->
        <!-- also, use advanced custom fields we made for attachments which adds a class name to  each image in the loop-->
        <div class="gallery-image ph3 mb4 <?php the_field('image_width', $image['id']) ?>">
            <!-- get an image by its ID and the size we want -->
            <?php echo wp_get_attachment_image($image['id'], 'full'); ?>
            <!-- assign our caption to a variable called $caption -->
            <?php $caption = wp_get_attachment_caption($image['id']) ?>
            <!-- below, we make an if statement in order to eliminate a white space from style.css saved for presumed captions -->
            <!-- we'll also make the image display:block in custom.css -->
            <!-- if the caption is not empty, it renders onto the page ... -->
            <?php if(!empty($caption)) : ?>
                <!-- ... renders onto the page using the regular weight of archivo and @ 50% opacity -->
                <p class="caption archivo-regular f5 o-50 pt3 mv0">
                    <!-- grab caption by attachment ID -->
                    <?php echo $caption; ?>
                </p>
            <?php endif ?>
            
        </div>
    <?php endforeach ?>
</div>	