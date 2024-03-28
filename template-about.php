<?php

//Template Name: About Page

?>

<?php get_header(); ?>

<main>

    <section class="about-banner" style="background-image: url(<?php the_field('about_banner_image'); ?>)">
    </section>

    <section class="about-us">
        <div class="container">
            <h2><?php the_field('about_us_title'); ?></h2>
            <p><?php the_field('about_part_one'); ?></p>
        </div>
    </section>

    <section class="about-us">
        <div class="container">
            
            <div class="card-flex">
                <div class="left" style="background-image: url(<?php the_field('about_card_image'); ?>)">

                </div>
                <div class="right">
                <h3><?php the_field('about_card_title'); ?></h3>
                <?php the_field('about_card_list'); ?>
                </div>
            </div> 
        </div>
    </section>

    <section class="about-us">
        <div class="container">
            <?php the_field('about_part_two'); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>