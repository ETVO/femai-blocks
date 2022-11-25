<?php

function render_block_quadro($attributes)
{
    $image1 = $attributes['image1'];
    $alt1 = $attributes['alt1'];
    $image2 = $attributes['image2'];
    $alt2 = $attributes['alt2'];
    $link = $attributes['link'];
    $link_text = $attributes['linkText'];

    ob_start(); // Start HTML buffering
?>

    <div class="femai-quadro">
        <div class="container default-femai">
            <div class="wrap d-flex flex-column">
                <div class="border-femai"></div>
                <div class="content d-flex flex-column flex-md-row align-items-center justify-content-around">
                    <img class="img1" src="<?php echo $image1; ?>" alt="<?php echo $alt1; ?>">
                    <div class="v-divider"></div>
                    <img class="img2" src="<?php echo $image2; ?>" alt="<?php echo $alt2; ?>">
                </div>
                <div class="action">
                    <a href="<?php echo $link; ?>" class="btn btn-success text-uppercase">
                        <?php echo $link_text; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
