<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alexjeffrey
 */

get_header();
?>

    <main id="primary" class="site-main mb6">

        <!-- hero image -->
        <section class="hero">
            <div class="home-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/John-Wilding-Skeleton.jpg');">
            </div>
        </section>

        <div class="flex justify-center items-center w-100">
            <div class="tc top-text mv5 ">
                <?php if( get_field('top_text') ): ?>
                    <h1><?php the_field('top_text'); ?></h1>
                <?php endif; ?>
            </div>
        </div>
        <hr>
<div class="test-1">
        <div class="place-square1"></div>
        <div class="place-square1"></div>
                </div>
                <hr>

                <div class="flex justify-center items-center w-100">
            <div class="tc top-text mv5">
                <?php if( get_field('main_text') ): ?>
                    <h1><?php the_field('main_text'); ?></h1>
                <?php endif; ?>
            </div>
        </div>

        <hr>
             <!-- Big image -->
             <div class="flex hero-image align-center justify-center img-shadow">
            <?php if( get_field('bottom_image') ): ?>
                <img src="<?php the_field('bottom_image'); ?>" />
            <?php endif; ?>
        </div>

<!-- Case Studies -->
<hr>

<div class="case-studies">
        <?php
  $args = array(
      'post_type' => 'post', 
      'category_name' => 'case-studies', 
      'posts_per_page' => -1,
  );

  $case_studies_query = new WP_Query($args);

  if ($case_studies_query->have_posts()) {
      echo '<div class="case-studies-list grid">';
      while ($case_studies_query->have_posts()) {
          $case_studies_query->the_post();
          ?>
      <div class="container content-container-modal">
          <div class="case-study img-shadow">
      <?php the_post_thumbnail(); ?>
              <p>description</p>
              <h3 class="case-study-title"><?php the_title(); ?></h3></div>
          <div class="case-detail" style="display: none;">
              <div class="case-image"> <?php the_post_thumbnail(); ?></div>
              <div class="case-text"><h2><?php the_title(); ?></h2>
              <?php the_content()?></div>
          </div>
      </div>
          <?php
      }
      echo '</div>';
      wp_reset_postdata();
  } else {
      echo '<p>No case studies found.</p>';
  }
  ?>
</div>

<div id="modal-container" class="modal-container" style="display: none;">
  <div class="modal-content">
    <button id="close-btn" class="close-btn">&times;</button>
    <div class="modal-case-detail"id="modal-case-detail"></div>
  </div>

</div>

    </main><!-- #main -->

<?php
get_footer();
