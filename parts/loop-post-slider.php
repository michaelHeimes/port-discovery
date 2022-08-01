<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">	

	<div class="outline">

		<div class="grid-x grid-padding-x">
			<div class="left cell small-12 tablet-6">
				<div class="thumb-wrap">
					<?php the_post_thumbnail('full'); ?>
				</div>
			</div>
			<div class="right call small-12 tablet-6">	
				<header class="article-header">	
					<?php get_template_part( 'parts/content', 'byline' ); ?>
					<h2 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h2>
				</header> <!-- end article header -->
								
				<section class="entry-content" itemprop="text">
					<?php the_excerpt(); ?>
				</section> <!-- end article section -->
									
				<footer class="article-footer">
					<a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
						read more
					</a>
				</footer> <!-- end article footer -->
			</div>
		</div>

</article> <!-- end article -->