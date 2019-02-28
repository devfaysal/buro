<?php get_header(); ?>
    <section class="banner innerpageBanner clear-fixed">
    	<div class="slider-border"></div>
    	<div class="fluid-container">
        	<div class="content-row">
            	<div class="grid-12">
                	<div class="slider-wrapper">
                        <?php 
                        if( have_rows('slider') ): 
                            // loop through the rows of data
                            while ( have_rows('slider') ) : the_row();
                            // display a sub field value
                        ?>

                            <div class="slide">
                                <img src="<?php the_sub_field('image'); ?>">
                            </div>

                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                    <div class="banner-content">
                    	<h1 class="bold"><?php the_field('slider_title'); ?></h1>
                        <br clear="all">
                    	<a href="<?php the_field('slider_button_link'); ?>" class="button-large button-white semibold">book now</a>
                        <p><?php the_field('slider_subtitle'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="clear-fixed room-details inner-sections">
    	<div class="content-row">
        	<div class="grid-12">
            	<div class="customtile">
                	<div class="content-row">
                    	<div class="grid-6">
                        	<div class="content-row">
                            	<div class="grid-12">
                                	<h2 class="section-title-2 text-uppercase bold margin-bottom-zero">room type: <?php the_field('type'); ?></h2>
                                    <p class="text-uppercase semibold gray text-medium margin-top-10">room capacity: <?php the_field('capacity'); ?></p>
                                    <h3 class="margin-top-50 margin-bottom-zero">Amenities & Services</h3>
                                    <ul class="room-features">
                                        <?php 
                                        if( have_rows('amenities_and_services') ): 
                                            // loop through the rows of data
                                            while ( have_rows('amenities_and_services') ) : the_row();
                                            // display a sub field value
                                        ?>

                                            <li><?php the_sub_field('list'); ?></li>

                                        <?php
                                            endwhile;
                                        endif;
                                        ?>
                                    </ul>
                                    <h3 class="margin-top-50">Cancellation Policy</h3>
                                    <p>For any individual booking: Cancellation Notice must be given at-least 72 hours prior to Arrival/Check-in date. During specific periods such as consecutive Government holidays, Eid-Ul-Fitr, Eid-Ul-Azha, Christmas, Buddha Purnima, Bengali New Year, Durga Puja, New Year’s Eve etc., cancellation notice must be given at-least 15 days prior to Arrival/Check-in date. Cancellation made after the period of notice OR No-Shows will be charged one full night's Room Tariff (of each room booked) with 15% VAT and 10% Service Charge.</p>
                                    <p>For any Group Booking (Minimum 10 Rooms), Cancellation Notice must be given at least 10 days prior to Arrival/Check-in date.</p>
                                    <p>For above 10 Rooms, cancellation notice must be given at-least 25 days prior to Arrival/Check-in date. During specific periods such as consecutive Government holidays, Eid-Ul-Fitr, Eid-Ul-Azha, Christmas, Buddha Purnima, Bengali New Year, Durga Puja, New Year’s Eve etc., cancellation notice must be given at-least 35 days prior to Arrival/Check-in date. Cancellation made after the period of notice OR No-Shows we charge 50% of the total budget.</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-6 padding-zero">
                        	<img class="image-responsive" src="<?php the_field('image'); ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="clear-fixed contactus-bg inner-sections">
    	<div class="content-row">
        	<div class="grid-12">
            	<h2 class="section-title white text-uppercase text-center">Contact Us</h2>
            </div>
        </div>
        <div class="content-row">
        	<div class="grid-6 border-right">
            	<div class="padding-40 text-right">
                	<p class="text-big bold text-uppercase white margin-top-zero">Our Location</p>
                    <p class="text-small white ultralight">House NO: 69/C Road No 2, Ragendrapur, <br> Gazipur, Dhaka, Bangladesh</p>
                </div>
            </div>
            <div class="grid-6">
            	<div class="padding-40">
                	<p class="text-big bold text-uppercase white margin-top-zero">Reservation Contact details</p>
                    <p class="text-small white ultralight margin-zero">Phone No: 01755603311, 01955603311, 01199611606</p>
                    <p class="text-small white ultralight margin-zero">Email Address: gazipurchrd@chrdresorts.com</p>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
