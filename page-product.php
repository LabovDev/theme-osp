<?php

// Template Name: Product

get_header(); ?>

<section id="content" class="wrap" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header>
			<div class="bloc fixHeight" style="background: url('<?php the_field('prd_hero_img'); ?>') top center/contain no-repeat;">
				<div>
					<h1 class="hdln hdln--prdName"><?php the_field('prd_name'); ?></h1>
				</div>
			</div> <!-- END .heroImg -->
			<div class="heroContent">
				<h2 class="hdln hdln--prdMain"><?php the_field('prd_hero_hdln'); ?></h2>
				<h3 class="hdln hdln--prdSub"><?php the_field('prd_hero_sub_hdln'); ?></h3>
				<p class="txt txt--prdHero"><?php the_field('prd_hero_desc_txt'); ?></p>
			</div> <!-- END .heroContent -->
		</header>

		<section class="wrap blocFeat">
			<div class="bloc bloc--50">
				<h1 class="hdln hdln--feat"><?php the_field('prd_over_hdln'); ?></h1>
				<h2 class="hdln hdln--featSub"><?php the_field('prd_over_hdln_sub'); ?></h2>				
			</div>
			<div class="bloc bloc--50 blocFeat__cntnt">
				<?php the_field('part_list_1'); ?>
				<?php the_field('part_list_2'); ?>
			</div>
		</section>
			
	</article>

	<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>