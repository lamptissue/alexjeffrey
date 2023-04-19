<div>
    <?php
$args = array(
    'post_type' => 'post',
    'category_name' => 'services',
    'posts_per_page' => 20,
);
$services_query = new WP_Query($args);

if ($services_query->have_posts()) {
    $post_index = 0;
    while ($services_query->have_posts()) {
        $services_query->the_post();
        $post_class = ($post_index % 2 === 0) ? 'odd-post' : 'even-post';
        ?>
        
    <div class="<?php echo $post_class; ?>">
        <div class="container">
            <div class="content-container flex flex-column flex-row-l justify-center items-center">
                <div class="service-image img-shadow w-50-l w-100 flex justify-center items-center">
                    <?php the_post_thumbnail(); ?>
                </div>
                
                <div class="service-text tc w-50-l w-100 pa4-l pa2">
                    <h2><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>
                </div>
            </div>
    </div>

    <hr/>
            <!-- removes the last hr tag -->
        <!-- <?php if ($post_index < $services_query->post_count - 1) { ?>
            <hr/>
            <?php } ?> -->
    </div>
        <?php
        $post_index++;
    }
} else {
    ?>
    <p><?php _e('No Posts To Display.'); ?></p>
    <?php
}
wp_reset_postdata();
?>
</div>

<div class="service-contact service-container w-100 w-80-m w-60-l pa3">
    <div class="flex flex-column justify-center items-center w-100">
        <div class="flex-column flex items-center justify-center service-text">
            <?php if( get_field('bottom_text') ): ?>
            <?php the_field('bottom_text') ?>
            <?php endif; ?>
            <div class="btn-1 mt4 mb4 mb0-ns">
            <a href="/contact" class="button-link">Get in touch</a>
        </div>
        </div>
       
    </div>
</div>