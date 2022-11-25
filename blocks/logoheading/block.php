<?php

function render_block_logoheading($attributes)
{
    $logo = $attributes['logo'];
    $text = $attributes['text'];
    $bgImage = $attributes['bgImage'];

    ob_start(); // Start HTML buffering
?>

    <div class="femai-heading logoheading" style="background-image: url('<?php echo $bgImage; ?>');">
        <div class="container default-femai">
            <div class="row">
                <div class="logo col-12 col-md-6">
                    <img src="<?php echo $logo; ?>">
                </div>
                <div class="text col-12 col-md-5">
                    <p>
                    <?php echo $text; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
