<?php

function render_block_caracteristica($attributes)
{
    $text = $attributes['text'];

    ob_start(); // Start HTML buffering
?>
    
    <div class="femai-caracteristica col-12 col-md-6 d-flex mb-2">
        <div class="icon me-2 my-auto">
            <span class="bi-check2-circle"></span>
        </div>
        <div class="text my-auto">
            <?php echo $text; ?>
        </div>
    </div>

<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
