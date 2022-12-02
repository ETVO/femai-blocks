<?php

function render_block_imagem($attributes)
{
    $image = $attributes['image'];
    $alt = $attributes['alt'];

    ob_start(); // Start HTML buffering
?>

    <div class="femai-imagem">
        <img src="<?php echo $image; ?>" alt="<?php echo $alt; ?>">
    </div>
    

<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
