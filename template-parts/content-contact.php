<div class="container">
<div class="hero-image img-shadow">
          <?php if( get_field('hero_image') ): ?>
    <img src="<?php the_field('hero_image'); ?>" />
<?php endif; ?>

</div>
<div class="contact-container mt5">
    <div class="contact-details">
      <h1 class="f2">Get in touch</h1>
      <?php
$field_value = get_field('contact_telephone');
if ($field_value) {
    echo '<p><i class="fa-solid fa-phone fa-lg"></i>&nbsp; <a href="tel:' . $field_value . '"> ' . $field_value . '</a> </p>';
} else {
    // Display a message if the field value is empty
    echo 'No telephone number found';
}
?>

<?php
$field_value = get_field('contact_email');
if ($field_value) {
    echo '<p><i class="fa-regular fa-envelope fa-lg"></i>&nbsp; <a href="mailto:' . $field_value . '"> ' . $field_value . '</a> </p>';
} else {
    // Display a message if the field value is empty
    echo 'No email found';
}
?>

<?php
$line1 = get_field('address_line_1');
$line2 = get_field('address_line_2');
$city = get_field('address_city');
$post_code = get_field('address_post_code');

if ($line1 || $line2 || $city || $post_code) {
    echo '<span><i class="fa-solid fa-location-dot fa-lg"></i>&nbsp;&nbsp; ';
    if ($line1) {
        echo esc_html($line1) . '<br>';
    }
    echo '</span>';
    echo '<span class="indented-address">';

    if ($line2) {
        echo esc_html($line2) . ', <br>';
    }
    echo '</span>';
    echo '<span class="indented-address">';
    if ($city) {
        echo esc_html($city) . '<br> ';
    }
    echo '</span>';
    echo '<span class="indented-address">';
    if ($post_code) {
        echo esc_html($post_code);
    }
    echo '</span>';
} else {
    echo 'No address found';
}
?>
    </div>


    <div class="contact-form">
      <?php echo do_shortcode('[wpforms id="5"]');?>
    </div>

</div>
</div>