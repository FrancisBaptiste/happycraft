<?php
#theme developed by Francis Baptiste

#get your typical Wordpress header stuff
get_header();
?>



<div id="mainContent">
<?php
	#set an iterator and start the main loop
	$i = 0;
	if ( have_posts() ) : while ( have_posts() ) : the_post();

	#get the url of the feature image set for the post
	#feature images are mandatory for this theme.
	#if one isn't set then the whole thing breaks
	$url = wp_get_attachment_url( get_post_thumbnail_id( get_the_id() ) );

	#the the two most recent posts and give them a special style
	if($i < 2){
	?>

		<div class="halfScreen" style="background-image:url(<?php echo $url; ?>);">
			<div class="halfTint"></div>
			<div class="halfBorder"></div>
			<div class="halfTextBackground"></div>
			<div class="halfText">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
				<h3><a href="<?php the_permalink(); ?>">&mdash; <?php the_time("l, F j");?> &mdash;</a></h3>
			</div>
		</div>

	<?php

	#now set the styles for the rest of the posts
	}else{
	?>

		<div class="threeScreen" style="background-image:url(<?php echo $url; ?>);">
			<div class="threeTint"></div>
			<div class="threeBorder"></div>
			<div class="threeTextBackground"></div>
			<div class="threeText">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
				<h3><a href="<?php the_permalink(); ?>">&mdash; <?php the_time("l, F j");?> &mdash;</a></h3>
			</div>
		</div>

	<?php
	}

	?>



	<?php $i++; ?>
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

	<!-- end of loop -->

	<div id="newsletterWrapper">
		<p>Sign up for the newsletter</p>
		<div id="inputNewsletter">
			<input type="text" id="newsletterInput" />
			<div id="newsletterBtn">Submit</div>
		</div>
	</div>



</div><!-- end of mainContent -->

<script type="text/javascript">
$(function(){
	$(".halfScreen").mouseenter(function(){
		$(this).find('a').css('color', '#512e0c');
		$(this).find('.halfTextBackground').css('opacity', 1);
		$(this).find('.halfTint').css('opacity', 0.2);
	});
	$(".halfScreen").mouseleave(function(){
		$(this).find('a').css('color', '#FFF');
		$(this).find('.halfTextBackground').css('opacity', 0);
		$(this).find('.halfTint').css('opacity', 0.5);
	});
	$(".threeScreen").mouseenter(function(){
		$(this).find('a').css('color', '#512e0c');
		$(this).find('.threeTextBackground').css('opacity', 0.8);
		$(this).find('.threeTint').css('opacity', 0.2);
	});
	$(".threeScreen").mouseleave(function(){
		$(this).find('a').css('color', '#FFF');
		$(this).find('.threeTextBackground').css('opacity', 0);
		$(this).find('.threeTint').css('opacity', 0.5);
	});
});
</script>


</body>
</html>