<?php get_header(); ?>
  <div id="content">
  
  <?php if (have_posts()) : ?>
  
  	<?php while (have_posts()) : the_post(); ?>
  
    <div class="post" id="post-<?php the_ID(); ?>">
	  <div class="post-title">
	  <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<span class="post-comments"><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></span>
	  </div>
	  <div class="entry">
		<?php the_content('Click here to read more.. &raquo;'); ?>
	  </div>
      <div class="posted">
					Posted on <?php the_time('F jS Y') ?> in <?php the_category(', ') ?> <?php edit_post_link('Edit', '', ''); ?>			
				 </div>
	</div><!--/post -->
     <div>
      </div>
	
	<?php endwhile; ?>
	
	<div class="navigation">
	  <span class="previous-entries"><?php next_posts_link('Previous Entries') ?></span> <span class="next-entries"><?php previous_posts_link('Next Entries') ?></span>
	</div>
	
	<?php else : ?>
	
		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
		
  <?php endif; ?>
	
  </div><!--Content End -->
  
<?php get_sidebar(); ?>

<?php get_footer(); ?>
