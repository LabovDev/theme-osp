<?php

// Template Name: Home

get_header(); ?>

<section id="content" class="wrap" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header >
			<div class="bloc hero">
				<div class="hero__carousel">
					<?php echo do_shortcode('[metaslider id="50"]'); ?>
				</div> <!-- END .hero__carousel -->
			</div> <!-- END .hero -->
		</header>
			
			<section class="wrap heroNav">
				<section class="bloc--50 heroNav__sctn heroNav__sctn--01"><a class="link link--heroNav" href="<?php bloginfo('url'); ?>/?page_id=18">About</a></section>
				<section class="bloc--50 heroNav__sctn heroNav__sctn--02"><a class="link link--heroNav" href="<?php bloginfo('url'); ?>/?page_id=10">Mixers</a></section>
				<section class="bloc--50 heroNav__sctn heroNav__sctn--04"><a class="link link--heroNav" href="<?php bloginfo('url'); ?>/?page_id=14">Parts &amp; Service</a></section>
				<section class="bloc--50 heroNav__sctn heroNav__sctn--03"><a class="link link--heroNav" href="<?php bloginfo('url'); ?>/?page_id=16">Contact</a></section>
			</section> <!-- END .heroNav -->
			
			<section class="wrap blocFeat">
				<div class="bloc--50 blocFeat__cntnt padRight">
					<h1 class="hdln hdln--feat"><?php the_field('feat_head_01'); ?></h1>
					<h2 class="hdln hdln--featSub"><?php the_field('feat_sub_head_01'); ?></h2>
					<?php the_field('feat_txt_01'); ?>
					<div id="featMore-01">
						<div class="bloc--100 blocFeat__more">
							<?php the_field('feat_txt_01_more'); ?>
						</div>
					</div>
					<button class="btn btn--dark" id="feat1">Learn More</button>
	
				</div>
				<div class="bloc--50 blocFeat__img">
					<?php 
						$image = get_field('feat_img_01');
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
				</div>
							
			</section> <!-- END .blocFeatSplit -->
			
			<section class="wrap blocFeat blocFeat--alt">
				<div class="bloc--50 blocFeat__img">
					<?php 
						$image = get_field('feat_img_02');
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
				<div class="bloc--50 blocFeat__cntnt">
					<h1 class="hdln hdln--feat"><?php the_field('feat_head_02'); ?></h1>
					<h2 class="hdln hdln--featSub"><?php the_field('feat_sub_head_02'); ?></h2>
					<?php the_field('feat_txt_03'); ?>
					<div id="featMore-02">
						<div class="bloc--100 blocFeat__more">
							<?php the_field('feat_txt_02_more'); ?>
						</div>
					</div>
					<button class="btn btn--dark" id="feat2">Learn More</button>
	
				</div>				
			</section> <!-- END .blocFeatSplit -->
			
			<section class="wrap blocFeat blocFeat--full">
				<div class="bloc--100 blocFeat__img">
					<?php 
						$image = get_field('feat_img_03');
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
				<div class="bloc--100 blocFeat__cntnt">
					<h1 class="hdln hdln--feat  hdln--featFull"><?php the_field('feat_head_03'); ?></h1>
					<h2 class="hdln hdln--featSub hdln--featSubFull"><?php the_field('feat_sub_head_03'); ?></h2>
					<p class="txt txt--feat txt--featFull"><?php the_field('feat_txt_03'); ?></p>
					<div id="featMore-03">
						<div class="bloc--100 blocFeat__more">
							<?php the_field('feat_txt_03_more'); ?>
						</div>
					</div>	
					<button class="btn btn--dark" id="feat3">Learn More</button>			
				</div>
			</section>
			
		</div> <!-- END .wrap--mxw -->
	</article>

	<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
	<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>