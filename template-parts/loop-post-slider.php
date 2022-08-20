<article id="post-<?php the_ID(); ?>" <?php post_class('swiper-slide'); ?> role="article">
	<div class="outline">
		<div class="grid-x grid-margin-x align-middle">
			<div class="left cell small-12 tablet-6">
				<div class="thumb-wrap">
					<?php the_post_thumbnail('full'); ?>
				</div>
			</div>
			<div class="right cell small-12 tablet-6">	
				<header class="article-header">	
					<?php get_template_part( 'template-parts/content', 'byline' ); ?>
					<h2 class="entry-title single-title h4" itemprop="headline"><?php the_title(); ?></h2>
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