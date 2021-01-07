<?php

function gymfitnes_ubicacion_shortcode() {
    $ubicacion = get_field('ubicacion');

    ?>

    <div class="ubicacion">
        <input type="hidden" id="lat" value="<?php $ubicacion['lat'] ?>" />
        <input type="hidden" id="lng" value="<?php $ubicacion['lng'] ?>" />
        <input type="hidden" id="direccion" value="<?php $ubicacion['address'] ?>" />
        <div id="mapa"></div>
    </div>

    <?php

}
add_shortcode( 'gymfitness_ubicacion', 'gymfitnes_ubicacion_shortcode' );

