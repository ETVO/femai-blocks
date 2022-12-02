<?php

function render_block_responsavel($attributes)
{
    $name = $attributes['name'];
    $link = $attributes['link'];
    $atrib = $attributes['atrib'];

    ob_start(); // Start HTML buffering
?>

    <div class="femai-responsavel col-12 col-sm-6 col-md-4">
        <div class="name">
            <?php if ($link) : ?>
                <a href="<?php echo $link; ?>">
                    <h3><?php echo $name; ?></h3>
                </a>
            <?php else : ?>
                <h3><?php echo $name; ?></h3>
            <?php endif; ?>
        </div>
        <div class="atrib">
            <?php echo $atrib; ?>
        </div>
    </div>

<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
