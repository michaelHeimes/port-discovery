<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Port_Discovery
 */

get_header();
?>

	<main id="primary" class="site-main">
                <section class="foo">
                        <div class="item">
                                Item
                        </div>
                        <div class="info">
                                Info
                        </div>
                        <div class="item">
                                Item
                        </div>
                        <div class="info">
                                Info
                        </div>
                        <div class="item">
                                Item
                        </div>
                        <div class="info">
                                Info
                        </div>
                        <div class="item last">
                                Item
                        </div>
                        <div class="info">
                                Info
                        </div>
                </section>
                
                <style>
                        section.foo {
                            margin: 20px auto;
                            width: 940px;
                            text-align: center;
                            font-weight: bold
                        }
                        
                        .item {
                            width: 10%;
                            float: left;
                            background-color: #95a5a6;
                            border: 1px solid #7f8c8d;
                            height: 200px;
                            line-height: 200px;
                            cursor: pointer
                        }
                        
                        .active {
                            background-color: #2c3e50;
                            border-left: 15px solid #34495e;
                            color: #ecf0f1
                        }
                        
                        .info {
                            width: 0;
                            float: left;
                            background-color: #ecf0f1;
                            color: #222;
                            height: 200px;
                            display: none
                        }
                </style>
                        
        <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

            <?php
            while ( have_posts() ) :
	            the_post();
    
	            get_template_part( 'template-parts/loop', 'modules' );
    
            endwhile; // End of the loop.
            ?>
            
        </article>

	</main><!-- #main -->

<?php
get_footer();
