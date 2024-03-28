<?php get_header(); ?>


<main>
    <!-------------- MAIN-BANNER ----------------->
    <section class="main-banner" style="background-image: url(<?php the_field('section_banner_image'); ?>)">
        <div class="container">
            <div class="text-box">

                <h1>
                    <?php the_field('section_banner_title'); ?>
                </h1>
                <p>
                    <?php the_field('section_banner_subtitle'); ?>
                </p>

                <?php

                $btn = get_field('section_banner_button');
                $btnLink = $btn['url'];
                $btnText = $btn['title'];
                $btnTarget = $btn['target'];
                ?>
                <a class="btn" href="<?php echo $btnLink; ?>" target="<?php echo $btnTarget; ?>">
                    <?php echo $btnText; ?>
                </a>
            </div>
        </div>
    </section>

    <!-- QUOTE SLIDER -->
	<section class="slider">
		<div class="container">

			<div class="custom-slider">
				<div class="item">
					<p><?php the_field('section_slider_quote1'); ?></p>
				</div>
				<div class="item">
					<p><?php the_field('section_slider_quote2'); ?></p>
				</div>
				<div class="item">
					<p><?php the_field('section_slider_quote3'); ?></p>
				</div>
                <div class="item">
					<p><?php the_field('section_slider_quote4'); ?></p>
				</div>
            </div>	

		</div>
	</section>
    
    <!-------------- PRODUCTS ----------------->
    <section class="products">
        <div class="container">
            <h5>Our Programs</h5>
            <h2>Build Your Best Body</h2>
            <div class="product-card-grid">

                <?php
                //CUSTOM QUERY
                $homepagePrograms = new WP_Query(
                    array(
                        'posts_per_page' => 4,
                        'post_type' => 'programs'
                    )
                );

                //THE LOOP
                while ($homepagePrograms->have_posts()) {
                    $homepagePrograms->the_post();

                    ?>

                <div class="card">
                    <div class="icon">
                        <?php the_content(); ?>
                    </div>
                    <h5>
                        <?php the_title(); ?>
                    </h5>
                    <p>
                        <?php the_field('program_short_description'); ?>
                    </p>

                    <div class="flex">
                        <?php

                        $btnProgram = get_field('program_button');

                        $btnProgramLink = $btnProgram['url'];
                        $btnProgramText = $btnProgram['title'];
                        $btnProgramTarget = $btnProgram['target'];
                        ?>
                        <a href="<?php echo $btnProgramLink; ?>" target="<?php echo $btnProgramTarget; ?>">
                            <?php echo $btnProgramText; ?>
                        </a>
                    </div>
                </div> <!-- card end -->

                    <?php
                }
                wp_reset_postdata();
                ?><!-- CLOSE THE LOOP -->

            </div> <!-- product-card-flex end -->
        </div> <!-- container end -->
    </section>


    <!-------------- SERVICES ----------------->
    <section class="services">
        <div class="container">
            <div class="service-flex">
                <div class="left" style="background-image: url(<?php the_field('section_services_image'); ?>)">
            </div>

                <div class="right">
                    <h5>
                        <?php the_field('section_services_title'); ?>
                    </h5>
                    <h2>
                        <?php the_field('section_services_subtitle'); ?>
                    </h2>
                    <p>
                        <?php the_field('section_services_paragraph'); ?>
                    </p>

                    <?php the_field('section_services_list'); ?>

                    <?php
                    $btnServices = get_field('section_services_button');

                    $btnServicesLink = $btnServices['url'];
                    $btnServicesText = $btnServices['title'];
                    $btnServicesTarget = $btnServices['target'];

                    ?>

                    <a class="btn" href="<?php echo $btnServicesLink; ?>" target="<?php echo $btnServicesTarget; ?>">
                        <?php echo $btnServicesText; ?>
                    </a>

                </div> <!-- right end -->
            </div> <!-- service-flex end -->
        </div> <!-- container end -->
    </section>


    <!-------------- TRAINERS ----------------->
    <section class="trainers">
        <div class="container">
            <h2>Our Trainers</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa esse harum doloremque corrupti delectus
            </p>

            <div class="trainers-grid">

                <?php
                //CUSTOM QUERY
                $homepageTrainers = new WP_Query(
                    array(
                        'posts_per_page' => 4,
                        'post_type' => 'trainers'
                    )
                );

                //THE LOOP
                while ($homepageTrainers->have_posts()) {
                    $homepageTrainers->the_post();

                    ?>

                <div class="card" style="background-image: url(<?php the_field('section_trainers_image'); ?>)">

                    <div class="socialmedia">

                        <a href="<?php the_field('section_trainers_fb_url'); ?>" target="_blank">
                            <div class="icon"><img src="<?php the_field('section_trainers_fb_svg'); ?>" alt=""></div>
                        </a>
                        <a href="<?php the_field('section_trainers_insta_url'); ?>" target="_blank">
                            <div class="icon"><img src="<?php the_field('section_trainers_insta_svg'); ?>" alt=""></div>
                        </a>
                        <a href="<?php the_field('section_trainers_twitter_url'); ?>" target="_blank">
                            <div class="icon"><img src="<?php the_field('section_trainers_twitter_svg'); ?>" alt="">
                            </div>
                        </a>
                    </div>
                </div>

                <?php
                }
                wp_reset_postdata();
                ?><!-- CLOSE THE LOOP -->

            </div><!-- trainers-flex end -->
        </div><!-- container end -->
    </section>

    <!-------------- PRICING ----------------->
    <section class="plans">
        <div class="container">
            <h5>
                <?php the_field('section_pricing_title'); ?>
            </h5>
            <h2>
                <?php the_field('section_pricing_subtitle'); ?>
            </h2>
            <div class="plans-grid">

                <?php
                //CUSTOM QUERY
                $homepagePricing = new WP_Query(
                    array(
                        'posts_per_page' => 3,
                        'post_type' => 'pricing'
                    )
                );

                //THE LOOP
                while ($homepagePricing->have_posts()) {
                    $homepagePricing->the_post();

                    ?>

                <div class="card">
                    <div class="currency">
                        <h5>
                            <?php the_field('section_pricing_currency'); ?>
                        </h5>
                        <h2>
                            <?php the_field('section_pricing_amount'); ?><span>/per month</span>
                        </h2>
                    </div>
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                    <p>
                        <?php the_field('section_pricing_short_description'); ?>
                    </p>

                    <?php the_field('section_pricing_list'); ?>

                    <a href="<?php the_field('section_pricing_button'); ?>" target="_blank">
                        <div class="plan-btn">
                            <h6>Get Started</h6>
                        </div>
                    </a>
                </div><!-- card end -->

                    <?php
                }
                wp_reset_postdata();
                ?><!-- CLOSE THE LOOP -->

            </div><!-- plans-flex end -->
        </div><!-- container end -->
    </section>


    <!-------------- BLOGS ----------------->
    <section class="blogs">
        <div class="container">

            <div class="blog-header">
                <h2>
                    <?php the_field('section_blogs_title'); ?>
                </h2>

                <?php
                $btnBlogs = get_field('section_blogs_button');

                $btnBlogsLink = $btnBlogs['link'];
                $btnBlogsText = $btnBlogs['title'];
                $btnBlogsTarget = $btnBlogs['target'];

                ?>

                <a class="blog-btn" href="<?php echo $btnBlogsLink; ?>" target="<?php echo $btnBlogsTarget; ?>">
                    <?php echo $btnBlogsText; ?>
                </a>
            </div>

            <div class="blog-grid">

                <?php
                //CUSTOM QUERY
                $homepageBlogs = new WP_Query(
                    array(
                        'posts_per_page' => 8,
                        'post_type' => 'post'
                    )
                );

                //THE LOOP
                while ($homepageBlogs->have_posts()) {
                    $homepageBlogs->the_post();

                    ?>

                <div class="card">
                    <div class="image" style="background-image: url(<?php the_field('section_blogs_image'); ?>)"></div>
                    <div class="blog-category-flex">
                        <h3>
                            <?php the_category(); ?>
                        </h3>
                        <p>
                            <?php echo get_the_date(); ?>
                        </p>
                    </div><!-- blog-catergory-flex end -->

                        <h4>
                            <?php the_title(); ?>
                        </h4>
                        <p class="excerpt">
                            <?php echo wp_trim_words(get_the_excerpt(), 10); ?>
                        </p>

                        <div class="author-flex">
                            <div class="left">
                                <div class="profile-image"
                                    style="background-image: url(<?php the_field('section_blogs_author_image'); ?>)"></div>
                            </div>
                            <div class="right">
                                <h5>
                                    <?php the_author(); ?>
                                </h5>
                                <p>
                                    <?php the_field('section_blogs_author_role'); ?>
                                </p>
                            </div>
                        </div><!-- author-flex end -->

                        <a href="<?php the_permalink(); ?>" target="_blank">Read Full Blog</a>
                    </div><!-- card end -->


                    <?php
                }
                wp_reset_postdata();
                ?><!-- CLOSE THE LOOP -->

            </div><!-- blogs-flex end -->
        </div><!-- container end -->
    </section>
</main>

<?php get_footer(); ?>