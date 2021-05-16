<?php
defined('ABSPATH') || die();
/**
 * OUR PLACE Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<?php
$titre = get_field('titre');
$sous_titre = get_field('sous_titre');
?>

<section id="home">
    <div class="backgroundImage">
        <nav>
            <div id="containerNav">
                <div id="logo">
                    <img src="http://theme_chevillon.localhost/wp-content/uploads/2021/05/logo.png" alt="">
                </div>
                <div id="link">
                    <a href="#ourFood">OUR FOOD</a>
                    <a href="#ourRestaurant">OUR RESTAURANT</a>
                    <a href="#ourValue">OUR VALUES</a>
                    <a href="#titleInformation">RESERVATIONS</a>
                    <a href="#containerMenuFooter">CONTACT</a>
                </div>
            </div>
        </nav>
        <div id="homeContainer">
            <div id="boxTitleHome">
                <h1 id="titleHome"><?= $titre; ?></h1>
            </div>
            <div id="boxSubtitleHome">
                <h2 id="subtitleHome"><?= $sous_titre; ?></h2>
            </div>
        </div>
    </div>
</section>

<?php
return;
