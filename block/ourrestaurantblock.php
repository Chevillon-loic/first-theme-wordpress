<?php
defined('ABSPATH') || die();
/**
 * OUR RESTAURANT Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<?php
$first_title = get_field('first_title');
$description =  get_field('description');
$second_title = get_field('second_title');
?>

<section id="ourRestaurant">
    <div id="ourRestaurantBackground">
        <div id="containerRestaurant">
            <div id="leftOurRestaurant">
                <div id="blockOurRestaurant">
                    <div id="blockOurRestaurantTitle">
                        <h4><?= $first_title; ?></h4>
                    </div>
                    <div id="blockOurRestaurantText">
                        <p><?= $description; ?></p>
                    </div>
                </div>
                <div id="blockOurPeople">
                    <div id="blockOurPeopleTitle">
                        <h4><?= $second_title; ?></h4>
                    </div>

                    <!-- boucle people -->
                    <?php if (have_rows('informations')) : ?>
                        <?php while (have_rows('informations')) : the_row();
                            $picture = get_sub_field('picture');
                            $description = get_sub_field('description');
                        ?>
                            <div class="people">
                                <img src="<?= $picture ?>" alt="">
                                <p><?= $description ?></p>
                            </div>
                            <hr>
                        <?php endwhile ?>
                    <?php endif ?>



                </div>
            </div>
            <div id="rightOurRestaurant">
                <img class="imageOurRestaurant" src="http://theme_chevillon.localhost/wp-content/uploads/2021/05/chill.png" alt="">
                <img class="imageOurRestaurant" src="http://theme_chevillon.localhost/wp-content/uploads/2021/05/glass.png" alt="">
            </div>
        </div>
    </div>
</section>

<?php
return;
