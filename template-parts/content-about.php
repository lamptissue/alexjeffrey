<div class="container">
    <div class="flex items-center justify-center">
        <div class="about-text tc w-80">
            <?php if( get_field('text_area_1') ): ?>
                <?php the_field('text_area_1'); ?>
            <?php endif; ?>
        </div>
    </div>

    <hr/>
    <div class="flex items-center justify-center">
        <div class="about-text tc w-80">
            <?php if( get_field('text_area_2') ): ?>
                <?php the_field('text_area_2'); ?>
            <?php endif; ?>
        </div>
    </div>

    <hr>

    <div class="hero-image flex items-center img-shadow justify-center">
        <?php if( get_field('bottom_image') ): ?>
            <img src="<?php the_field('bottom_image'); ?>" />
        <?php endif; ?>
    </div>
</div>