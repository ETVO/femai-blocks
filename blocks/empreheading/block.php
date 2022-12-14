<?php

function render_block_empreheading($attributes)
{
    $title = $attributes['title'];
    $bgImage = $attributes['bgImage'];

    ob_start(); // Start HTML buffering
?>

    <div class="femai-heading empreheading" style="background-image: url('<?php echo $bgImage; ?>');">
        <div class="container default-femai">
            <div class="title">
                <h1>
                    <?php echo $title; ?>
                </h1>
            </div>
        </div>
    </div>

<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
