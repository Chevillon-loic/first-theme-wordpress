<?php
defined('ABSPATH') || die();
/**
 * OUR FOOD Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<?php
$title = get_field('title');
$fst = get_field('first_sub_title');
$sst = get_field('second_sub_title');
$tst = get_field('third_sub_title');
$fd = get_field('first_description');
$sd = get_field('second_description');
$td = get_field('third_description');
$fpicture = get_field('first_picture');
$spicture = get_field('second_picture');
$tpicture = get_field('third_picture');
$fcolor = get_field('first_color');
$scolor = get_field('second_color');
$tcolor = get_field('third_color');
?>

<section id="ourFood">
    <div class="backgroundColor">
        <div id="ourFoodContainer">
            <div id="titleOurFood">
                <h2><?= $title ?></h2>
            </div>
            <div id="ourFoodImages">

                <div class="foodImages" style="background-image: url('<?= $fpicture ?>');">
                    <div id="blockInImages" style="background-color: <?= $fcolor ?>;">
                        <div class="blockTitle">
                            <h4><?= $fst ?></h4>
                        </div>
                        <div class="blockSubtitle">
                            <h5><?= $fd ?></h5>
                        </div>
                    </div>
                </div>

                <div class="foodImages" style="background-image: url('http://theme_chevillon.localhost/wp-content/uploads/2021/05/plat.png');">
                    <div id="blockInImages" style="background-color: <?= $scolor ?>;">
                        <div class="blockTitle">
                            <h4><?= $sst ?></h4>
                        </div>
                        <div class="blockSubtitle">
                            <h5><?= $sd ?></h5>
                        </div>
                    </div>
                </div>

                <div class="foodImages" style="background-image: url('http://theme_chevillon.localhost/wp-content/uploads/2021/05/gateau.png');">
                    <div id="blockInImages" style="background-color: <?= $tcolor ?>;">
                        <div class="blockTitle">
                            <h4><?= $tst ?></h4>
                        </div>
                        <div class="blockSubtitle">
                            <h5><?= $td ?></h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
return;
