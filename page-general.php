<?php

// Template Name: General

get_header(); ?>

<section id="content" class="wrap" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header>
			<div class="bloc hero hero--gen" style="background: #ccc url('<?php the_field('gen_hero_img'); ?>') top center/cover no-repeat;">
				<h1 class="hdln hdln--hero"><?php the_field('gen_hdln'); ?></h1>
			</div> <!-- END .hero -->
		</header>

		<section class="wrap wrap--gen">
			<div class="bloc--66 bloc__gen">
				<h2 class="hdln hdln--feat"><?php the_field('gen_pnlhead_01'); ?></h2>	
				<?php the_field('gen_pnltxt_01'); ?>
			</div>
			<div class="bloc--33 bloc__gen">
				<h4 class="hdln hdln--feat"><?php the_field('gen_pnlhead_02'); ?></h4>	
				<?php the_field('gen_pnltxt_02'); ?>
			</div>
		</section> <!-- END .blocFeatSplit -->
			
		</div> <!-- END .wrap--mxw -->
	</article>

	<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
	<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>