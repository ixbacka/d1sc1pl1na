<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <!-- 33 KB -->
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	<?php   wp_head(); ?>
</head>

<body <?php body_class(); ?> >


	<div class="fotorama" data-width="40%" data-ratio="800/600" data-minwidth="480" data-height="100%" data-maxwidth="100%" data-fit="cover" data-transition="crossfade"  data-autoplay="10000" data-loop="true"  data-arrows="false"  data-swipe="false" data-nav="false">
						<?php
							// Start the loop.
							if ( have_posts() ) : while ( have_posts() ) : the_post();
						        //the_content();
								$media = get_attached_media( 'video' );
								//print_r($media);
								$id = get_the_ID()+1;
								$src = $media[$id]->guid;
								?> 
								<div id="vidplayer">
									<video autoplay loop muted id="video-background">
									  <source src="<?php echo $src; ?>" type="video/mp4">
									  Your browser does not support the video tag.
									</video>
								</div>
 						<?php   endwhile; endif; ?>
					</div>
					<div class="name" onscroll="myFunction()">
					<?php
						if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a  href="mailto:info@disciplinadisciplina.com"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a  href="mailto:info@disciplinadisciplina.com"><?php bloginfo( 'name' ); ?></a></p>
						<?php endif; ?>
					</div>
					<?php
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<div class="description"><p class="site-description"><?php echo $description; ?></p>
							<?php get_footer(); ?>
						</div> 
					<?php endif;?>
				
	<script type="text/javascript">

		$('.name h1 a').one('mouseover',function() {
			$(".description").fadeIn();
			$(".site-description").animate({marginTop:"-=180%"},3000);
			// $(this).css('cursor', 'default');
			// $(this).css('pointer-events', 'none');
			// preventClick = true;
			return false;
		});
	</script>
</body>
</html>