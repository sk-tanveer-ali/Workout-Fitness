<?php get_header(); ?>

<?php
 
	if ( have_posts() ) :

	while ( have_posts() ) : the_post();   
 
?>

	<main>

		<section class="small-banner-single">
			<div class="container">
				<h2><?php the_title(); ?></h2>
			</div>
		</section>

		<section class="blog-single">
			<div class="container">
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
					<p><?php echo get_the_date(); ?></p>
				</div>

				
			</div><!-- author-flex end -->

			<div class="img-single">
				<img src="<?php the_field('section_blogs_image'); ?>" alt="">
			</div>
			<?php the_content();?>

			</div>
		</section>

	</main>
	
    <?php 

	endwhile;

	endif;

?>

 <?php get_footer(); ?>