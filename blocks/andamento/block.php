<?php

function render_block_andamento($attributes, $content)
{
    $title = $attributes['title'];
    $image = $attributes['image'];

    ob_start(); // Start HTML buffering
?>

    <div class="femai-andamento">
        <div class="container default-femai">
            <div class="title">
                <h2 class="fs-3 text-uppercase"><?php echo $title; ?></h2>
            </div>
            <div class="wrap row m-0 w-100">
                <div class="image col-12 col-md-5">
                    <img src="<?php echo $image ?>">
                </div>
                <div class="content col-12 col-md-7">
                    <?php echo $content; ?>
                </div>
            </div>
        </div>
    </div>

<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
