	<div id="sidebar">
		<ul>
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) :
?>
<?
 else : ?>

			<li class="widget_categories"><h2>Categories</h2>
				<ul>
				<?php wp_list_cats('sort_column=name&optioncount=1'); ?>
				</ul>
			</li>
			
			<li class="widget_archives"><h2>Archives</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>

<?php endif; ?>
		</ul>
	</div>
