<div class="container">

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
              <h2 class="mt3"><?php the_title(); ?></h2>
          </div>
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
