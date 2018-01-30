<div id="blog-header">
  <div class="site-width">
  	<h2><?php the_date(); ?></h2>
    <?php the_title('<h1>', '</h1>'); ?>
    By <em><?php the_author(); ?></em>
  </div>
</div>

<?php if (has_post_thumbnail()) { ?>
<div id="featured-image-background"></div>
<?php } ?>

<div class="site-width">
	<?php if (has_post_thumbnail()) { ?>
    <div id="featured-image"><?php the_post_thumbnail(); ?></div>
  <?php } ?>

	<?php the_content(); ?>

	<?php
  // Previous/next post navigation.
  $next_post = get_next_post();
  $prev_post = get_previous_post();

  FG_post_pagination(array(
    'next_text' => __($next_post->post_title),
    'prev_text' => __($prev_post->post_title)
  ));
  ?>
</div>

<?php if (has_post_thumbnail()) { ?>
	<script type="text/javascript">
		$(window).on('resize',function() {
		  var bgHeight = $('#blog-header').outerHeight() + $('#featured-image').outerHeight() + parseInt($('.blog > .site-width').css('padding-top'));
	  	$('#featured-image-background').height(bgHeight);
		});

	  $(document).ready(function() { $(window).trigger('resize'); });
	</script>
<?php } ?>