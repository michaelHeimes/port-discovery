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
								<?php echo get_the_post_thumbnail($post->ID, 'large' );?>
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
	
	<nav class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				<a class="h7" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">all categories</a>
			</div>
		</div>
		<ul class="grid-x grid-padding-x small-up-2 tablet-up-4">
			<?php 
			$color_theme = '';
						
			$cat_args = array(
				'hide_empty' => true,
				'exclude' => array(27)
			);
			
			$categories = get_categories($cat_args);
			foreach($categories as $category):
				$color_theme = get_field('color_theme', $category);
				$icon = get_field('icon', $category);				
			?>
				<div class="cell<?php if( is_archive() && $term_obj->term_id == $category->term_id ):?> is-active<?php endif;?>">
					<div class="inner outlined <?php if( is_archive() && $term_obj->term_id == $category->term_id ): echo $color_theme;?>-bg<?php endif;?>">
						<a class="text-center grid-x flex-dir-column align-middle <?php if( is_archive() && $term_obj->term_id == $category->term_id ) { echo 'color-white'; } else { echo 'color-' . $color_theme; }?>" href="<?php echo get_category_link($category->term_id);?>">
							<div class="icon-wrap circle <?php if( is_archive() && $term_obj->term_id == $category->term_id ) { echo 'white-bg';} else { echo $color_theme . '-bg'; };?>">
								<img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
							</div>
							<?php echo $category->name;?>
						</a>
					</div>
			   </div>
			<?php endforeach;?>
		</ul>
	</nav>
</section>


<section class="post-cards-wrap">
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
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
								<div class="image-wrap">
									<?php echo get_the_post_thumbnail($post->ID, 'large' );?>
								</div>
								<h2 class="h3"><?php the_title();?></h2>
								<div class="excerpt">
									<?php the_excerpt();?>
								</div>
								<div class="h7">
									
										read more
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
			<button class="button purple-outline" id="load-more"> Load More</button>
		</div>
	</div>
</section>
