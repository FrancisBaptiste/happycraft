<?php
#theme developed by Francis Baptiste

#get your typical Wordpress header stuff
get_header();
?>

<?php
	#start the main loop
	if ( have_posts() ) : while ( have_posts() ) : the_post();

	#get the url of the feature image set for the post
	#feature images are mandatory for this theme.
	#if one isn't set then the whole thing breaks
	$url = wp_get_attachment_url( get_post_thumbnail_id( get_the_id() ) );
	?>

	<div id="heroWrap" style="background-image: url(<?php echo $url; ?>)">
		<div id="heroTint"></div>
		<div id="heroTitle">
			<h1><?php the_title();?></h1>
			<h2>&mdash; <?php the_time("l, F j");?> &mdash;</h2>
		</div>
	</div>

	<div id="articleBody">
		<?php the_content(); ?>
	</div>


	<?php

	#add the comments section
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;

	?>

	<?php $i++; ?>
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


</body>
</html>