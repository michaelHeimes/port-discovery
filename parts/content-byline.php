<?php
/**
 * The template part for displaying an author byline
 */
?>

<p class="byline">
	<?php
		$post_date = get_the_date('l, F dS, Y');
		if(get_field('alternative_author')) {
			$post_author = get_field('alternative_author');
		} else {
			$post_author = get_the_author();
		}
		echo $post_date . ' | By ' . $post_author;
	?>
</p>	
