<?php

function render_block_numeros($attributes)
{
    $image = $attributes['image'];
    $alt = $attributes['alt'];
    $title = $attributes['title'];
    $text = $attributes['text'];

    ob_start(); // Start HTML buffering
?>

    
    <div class="femai-numeros">
        <div class="container default-femai">
            <div class="wrap d-flex flex-column flex-md-row justify-content-center align-items-center">
                <div class="image">
                    <img src="<?php echo $image; ?>" alt="<?php echo $alt; ?>">
                </div>
                <div class="divider my-4 my-md-0 mx-md-5"></div>
                <div class="content">
                    <div class="title">
                        <h2 class="fs-3"><?php echo $title; ?></h2>
                    </div>
                    <div class="text">
                        <?php echo $text; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
