<?php

function render_block_ctaempre($attributes)
{
    $text = $attributes['text'];
    $image = $attributes['image'];
    $btnText = $attributes['btnText'];
    $btnLink = $attributes['btnLink'];

    ob_start(); // Start HTML buffering
?>

    <div class="femai-ctaempre">
        <div class="container default-femai">
            <div class="wrap d-flex flex-column flex-md-row justify-content-center">
                <div class="image">
                    <img src="<?php echo $image; ?>" alt="">
                </div>
                <div class="content d-flex">
                    <div class="m-auto">
                        <div class="title">
                            <h2 class="text-primary">
                                <?php the_title(); ?>
                            </h2>
                        </div>
                        <div class="text">
                            <?php echo $text; ?>
                        </div>
                        <div class="action w-100">
                            <a class="btn btn-success d-block" href="<?php echo $btnLink; ?>">
                                <?php echo $btnText; ?>
                            </a>
                        </div>
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
