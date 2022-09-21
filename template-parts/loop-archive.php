<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
if( is_archive() ) {
	$term_obj = get_queried_object();
}
?>

<?php get_template_part('template-parts/modules/banner');?>

<?php			
if( is_home() ):
	$args = array(  
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 1,
		'cat' => 27,
	);
	
	$loop = new WP_Query( $args ); 
	
	if ( $loop->have_posts() ) : 
		
		while ( $loop->have_posts() ) : $loop->the_post();
		
		$featured_post_id = $post->ID;
		
		?>
		
		<section class="featured-post purple-bg">
			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">	
				<div class="grid-container">
					<div class="grid-x grid-padding-x">
						<div class="left cell small-12 tablet-6">
							<?php 
								$post_cats = get_the_category();
								if( !empty($post_cats) ):
							
							?>
							<div class="cats">
								<div class="grid-x grid-padding-x">
									<?php 
										$color_theme = '';
										foreach($post_cats as $post_cat):
											if($post_cat->name !== 'Featured'):
											$color_theme = get_field('color_theme', $post_cat);
									?>
										<div class="btn-wrap cell shrink">
											<a class="button small cat-btn <?php echo $color_theme;?>-bg" href="<?php echo get_category_link($post_cat->term_id);?>"><?php echo $post_cat->name;?></a>
										</div>
									<?php endif; endforeach;?>
								</div>
							</div>
							<?php endif;?>
							<h2 class="h3"><?php the_title();?></h2>
							<div class="btn-wrap">
								<a class="button <?php echo $color_theme;?>-bg" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
									read more
								</a>
							</div>
						</div>
						<div class="right cell small-12 tablet-6">
							<div class="image-wrap">
								<?php echo get_the_post_thumbnail($post->ID, 'featured-post-thumb' );?>
							</div>
						</div>
					</div>
				</div>
			</article>
		</section>
		
		<?php
		endwhile;
	
	endif;
	wp_reset_postdata(); 
endif;
?>

<section class="post-cat-nav">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="all-link-wrap cell small-12 tablet-6">
				<button class="button grid-x align-justify align-center" type="button" data-toggle="post-cat-nav">
					<span>All Categories</span>
					<svg xmlns="http://www.w3.org/2000/svg" width="14.803" height="8.184" viewBox="0 0 14.803 8.184">
					  <path id="Path_141" data-name="Path 141" d="M3771.071-1035.3l6.658,6.091,6.8-6.091" transform="translate(-3770.396 1036.042)" fill="none" stroke="#3D1E65" stroke-width="2"/>
					</svg>

				</button>
			</div>
		</div>
	</div>
	
	<div class="dropdown-pane" id="post-cat-nav" data-dropdown data-auto-focus="true">
	<?php 
						
		$cat_args = array(
			'hide_empty' => true,
			'exclude' => array(27)
		);
		
		$categories = get_categories($cat_args);
		if( !empty($categories) ):?>
		<nav>
		<ul class="menu horizontal">
		<?php foreach($categories as $category):?>
			<li>
				<a href="<?php echo get_category_link($category->term_id);?>">
					<?php echo $category->name;?>
				</a>
			</li>
		<?php endforeach;?>
		</ul>
		</nav>
		<?php endif;?>

	</div>
</section>


<section class="post-cards-wrap display-on-load" style="visibility: hidden;">
	<div class="grid-container">
		<div class="grid-x grid-padding-x isotope">
			<?php		
			if( is_home() ) {
				$args = array(  
					'post_type' => 'post',
					'post_status' => 'publish',
					'posts_per_page' => -1,
					'post__not_in' => array($featured_post_id),
				);			
			} else {
				
				$args = array(  
					'post_type' => 'post',
					'post_status' => 'publish',
					'posts_per_page' => -1,
					'cat' => get_queried_object_id()
				);						
			}
			
			$loop = new WP_Query( $args ); 
			
			if ( $loop->have_posts() ) : 
				
				while ( $loop->have_posts() ) : $loop->the_post();?>
				
					<article id="post-<?php the_ID(); ?>" <?php post_class('cell small-12 tablet-6'); ?> role="article">			
						<div class="inner">
							<?php 
								$post_cats = get_the_category();
								if( !empty($post_cats) ):
							?>
							<div class="cats">
								<div class="grid-x grid-padding-x">
									<?php 
										$color_theme = '';
										foreach($post_cats as $post_cat):
											if($post_cat->name !== 'Featured'):
											$color_theme = get_field('color_theme', $post_cat);
									?>
										<div class="btn-wrap cell shrink">
											<a class="button small cat-btn <?php echo $color_theme;?>-bg" href="<?php echo get_category_link($post_cat->term_id);?>"><?php echo $post_cat->name;?></a>
										</div>
									<?php endif; endforeach;?>
								</div>
							</div>
							<?php endif;?>
							<a class="permalink" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
								<?php if (has_post_thumbnail( $post->ID ) ):?>
								<div class="image-wrap">
									<?php echo get_the_post_thumbnail($post->ID, 'post-card' );?>
								</div>
								<?php endif;?>
								<h2 class="h3"><?php the_title();?></h2>
								<div class="excerpt">
									<?php the_excerpt();?>
								</div>
								<div class="h7">
									Read More
								</div>
							</a>

						</div>
					</article>
					
				<?php
				endwhile;
			endif;
			wp_reset_postdata(); 
			?>
		</div>
		<div class="lm-btn-wrap text-center">
			<button class="button style-purple-outline" id="load-more"> Load More</button>
		</div>
	</div>
</section>
