<?php
defined('ABSPATH') || die();
/**
 * OUR INFORMATIONS Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<?php

$title = get_field('title');
$text = get_field('text');
$information = get_field('information');

?>

<section id="informations">
    <div id="informationsContainer">
        <div id="titleInformation">
            <h4><?= $title; ?></h4>
        </div>
        <div id="textInformation">
            <p><?= $text; ?></p>
        </div>
        <div id="reservationInformation">
            <p><?= $information; ?></span></p>
        </div>
    </div>
    <div id="googleMap">
        <iframe id="inlineFrame" title="Inline Frame" width="100%" height="450" src="https://www.openstreetmap.org/export/embed.html?bbox=-0.004017949104309083%2C51.47612752641776%2C0.00030577182769775396%2C51.478569861898606&layer=mapnik">

        </iframe>
    </div>

    <div id="sign">
        <div id="leftVisit">
            <div id="visitContainer">
                <div id="titleVisit">
                    <h5>VISIT US</h5>
                </div>
                <div id="textVisit">
                    <p>lorem ipsum dolor, Sit amet consectetuer, Adipiscing elit, HU18 1le</p>
                </div>
            </div>
        </div>
        <div id="rightVisit">
        </div>
    </div>

    <div id="menuFooter">
        <div id="backgroundMenuFooter">
            <div id="containerMenuFooter">
                <a href="#ourFood">OUR FOOD</a>
                <a href="#ourValue">OUR VALUES</a>
                <a href="#ourRestaurant">OUR PEOPLE</a>

                <h6>OUR PLACE</h6>

                <a href="#ourFood">OUR FOOD</a>
                <a href="#ourValue">OUR VALUES</a>
                <a href="#ourRestaurant">OUR PEOPLE</a>

            </div>

        </div>
    </div>
    <footer>
        <div id="containerFooter">
            <p>TEMPLATE DOWNLOADED FROM UIREPUBLIC</p>
            <img src="http://theme_chevillon.localhost/wp-content/uploads/2021/05/main.jpg" alt="">
            <p>VISIT UIREPUBLIC.NET FOR MORE GREAT DESIGNS.</p>
        </div>
    </footer>
</section>


<?php
return;
