<?php

function render_block_mockup($attributes)
{
    $title = $attributes['title'];
    $text = $attributes['text'];
    $mockup = $attributes['mockup'];

    ob_start(); // Start HTML buffering
?>

    <div class="femai-mockup">
        <div class="container default-femai">
            <div class="wrap d-flex flex-column flex-md-row">
                <div class="content">
                    <div class="title">
                        <h2 class="fs-1"><?php echo $title; ?></h2>
                    </div>
                    <div class="text">
                        <p>
                            <?php echo $text; ?>
                        </p>
                    </div>
                </div>
                <div class="mockup">
                    <img src="<?php echo $mockup ?>">
                </div>  
            </div>
        </div>
    </div>

<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
