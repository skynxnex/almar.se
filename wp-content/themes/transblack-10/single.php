<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="item_class">
					<div class="item_class_title">
						<div class="item_class_title_text">
							<div class="titles">
								<div class="top_title_top">Posted on <?php the_time('d-m-Y') ?></div>
								<div class="top_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></div>
								<div class="end_title">Filed Under (<?php the_category(', ') ?>) by <?php the_author() ?></div>
							</div>
							
						</div>
					</div>
					<div class="item_class_text">
						<?php the_content('Read the rest of this entry &raquo;'); ?>
					</div>
					<div class="item_class_panel">
						<div>
							<span class="panel_comm"><?php comments_popup_link('(0) Comments', '(1) Comment', '(%) Comments'); ?></span>&nbsp;&nbsp;&nbsp;
							<a href="<?php the_permalink() ?>" class="panel_read">Read More</a>&nbsp;&nbsp;&nbsp;
							<?php edit_post_link('Edit', '', ''); ?>
						</div>
					</div>
				</div>
	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<?php get_footer(); ?>
