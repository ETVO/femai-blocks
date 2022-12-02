<?php

function render_block_apresenta($attributes, $content)
{
    $seal = $attributes['seal'];
    $text = $attributes['text'];
    $image = $attributes['image'];
    $entrega = $attributes['entrega'];

    $linha = get_the_terms(get_the_ID(), 'linha')[0];

    if ($linha)
        $linha_url = get_term_link($linha->term_id);

    ob_start(); // Start HTML buffering
?>

    <div class="femai-apresenta">
        <div class="container default-femai">
            <div class="wrap d-flex flex-column flex-md-row justify-content-center">
                <div class="content">
                    <div class="seal">
                        <img src="<?php echo $seal; ?>" alt="">
                    </div>
                    <div class="title">
                        <h2 class="text-primary">
                            <?php the_title(); ?>
                        </h2>
                    </div>
                    <?php if ($linha) : ?>
                        <div class="linha">
                            <span class="rounded-pill">
                                <?php echo $linha->name; ?>
                            </span>
                        </div>
                    <?php endif; ?>
                    <div class="text">
                        <?php echo $text; ?>
                    </div>
                    <div class="destaques">
                        <?php echo $content; ?>
                    </div>
                    <div class="entrega">
                        <?php echo $entrega; ?>
                    </div>
                </div>
                <div class="image" >
                    <img src="<?php echo $image; ?>" alt="">
                </div>
            </div>
        </div>
    </div>

<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
