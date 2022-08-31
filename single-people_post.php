<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Port_Discovery
 */

get_header();
?>

	<main id="primary" class="site-main">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class($theme); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
				<section class="entry-content" itemprop="text">
					
					<?php
						$left_image = get_field('photo'); 
						$pronouns = get_field('pronouns');
						$title = get_field('title');
						$right_heading = get_the_title(); 
						$right_copy = get_field('bio_copy'); 
						
					?>
					<div class="module text-circle-image-and-text person-heading">
						<div class="grid-container">
							<div class="grid-x grid-padding-x align-top">
								<div class="cell small-12 tablet-4">
									<?php 
									$image = $left_image;
									if( !empty( $image ) ): ?>
									<div class="img-wrap circle-img-wrap">
										<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									</div>
									<?php endif; ?>
								</div>
								<div class="cell small-12 tablet-8">
									<div class="header">
									<?php if( !empty($right_heading) ):?>
										<h2 class="h4"><?php echo $right_heading;?></h2>
									<?php endif;?>
									<?php if( !empty($pronouns) ):?>
										<p><?php echo $pronouns;?></p>
									<?php endif;?>
									<?php if( !empty($title) ):?>
										<h6 class="color-amethyst"><b><?php echo $title;?></b></h6>
									<?php endif;?>
										<h6 class="color-amethyst">Port Discovery Children's Museum</h6>
									</div>
									<?php if( !empty($right_copy) ):?>
										<div class="bio-wrap"><?php echo $right_copy;?></div>
									<?php endif;?>
								</div>
							</div>
						</div>
					</div>
				
					<?php get_template_part( 'template-parts/loop', 'modules' ); ?>
					
					
				</section>
					
					<?php 
					$link = get_field('linkedin_url');
					if( $link ): 
						$full_name = $right_heading;
						$first_name = explode(' ',trim($full_name));
					?>
					<footer class="article-footer text-center">
						<div class="grid-container">
							<div class="grid-x grid-padding-x align-middle">
								<div class="cell small-12 tablet-8 tablet-offset-4">
									<a class="h5" href="<?php echo esc_url( $link ); ?>">
										<div class="grid-x grid-padding-x align-middle">
											<div class="cell shrink">
												<svg id="Group_382" data-name="Group 382" xmlns="http://www.w3.org/2000/svg" width="57" height="57" viewBox="0 0 57 57">
												  <circle id="Ellipse_137" data-name="Ellipse 137" cx="28.5" cy="28.5" r="28.5" fill="#9063cd"/>
												  <g id="Group_218" data-name="Group 218" transform="translate(16.021 15.004)">
													<path id="Path_5" data-name="Path 5" d="M25.109,14.924v9.092H19.845V15.539c0-2.119-.752-3.589-2.666-3.589a2.881,2.881,0,0,0-2.7,1.914,3.741,3.741,0,0,0-.171,1.3v8.852h-5.3s.068-14.389,0-15.859h5.264v2.256c0,.034-.034.034-.034.068h.034v-.068A5.23,5.23,0,0,1,19.025,7.78c3.486,0,6.084,2.256,6.084,7.143ZM3.474.5A2.763,2.763,0,0,0,.5,3.234,2.724,2.724,0,0,0,3.405,5.969h.034A2.744,2.744,0,0,0,6.413,3.234,2.715,2.715,0,0,0,3.474.5ZM.808,24.015H6.071V8.156H.808Zm0,0" transform="translate(-0.5 -0.5)" fill="#fff"/>
												  </g>
												</svg>
											</div>
											<div class="link-label cell auto text-left">connect with <?php echo $first_name[0];?></div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</footer>
					<?php endif;?>
					
			</article>
					
				<?php endwhile; else : ?>
				
					<?php get_template_part( 'template-parts/content', 'missing' ); ?>
	
		<?php endif; ?>

	</main><!-- #main -->

<?php
get_footer();
