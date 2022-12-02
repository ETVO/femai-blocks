<?php

function render_block_destaque($attributes)
{
    $icon = $attributes['icon'];
    $desc = $attributes['desc'];

    ob_start(); // Start HTML buffering
?>
    
    
    <div class="femai-destaque d-flex">
        <span class="icon">
            <img src="<?php echo $icon; ?>" alt="">
        </span>
        <h3 class="desc"><?php echo $desc; ?></h3>
    </div>

<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
