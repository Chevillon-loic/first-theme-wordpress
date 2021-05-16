<?php /* Template Name: Special Template Home */
get_header();
wp_enqueue_style('style', get_stylesheet_uri());

$titre = get_field('titre');
$sous_titre = get_field('sous_titre');

$map = get_field('map');


?>
<section id="home">
    <div class="backgroundImage">
        <div id="homeContainer">
            <div id="boxTitleHome">
                <h1 id="titleHome"><?= $titre; ?></h1>
            </div>
            <h2 id="subtitleHome"><?= $sous_titre; ?></h2>
        </div>
    </div>
</section>

<section id="ourFood">
    <div class="backgroundColor">
        <div id="ourFoodContainer">
            <div id="titleOurFood">
                <h2>OUR FOOD</h2>
            </div>
            <div id="ourFoodImages">

                <div class="foodImages" style="background-image: url('http://theme_chevillon.localhost/wp-content/uploads/2021/05/vin.png');">
                    <div id="blockInImages" style="background-color: #D24F4C;">
                        <div class="blockTitle">
                            <h4>ITS SIMPLE</h4>
                        </div>
                        <div class="blockSubtitle">
                            <h5>NO FUSS JUST GREAT FLAVOURS</h5>
                        </div>
                    </div>
                </div>

                <div class="foodImages" style="background-image: url('http://theme_chevillon.localhost/wp-content/uploads/2021/05/plat.png');">
                    <div id="blockInImages" style="background-color: #85993C;">
                        <div class="blockTitle">
                            <h4>ITS FRESH</h4>
                        </div>
                        <div class="blockSubtitle">
                            <h5>NO CHEMICALS LOCALLY SOURCED</h5>
                        </div>
                    </div>
                </div>

                <div class="foodImages" style="background-image: url('http://theme_chevillon.localhost/wp-content/uploads/2021/05/gateau.png');">
                    <div id="blockInImages" style="background-color: #AA6328;">
                        <div class="blockTitle">
                            <h4>ITS INDULGENT</h4>
                        </div>
                        <div class="blockSubtitle">
                            <h5>TREATS HAND-MADE FOR YOU</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section id="ourRestaurant">
    <div id="ourRestaurantBackground">
        <div id="containerRestaurant">
            <div id="leftOurRestaurant">
                <div id="blockOurRestaurant">
                    <div id="blockOurRestaurantTitle">
                        <h4>OUR RESTAURANT</h4>
                    </div>
                    <div id="blockOurRestaurantText">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                    </div>
                </div>
                <div id="blockOurPeople">
                    <div id="blockOurPeopleTitle">
                        <h4>OUR PEOPLE</h4>
                    </div>

                    <div class="people">
                        <img src="http://theme_chevillon.localhost/wp-content/uploads/2021/05/unknown3.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed tetuer adipiscing elit, sed
                        </p>
                    </div>
                    <hr>
                    <div class="people">
                        <img src="http://theme_chevillon.localhost/wp-content/uploads/2021/05/unknown2.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed tetuer adipiscing elit, sed
                        </p>
                    </div>
                    <hr>
                    <div class="people">
                        <img src="http://theme_chevillon.localhost/wp-content/uploads/2021/05/unknown1.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed tetuer adipiscing elit, sed
                        </p>
                    </div>
                    <hr>
                    <div class="people">
                        <img src="http://theme_chevillon.localhost/wp-content/uploads/2021/05/unknown.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed tetuer adipiscing elit, sed
                        </p>
                    </div>
                </div>
            </div>
            <div id="rightOurRestaurant">
                <img class="imageOurRestaurant" src="http://theme_chevillon.localhost/wp-content/uploads/2021/05/chill.png" alt="">
                <img class="imageOurRestaurant" src="http://theme_chevillon.localhost/wp-content/uploads/2021/05/glass.png" alt="">
            </div>
        </div>
    </div>
</section>
<section id="ourValue">

    <div id="ourValueBackground">
        <div id="containerOurValue">
            <div id="ourValueBlock">
                <div id="ourValueTitle">
                    <h4>OUR VALUES</h4>
                </div>

                <div class="ourValueSubtitle">
                    <h6>LOCALLY SOURCED</h6>
                </div>

                <div class="ourValueText">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                </div>

                <div class="ourValueSubtitle">
                    <h6>HAND CRAFTED BY SKILLED STAFF</h6>
                </div>

                <div class="ourValueText">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                </div>

                <div class="ourValueSubtitle">
                    <h6>NO WASTE, NO TOXINS</h6>
                </div>
            </div>

        </div>


    </div>
</section>
<section id="informations">
    <div id="informationsContainer">
        <div id="titleInformation">
            <h4>COME, BREAK BREAD</h4>
        </div>
        <div id="textInformation">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quidem quisquam architecto aliquam dolorem quo tempora laboriosam voluptatum nemo dolorum deleniti corrupti, placeat autem odit maxime? Possimus temporibus iure voluptatum!</p>
        </div>
        <div id="reservationInformation">
            <p>Make a reservation, call <span id="number">(01482) 987456</span> or <span id="book">Book online</span></p>
        </div>
    </div>
</section>





<?PHP get_footer() ?>