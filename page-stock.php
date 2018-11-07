<?php

// Template Name: In Stock

get_header(); ?>

<section id="content" class="wrap wrap--mxw" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header>
			<div class="bloc hero hero--instock">
				<h1 class="hdln hdln--hero hdln--cntnt">In-stock Mixers</h1>
					<?php the_content(); ?>
			</div> <!-- END .heroImg -->
		</header>
		
		<section class="bloc inStock">
			
			<?php if( have_rows('add_truck') ): ?>
			
				<div class="inStock__item">
			
				<?php while( have_rows('add_truck') ): the_row(); 
			
					// vars
					$name = get_sub_field('truck_name');
					$image = get_sub_field('truck_image');
					$specpdf = get_sub_field('truck_spec_pdf');
					$desc = get_sub_field('truck_desc');
					$feat = get_sub_field('truck_features');
			
					?>
					<div class="bloc--50">
						<h1 class="hdln hdln--stock"><?php echo $name ?></h1>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"  class="img--stock" />
						<?php if( $specpdf ): ?>
							<a href="<?php echo $specpdf; ?>" class="btn">
						<?php endif; ?>
						
							Download Spec' Sheet (PDF)
						
						<?php if( $specpdf ): ?>
							</a> 
						<?php endif; ?>
					</div>
					<div class="bloc--50">
						<p class="txt txt--stockDesc"><?php echo $desc ?></p>
						<?php if( have_rows('truck_features') ): ?>
							<ul class="list list--stock">
								<?php  while( have_rows('truck_features') ): the_row(); ?>
									<li class="item item--stock"><?php the_sub_field('truck_feat'); ?></li>
								<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
				<?php endwhile; ?>
				</div> <!-- END .inStock__item -->
			
			<?php endif; ?>			
			
		</section> <!-- END .inStock -->
	</article>

	<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>