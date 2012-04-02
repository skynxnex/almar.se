<?php get_header(); ?>
  <div id="content">
  
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
    <div class="post" id="post-<?php the_ID(); ?>">
	  <div class="post-title">
	  <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
		 <span class="mini-add-comment"><a href="#respond">Add comments</a></span> 
	<span><?php if(function_exists('the_views')) { the_views(); } ?></span>
    <span><p><center><?php if(function_exists('the_ratings')) { the_ratings(); } ?></center></p></span>
	  </div>
	  <div class="entry">
		<?php the_content('Read the rest of this entry &raquo;'); ?>
		<div class="posted">
					Posted on <?php the_time('F jS Y') ?> in <?php the_category(', ') ?> <?php edit_post_link('Edit', '', ''); ?></p>				
				 </div>
	  </div>	
      <div>
      </div>	
		<?php comments_template(); ?>
			<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>
	</div><!--/post -->

  </div><!--/content -->

<?php get_sidebar(); ?>
  
<?php get_footer(); ?>

