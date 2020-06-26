<?php

$wrapperStack = array();
$imgContainerStack = array();
$contentContainerStack = array();


$wrapperColor = get_sub_field('kies_kleur');
if ($wrapperColor == 'black') {
    array_push($wrapperStack, "background-black");
} elseif ($wrapperColor == 'blue') {
    array_push($wrapperStack, "background-blue");
} elseif ($wrapperColor == 'white') {
    array_push($wrapperStack, "background-white", "text-color");
}

$wrapperHeight = get_sub_field('kies_hoogte');
if ($wrapperHeight == 'normaal') {
    array_push($wrapperStack, "normal-height");
} elseif ($wrapperHeight == 'groot') {
    array_push($wrapperStack, "big-height");
}

$bgImgDisplay = get_sub_field('keuze_afbeelding');
if ($bgImgDisplay  == 'no_img') {
    array_push($imgContainerStack, "hide");
    array_push($contentContainerStack, "full-width");
} elseif ($bgImgDisplay  == "links") {
    array_push($imgContainerStack, "float-left");
    array_push($contentContainerStack, "float-left");
} elseif ($bgImgDisplay  == "rechts") {
    array_push($imgContainerStack, "float-right");
    array_push($contentContainerStack, "float-right");
}

$wrapperStyle = implode(" ", $wrapperStack);
$imgContainerStyle = implode(" ", $imgContainerStack);
$contentContainerStyle = implode(" ", $contentContainerStack);

?>


<div class="info-block-wrapper <?php echo $wrapperStyle ?>">

    <div class="info-block-container <?php echo $imgContainerStyle ?>">

        <?php
        $image = get_sub_field('foto'); /* nog meer subvelden in deze subgroep */
        ?>
        <section class="info-block-foto" style="background-image: url(<?php echo $image; ?>)"></section>
    </div>

    <div class="info-block-container text <?php echo $contentContainerStyle ?>">
        <div class="content-wrapper">
            <section class="kop">
                <h2><?php the_sub_field('kop'); ?></h2>
            </section>

            <section class="paragraaf">
                <p><?php the_sub_field('paragraaf'); /* name van subveld in subgroep */ ?></p>
            </section>

            <section class="cta-button">
                <a href="<?php the_sub_field('link') ?>"><?php the_sub_field('cta-button'); /* name van subveld in subgroep */ ?></a>

            </section>
        </div>
    </div>





</div>