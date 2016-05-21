<div class="content">

  <?php

  $content_blocks = get_field('content_blocks');

  if ( $content_blocks ) :

  	foreach ( $content_blocks as $post ) : setup_postdata( $post );

  		$border_color = get_field('border_color');

  ?>


    <div class="post" id="<?php echo $post->post_name; ?>-w">

    	<?php if ( $border_color ) : ?><div class="post-border" style="background:<?php echo $border_color; ?>"></div><?php endif; ?>

    	<?php get_template_part('includes/page', 'banner'); ?>

    	<?php if ( $post->post_content != '' ) : ?><div class="content-wrapper"><?php the_content(); ?></div><?php endif; ?>

    </div>

  <?php

  		endforeach;

  	endif;

  	wp_reset_postdata()

  ?>

</div>