<?php get_header(); ?>
	<section class="banner clear-fixed">
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
                    	<a href="" class="button-large button-white semibold">our chrd</a>
                        <p><?php the_field('slider_subtitle'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="clear-fixed inner-sections thumbnail-listing">
    	<div class="fluid-container">
        	<div class="content-row">
            	<div class="grid-12 text-center">
                	<h2 class="section-title text-uppercase"><?php the_field('heading'); ?></h2>
                    <p class="times-new-roman text-big text-italic"><?php the_field('description'); ?></p>
                </div>
            </div>
        	<div class="content-row">
                <?php 
                $posts = get_field('chrds');

                if( $posts ): ?>
                    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <div class="grid-4">
                            <div class="image-thumbnail">
                                <a class="image-holder" href="<?php the_permalink(); ?>" style="background-image:url(<?php echo get_the_post_thumbnail_url( $post ,'full') ?>);"></a>
                                <a class="chrd-name bold text-uppercase text-center" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    
    <section class="clear-fixed why-choose-chrd" style="background-image:url(<?php the_field('image'); ?>);">
    	<div class="why-chrd-content">
        	<h2 class="section-title white text-uppercase">why choose chrd </h2>
            <p class="text-big dark-gray times-new-roman text-italic">
            Our resort provides you some of the most breathtaking view where you can be one with the nature and make your body and mind super relaxed. Our range of hospitality features provides you with the utmost royal happiness. 
            <br> <br> 
            We provide transport for any customer from their home location to our resort. So what are you waiting for, book a room today and Enjoy....
            </p>
        </div>
    </section>
    <section class="clear-fixed inner-sections text-center">
    	<div class="content-row">
        	<div class="grid-12 inner-sections">
            	<h2 class="section-title text-uppercase">customer feedbacks</h2>
                
                <div class="customer-feedbacks">
                    <?php 
                    if( have_rows('customer_feedbacks') ): 
                        // loop through the rows of data
                        while ( have_rows('customer_feedbacks') ) : the_row();
                        // display a sub field value
                    ?>

                        <div class="feedback-slides">
                    	    <h4 class="light text-uppercase margin-zero"><?php the_sub_field('name'); ?></h4>
                            <p class="dark-gray text-big"><?php the_sub_field('which_chrd'); ?></p>
                            <p class="quote times-new-roman text-italic">“<?php the_sub_field('feedback'); ?>”</p>
                        </div>

                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
