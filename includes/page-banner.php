<?php 
// banner visual vars

$banner_overlay_color = get_field('banner_overlay_color');
$hero_image = get_field('hero_image');
$video_poster = get_field('video_poster');
$hd_video_stream = get_field('hd_video_stream');
$sd_video_stream = get_field('sd_video_stream');
$lr_video_stream = get_field('lr_video_stream');
$local_mp4 = get_field('local_mp4');
$local_webm = get_field('local_web');
$video_loop = get_field('video_loop');
$border_color = get_field('border_color');

// banner link + header vars

$banner_title = get_field('banner_title');
$banner_button_text = get_field('banner_button_text');
$banner_button_internal_link = get_field('banner_button_internal_link');
$banner_button_external_link = get_field('banner_button_external_link');
$banner_sublink_text = get_field('banner_sublink_text');
$banner_sublink_internal = get_field('banner_sublink');
$banner_sublink_external = get_field('banner_sublink_external');
$banner_shortcode = get_field('banner_shortcode');
$banner_copy_text = get_field('banner_copy');
$button_target = get_field('button_target');
$sublink_target = get_field('sublink_target');

// banner markup vars

$banner_header = '<h1 class="page-header">' . $banner_title . '</h1>';
$banner_button = '<a href="' . $banner_button_internal_link .'" class="banner-button" target="' . $button_target . '">' . $banner_button_text . '</a>';
$banner_button_external = '<a href="' . $banner_button_external_link . '" class="banner-button" target="' . $button_target . '">' . $banner_button_text . '</a>';
$banner_internal_sublink = '<a href="' . $banner_sublink_internal . '" class="banner-link" target="' . $sublink_target . '">' . $banner_sublink_text . '</a>';
$banner_external_sublink = '<a href="' . $banner_sublink_external . '" class="banner-link" target="' . $sublink_target . '">' . $banner_sublink_text . '</a>';
$banner_content_align = get_field('banner_content_align');
$banner_copy = '<div class="banner-copy">' . $banner_copy_text . '</div>';

if ( $hero_image && !$hd_video_stream && !$sd_video_stream && !$lr_video_stream && !$local_mp4 && !$local_webm ) :

?>

<div class="page-banner" style="background-color:<?php echo $border_color; ?>; background-image:url('<?php echo $hero_image; ?>')">
	<?php if ( $banner_overlay_color ) : ?><div class="banner-overlay" style="background-color:<?php echo $banner_overlay_color; ?>"></div><?php endif; ?>
	<div class="banner-content <?php echo $banner_content_align; ?>">
	<?php

	if ( $banner_title ) :

		echo $banner_header;

	endif;

	if ( $banner_button_text ) :

		if ( $banner_button_internal_link ) :

			echo $banner_button;

			if ( $banner_sublink_internal ) :

				echo $banner_internal_sublink;

			elseif ( $banner_sublink_external ) :

				echo $banner_external_sublink;

			endif;

		elseif ( $banner_button_external_link ) :

			echo $banner_button_external;

			if ( $banner_sublink_internal ) :

				echo $banner_internal_sublink;

			elseif ( $banner_sublink_external ) :

				echo $banner_external_sublink;

			endif;

		endif;

	endif;

	if ( $banner_shortcode ) :

		echo do_shortcode( $banner_shortcode );

	endif;

	if ( $banner_copy ) :

		echo $banner_copy;

	endif;

	echo "</div>";

	?>

</div>

<?php

	if ( !is_front_page() ) :

		$content_blocks = get_field('content_blocks');

		echo '<div class="sub-nav"><ul class="sub-nav-list">';

		foreach ( $content_blocks as $post ) : setup_postdata( $post );

			echo '<li class="sub-nav-item"><a class="sub-nav-link" href="#' . $post->post_name . '">' . $post->post_title . '<span class="bar"></span></a></li>';

		endforeach;

		echo '</ul></div>';

		wp_reset_postdata();

	endif;

elseif ( $hd_video_stream || $sd_video_stream || $lr_video_stream || $local_mp4 || $local_webm ) :

?>

<div class="page-banner video" style="background:url('<?php echo $video_poster; ?>') center center no-repeat; background-size:cover;">
	<video id="video" autoplay <?php if ( $video_loop == 'yes' ) : ?>loop="true" <?php endif; if ( $video_poster ) : ?>poster="<?php echo $video_poster; ?>"<?php endif; ?> width="1280" height="720">
	    <?php if ( $hd_video_stream ) : ?><source src="<?php echo $hd_video_stream; ?>" type="video/mp4"><?php endif; ?>
	    <?php if ( $sd_video_stream ) : ?><source src="<?php echo $sd_video_stream; ?>" type="video/mp4"><?php endif; ?>
	    <?php if ( $lr_video_stream ) : ?><source src="<?php echo $lr_video_stream; ?>" type="video/mp4"><?php endif; ?>
	    <?php if ( $local_mp4 ) : ?><source src="<?php echo $local_mp4; ?>" type="video/mp4"><?php endif; ?>
	    <?php if ( $local_webm ) : ?><source src="<?php echo $local_webm; ?>" type="video/webm"><?php endif; ?>
	    <!--Your browser does not support the video tag.-->
	    <?php if ( $video_poster ) : ?><div class="banner-image" style="background:url('<?php echo $video_poster; ?>') center center no-repeat; background-size:cover;"></div><?php endif; ?>
	</video>
	<?php if ( $banner_overlay_color ) : ?><div class="banner-overlay" style="background:<?php echo $banner_overlay_color; ?>"></div><?php endif; ?>
	<div class="banner-content <?php echo $banner_content_align; ?>">
	<?php

	if ( $banner_title ) :

		echo $banner_header;

	endif;

	if ( $banner_button_text ) :

		if ( $banner_button_internal_link ) :

			echo $banner_button;

			if ( $banner_sublink_internal ) :

				echo $banner_internal_sublink;

			elseif ( $banner_sublink_external ) :

				echo $banner_external_sublink;

			endif;

		elseif ( $banner_button_external_link ) :

			echo $banner_button_external;

			if ( $banner_sublink_internal ) :

				echo $banner_internal_sublink;

			elseif ( $banner_sublink_external ) :

				echo $banner_external_sublink;

			endif;

		endif;

	endif;

	if ( $banner_shortcode ) :

		echo do_shortcode( $banner_shortcode );

	endif; 

	if ( $banner_copy ) :

		echo $banner_copy;

	endif;

	echo "</div>";

	?>

</div>
<?php

	if ( !is_front_page() ) :

		$content_blocks = get_field('content_blocks');

		echo '<div class="sub-nav"><ul class="sub-nav-list">';

		foreach ( $content_blocks as $post ) : setup_postdata( $post );

			echo '<li class="sub-nav-item"><a class="sub-nav-link" href="#' . $post->post_name . '">' . $post->post_title . '<span class="bar"></span></a></li>';

		endforeach;

		echo '</ul></div>';

		wp_reset_postdata();

	endif;

endif;

?>