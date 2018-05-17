<?php
/**
 * Template Name: Front Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
		<?php $logo = get_field('front_page_banner_logo'); ?>
		<?php $banner_text = get_field('front_page_banner_text'); ?>

		<?php $intro_text = get_field('front_page_intro_paragraph'); ?>
		<?php $intro_icon = get_field('front_page_intro_icon'); ?>




	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="banner-section">
				<div class="banner-section-img-wrapper">
					<img src="<?php echo $logo ?>" alt="Pacwest Logo">
				</div>

				<h1><?php echo $banner_text ?></h1>	
			</header>

			<section class="intro-section">
				<div class="intro-section-paragraph">
					<?php echo $intro_text ?>
				</div>
				<div class="intro-section-img-wrapper">
					<img src="<?php echo $intro_icon ?>" alt="Leaf Icon">
				</div>
			</section>

			<section class="pacwest-difference">
				<div class="pacwest-difference-title">
					<h2>The Pacwest Difference</h2>
				</div>
				<div class="pacwest-difference-card-wrapper">
					<div class="card">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Icons/PNG/pwc-balance.png" alt="Icon">
						<p>Strong Government Relationships</p>
					</div>
					<div class="card">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Icons/PNG/pwc-lab-dark.png" alt="Icon">
						<p>Innovative Technologies</p>
					</div>
					<div class="card">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Icons/PNG/pwc-hands.png" alt="Icon">
						<p>Strategic Partnerships and Alliances</p>
					</div>
					<div class="card">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Icons/PNG/pwc-light-dark-01.png" alt="Icon">
						<p>Multi-Provincial Opportunities</p>
					</div>
				</div>

				<button class="learn-more">
					Learn More
				</button>

			</section>



	
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
