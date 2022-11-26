<?php

function render_block_certificado($attributes)
{
    $image = $attributes['image'];
    $title = $attributes['title'];
    $text = $attributes['text'];

    ob_start(); // Start HTML buffering
?>
    
    <div class="femai-certificado col-12 col-md-6 col-xxl-4">
        <div class="inner d-flex flex-column flex-sm-row align-items-center">
            <div class="image mb-3 mb-sm-0 me-sm-4">
                <img src="<?php echo $image; ?>">
            </div>
            <div class="content">
                <div class="title">
                    <h4><?php echo $title; ?></h4>
                </div>
                <div class="text">
                    <?php echo $text; ?>
                </div>
            </div>
        </div>
    </div>

<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
