<?php
	$type = get_sub_field('type');
	
?>
<div class="module blog-slider">
	<div class="inner">
		<button>
prev
		</button>
		<div class="grid-container">
			<div class="grid-x grid-padding-x align-middle">
				<div class="cell small-12">
					
					<?php if($type == 'single-post'):
						$blog_post = get_sub_field('blog_post');

						$args = array(  
						'post_type' => 'post',
						'post_status' => 'publish',
						'posts_per_page' => 1,
						'p' => $blog_post->ID
					);
					
					$loop = new WP_Query( $args ); 
					
					if ( $loop->have_posts() ) : 
						
						while ( $loop->have_posts() ) : $loop->the_post();
						
							get_template_part('template-parts/loop', 'post-slider');
					
						endwhile;
					
					endif;
					wp_reset_postdata(); 

					else: 	
								
						$args = array(  
							'post_type' => 'post',
							'post_status' => 'publish',
							'posts_per_page' => 3,
						);
						
						$loop = new WP_Query( $args ); 
						
						if ( $loop->have_posts() ) : 
							
							while ( $loop->have_posts() ) : $loop->the_post();
							
								get_template_part('template-parts/loop', 'post-slider');
	
							endwhile;
	
						endif;
						wp_reset_postdata(); 
						
					endif;?>

	
				</div>
			</div>
		</div>
		<button>
next
		</button>
	</div>
</div>

