<div class="container">
<div class="test-container flex justify-center align-center w-100">

<div class="top-text w-40 flex justify-center align-center flex-column">
        <?php if( get_field('top_text') ): ?>
            <h1 class="tc"><?php the_title() ?></h1>
        <p class="tl"><?php the_field('top_text'); ?></p>
        <?php endif; ?>
    </div>        


<div class="w-60 img-shadow">
        <?php if( get_field('hero_image') ): ?>
        <img src="<?php the_field('hero_image'); ?>" />
        <?php endif; ?>
        </div>


        </div>

</div>


<!-- <div class="container">
  <div class="hero-image img-shadow">
    <?php if( get_field('hero_image') ): ?>
      <img src="<?php the_field('hero_image'); ?>" />
    <?php endif; ?>
  </div>


  <div class="top-text tc f4 mv4">
    <?php if( get_field('top_text') ): ?>
      <?php the_field('top_text'); ?>
    <?php endif; ?>
  </div> -->
<div class="container">
<hr>

  <div class="test-1">
    <div class="place-square1"></div>
    <div class="place-square1"></div>
    <div class="place-square1"></div>
  </div>

<hr>

<div class="flex items-center justify-center">
    <!-- About Text -->
    <div class="about-text tc w-100">
      <?php if( get_field('main_text') ): ?>
        <p><?php the_field('main_text'); ?></p>
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