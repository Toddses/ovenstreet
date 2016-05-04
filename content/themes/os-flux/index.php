<?php
/**
 * The main template file.
 *
 * @package flux
 */
get_header(); ?>

	<div class="main">

        <div class="hero text-center padded-6">
            <object class="logo" type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/assets/img/oven-street-bakery-logo.svg" title="This is our logo!">Oven Street Bakery Logo. It's an svg image and your browser is so old it doesn't support svg.</object>
            <div class="v-margin-3">
                <h1 class="uppercase no-margin text-white">So <span class="text-pink500">good</span></h1>
                <h4 class="no-margin text-white">you won't miss the gluten</h4>
            </div>

            <div class="social-links">
                <div class="follow-us text-white desktop-only"><p>Follow Us!</p></div>
                <a href="http://facebook.com/ovenstreet" target="_blank" class="svg-link" data-toggle=".follow-us" data-toggle-class="is-active" data-toggle-event="mouseover,mouseout"><object type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-with-circle.svg">Oven Street Bakery's Facebook Page. It's an svg image and your browser is so old it doesn't support svg.</object></a>
                <a href="http://instagram.com/ovenstreet" target="_blank" class="svg-link" data-toggle=".follow-us" data-toggle-class="is-active" data-toggle-event="mouseover,mouseout"><object type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-with-circle.svg">Oven Street Bakery's Instagram Page. It's an svg image and your browser is so old it doesn't support svg.</object></a>
            </div>

            <div class="info text-white text-left">
                <h6 class="no-margin"><a href="tel:+19373079975">937.307.9975</a></h6>
                <h6 class="no-margin"><a href="mailto:<?php echo antispambot( 'info@ovenstreet.com' ); ?>"><?php echo antispambot( 'info@ovenstreet.com' ); ?></a></h6>
            </div>

            <div class="arrow">
                <a href="#" class="svg-link skip" data-target="#feed"><object type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/assets/img/chevron-with-circle-down.svg"> It's an svg image and your browser is so old it doesn't support svg.</object></a>
            </div>
        </div>

        <section id="feed" class="padded-4 text-center bg-tan">
            <div class="instagram-feed">
                <div><h5 class="uppercase no-margin title-bar">The Latest<br/><span>Instagram Photos</span></h5></div>
                <div class="row"><?php dynamic_sidebar( 'instagram-feed' ); ?></div>
            </div>
        </section>

        <section class="about-us text-center padded-6 bg-white">
            <div class="background"></div>
            <div class="row to-front">
                <div class="sm-twelve lg-five columns text-center lg-push-one">
                    <h5 class="uppercase no-margin title-bar">About Us<br/><span>Our Mission</span></h5>
                </div>
            </div>
            <div class="row to-front">
                <div class="sm-twelve lg-five columns text-left lg-push-one">
                    <p>Locally owned and operated out of Dayton, Ohio, <span class="bold text-pink900">Oven Street</span> is a fully gluten- and contamination-free bakery.</p>
                    <p>We strive to make the highest quality gluten free baked goods you can find. To us, <span class="bold text-pink900">delicous</span> isn't just a word, it’s a mantra. Our kitchen is contaminate free and <span class="bold text-pink900">celiac friendly</span> so you always know our products truly are <span class="bold text-pink900">gluten-free</span>. Try one of our cinnamon rolls, cookies, muffins, or little fruit pies today and we think you'll agree, our products speak for themselves.</p>
                </div>
            </div>
        </section>

        <section id="feed" class="padded-4 text-center bg-tan">
            <div class="instagram-feed">
                <div><h5 class="uppercase no-margin title-bar">Find Us<br/><span>Where We Are</span></h5></div>
                <div class="row text-center">
                    <div class="sm-twelve lg-six columns lg-push-three">
                        <p>Every Saturday between 9am and 1pm you can find us at the <a href="https://www.facebook.com/huberheightsfarmersmarket" target="_blank" class="text-pink500">Huber Heights Farmer's Market</a></p>
                        <p><a href="https://goo.gl/maps/2kSkT" target="_blank" class="text-pink500">6178 Chambersburg Road<br />Huber Heights, OH 45424</a></p>
                        <p>Here is our menu for <span class="bold">Saturday, May 7, 2016</span>!</p>
                        <p>
                        <strong>Sandwich Bread</strong>: $8.00<br />
                        <strong>12" Pizza Crust</strong>: $7.00<br />
                        <strong>Cinnamon Rolls</strong>: $3.00<br />
                        <strong>Bag of Snack Mix</strong>: $5.00<br />
                        <strong>Blueberry "Love Bird" Pie</strong>: $8.00<br />
                        <strong>Mother's Day "Celebration" Cookies</strong>: $3.00<br />
                        </p>
                        <!--<p>We'll be accepting pre-orders until Wednesday evening! Send 'em over with the form below!</p>-->
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="padded-4 bg-white">
            <div class="row">
                <div class="twelve columns text-center">
                    <h5 class="uppercase no-margin title-bar">Contact<br/><span>Orders & Such</span></h5>
                </div>
                <div class="sm-twelve lg-ten columns lg-push-one">
                    <p>Note that at the moment we cannot accept direct orders online. However, you can fill out the form below with your order, and we will get in touch with you post-haste to provide a quote.</p>
                </div>
            </div>
            <?php dynamic_sidebar( 'contact-form' ); ?>
        </section>

    </div>

<?php get_footer(); ?>
