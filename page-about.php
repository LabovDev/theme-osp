<?php

// Template Name: About

get_header(); ?>

<section id="content" class="wrap" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header>
			<div class="bloc hero hero--about" style="background: url('<?php the_field('abt_hero_img'); ?>') top center/cover no-repeat;">
				<div>
					<h1 class="hdln hdln--hero">The Continental <span class="hdln--heroBig">Difference</span></h1>
					<h2 class="hdln hdln--heroSub"><?php the_field('abt_hdlnSub'); ?></h2>
					<p class="txt txt--hero"><?php the_field('abt_hero_txt'); ?></p>
				</div>
			</div> <!-- END .hero -->
		</header>

		<section class="wrap blocFeat blocAbt--full">
			<div class="bloc">
				<p class="txt txt--abtLead"><?php the_field('abt_lead_txt'); ?></p>
			</div>
		</section>

		<section class="wrap blocFeat--alt">
			<div class="bloc--50 blocFeat__cntnt padRight">
				<h1 class="hdln hdln--feat"><?php the_field('abt_pnlhead_01'); ?></h1>
				<h2 class="hdln hdln--featSub"><?php the_field('abt_pnlsub_head_01'); ?></h2>					
				<?php the_field('abt_pnltxt_01'); ?>
				<div id="abtMore-01">
					<div class="bloc blocFeat__more">
						<?php the_field('abt_pnltxt_01_more'); ?>
					</div>
				</div>
				<button class="btn btn--dark" id="abt1">More</button>
			</div>
			<div class="bloc--50 blocAbt__img">
				<?php 
					$image = get_field('abt_img_01');
					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>				
			</div>		
		</section> <!-- END .blocFeatSplit -->
		
		<section class="wrap blocFeat blocFeat--full">
			<div class="bloc blocFeat__img">
				<?php 
					$image = get_field('abt_img_02');
					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>
			</div>
			<div class="bloc blocAbt__cntnt">
				<h1 class="hdln hdln--feat hdln--featFull"><?php the_field('abt_pnlhead_02'); ?></h1>
				<h2 class="hdln hdln--featSub hdln--featSubFull"><?php the_field('abt_pnlsub_head_02'); ?></h2>
				<?php the_field('abt_pnltxt_02'); ?>					
				<div id="abtMore-02">
					<div class="bloc blocFeat__more">
						<?php the_field('abt_pnltxt_02_more'); ?>
					</div>
				</div>
				<button class="btn btn--dark" id="abt2">More</button>
			</div>
		</section>

		<section class="wrap blocFeat--alt">
			<div class="bloc--50 blocFeat__cntnt padRight">
				<h1 class="hdln hdln--feat"><?php the_field('abt_pnlhead_03'); ?></h1>
				<h2 class="hdln hdln--featSub"><?php the_field('abt_pnlsub_head_03'); ?></h2>					
				<?php the_field('abt_pnltxt_03'); ?>
<!-- 				<div id="abtMore-03">
					<div class="bloc blocAbt__more">
						<?php the_field('abt_pnltxt_03_more'); ?>
					</div>
				</div>
				<button class="btn btn--dark" id="abt3">More</button> -->
			</div>
			<div class="bloc--50 blocAbt__img">
				<?php 
					$image = get_field('abt_img_03');
					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>				
			</div>			
			<div class="wrap blocCta" style="margin-top: 3em; ">
				<a href="<?php bloginfo('url'); ?>/?page_id=32" class="btn btn--prd btn--dark">Continental Mixers is a CSTH company</a>
			</div> <!-- END .blocCta -->
		</section> <!-- END .blocFeatSplit -->


			
		</div> <!-- END .wrap--mxw -->
	</article>

	<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
	<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>