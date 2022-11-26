<?php

function render_block_qualidade($attributes, $content)
{
    $title = $attributes['title'];

    ob_start(); // Start HTML buffering
?>
    
    <div class="femai-qualidade">
        <div class="container default-femai">
            <div class="title">
                <h2 class="fs-3"><?php echo $title; ?></h2>
            </div>
            <div class="content row m-0 w-100">
                <?php echo $content; ?>
            </div>
        </div>
    </div>

<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
