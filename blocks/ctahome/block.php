<?php

function render_block_ctahome($attributes)
{
    $bgImage = $attributes['bgImage'];
    $fgImage = $attributes['fgImage'];
    $altText = $attributes['altText'];
    $link = $attributes['link'];
    $link_text = $attributes['linkText'];

    ob_start(); // Start HTML buffering
?>

    <div class="femai-ctahome" style="background-image: url('<?php echo $bgImage; ?>');">
        <div class="container default-femai">
            <div class="foreground animate__animated animate__fadeIn">
                <img src="<?php echo $fgImage; ?>" alt="<?php echo $altText; ?>">
            </div>
            <div class="action animate__animated animate__fadeInUp">
                <a href="<?php echo $link; ?>" class="btn btn-success text-uppercase">
                    <?php echo $link_text; ?>
                </a>
            </div>
        </div>
    </div>
<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
