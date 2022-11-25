<?php

function render_block_historia($attributes)
{
    $title = $attributes['title'];
    $text = $attributes['text'];
    $image = $attributes['image'];
    $alt = $attributes['alt'];

    ob_start(); // Start HTML buffering
?>

    <div class="femai-historia">
        <div class="container default-femai">
            <div class="wrap row">
                <div class="content col-12 col-md-6">
                    <div class="title">
                        <h2><?php echo $title; ?></h2>
                    </div>
                    <div class="text">
                        <p>
                            <?php echo $text; ?>
                        </p>
                    </div>
                </div>
                <div class="picture col-12 col-md-6">
                    <img src="<?php echo $image; ?>" alt="<?php echo $alt; ?>">
                </div>
            </div>
        </div>
    </div>
    

<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
