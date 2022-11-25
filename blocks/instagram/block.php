<?php

function render_block_instagram($attributes)
{
    $title = $attributes['title'];
    $username = $attributes['username'];
    $shortcode = $attributes['shortcode'];

    ob_start(); // Start HTML buffering
?>

    <div class="femai-instagram" style="background-image: url('<?php echo PLUGIN_IMG_URL . '/texture_instagram.jpg'; ?>');">
        <div class="container default-femai">
            <div class="title d-flex">
                <h2 class="my-auto me-md-3 fs-3"><?php echo $title; ?></h2>
                <span class="username my-auto">
                    <?php echo $username; ?>
                </span>
            </div>
            <div class="shortcode">
                <?php echo do_shortcode($shortcode); ?>
            </div>
        </div>
    </div>

<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
