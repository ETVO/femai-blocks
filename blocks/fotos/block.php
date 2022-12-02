<?php

function render_block_fotos($attributes)
{
    $title = $attributes['title'];
    $images = $attributes['images'];

    $id = 'femaiFotosCarousel' . rand(0, date('Y'));

    ob_start(); // Start HTML buffering
?>

    <div class="femai-fotos">
        <div class="container default-femai">
            <div class="title">
                <h2 class="fs-3 text-uppercase">
                    <?php echo $title; ?>
                </h2>
            </div>
            <div class="multi-carousel carousel slide items" data-bs-ride="false" data-custom-indicators="false" id="<?php echo $id; ?>">

                <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo $id; ?>" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <div class="carousel-inner">
                    <?php foreach ($images as $i => $image) :
                        $image = get_image_props_id($image['id']);
                    ?>
                        <div class="carousel-item <?php if ($i == 0) echo 'active'; ?>">
                            <div class="image col-12 col-md-6 col-lg-4">
                                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['caption'] ?>">
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

                <button class="carousel-control-next" type="button" data-bs-target="#<?php echo $id; ?>" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Seguinte</span>
                </button>
            </div>

        </div>
    </div>


<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
