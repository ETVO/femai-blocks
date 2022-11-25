<?php

function render_block_qualidade($attributes)
{
    $image = $attributes['image'];
    $alt = $attributes['alt'];
    $title = $attributes['title'];
    $text = $attributes['text'];

    ob_start(); // Start HTML buffering
?>
    
    

<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
