<?php
defined('ABSPATH') || die();
/**
 * OUR VALUE Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<?php
$title = get_field('title');
$first_subtitle = get_field('first_subtitle');
$first_text = get_field('first_text');
$second_subtitle = get_field('second_subtitle');
$second_text = get_field('second_text');
$slogan = get_field('slogan');
?>

<section id="ourValue">

    <div id="ourValueBackground">
        <div id="containerOurValue">
            <div id="ourValueBlock">
                <div id="ourValueTitle">
                    <h4><?= $title ?></h4>
                </div>

                <div class="ourValueSubtitle">
                    <h6><?= $first_subtitle ?></h6>
                </div>

                <div class="ourValueText">
                    <p><?= $first_text ?></p>
                </div>

                <div class="ourValueSubtitle">
                    <h6><?= $second_subtitle ?></h6>
                </div>

                <div class="ourValueText">
                    <p><?= $second_text ?></p>
                </div>

                <div class="ourValueSubtitle">
                    <h6><?= $slogan ?></h6>
                </div>
            </div>

        </div>


    </div>
</section>

<?php
return;
