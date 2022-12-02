<?php

function render_block_localizacao($attributes)
{
    $title = $attributes['title'];
    $address = $attributes['address'];
    $references = $attributes['references'];

    $map_url = htmlspecialchars(strip_tags($address));

    ob_start(); // Start HTML buffering
?>

    <div class="femai-localizacao">
        <div class="container default-femai">
            <div class="wrap d-flex flex-column flex-md-row">
                <div class="content">
                    <div class="title">
                        <h2 class="fs-3"><?php echo $title; ?></h2>
                    </div>
                    <div class="address d-flex">
                        <div class="icon my-auto me-2">
                            <span class="bi-geo-alt-fill"></span>
                        </div>
                        <div class="text my-auto">
                            <?php echo $address; ?>
                        </div>
                    </div>
                    <div class="references">
                        <p> 
                            <?php echo $references; ?>
                        </p>
                    </div>
                </div>
                <div class="map col-12 col-md-7">
                    <iframe src="https://maps.google.com/maps?q=<?php echo $map_url; ?>&t=m&mrt=yp&z=15&output=embed&iwloc=addr&msa=0" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>

<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
