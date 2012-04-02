<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!-- <?php bloginfo('stylesheet_directory'); ?>/ -->
<script language="javascript" type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js.js"></script>
<script language="javascript" type="text/javascript">	
	if(f)
	{
		write_css('<?php bloginfo('stylesheet_directory'); ?>');
	}
</script>
<?php wp_head(); ?>
<!--[if IE]>
<style type="text/css">
#menu_search_box input.s{
	width:115px;
}
</style>
<![endif]-->
</head>

<body>
<center>
<div id="page">

<div id="header">
	<div id="header_top">
		<div id="header_title">
			<?php bloginfo('name'); ?> | <span><?php bloginfo('description'); ?></span>
		</div>
	</div>
	<div id="header_end">
		<div id="menu">
			<div id="menu_pad">
				<div id="menu_items">
					&nbsp;&nbsp;<div><a href="<?php bloginfo('home'); ?>"><span>Home</span></a></div><div>&nbsp;&nbsp;|&nbsp;&nbsp;</div><?php $my_query = new WP_Query('post_type=page&orderby=name&order=ASC'); ?>

<?php while ($my_query->have_posts()) : $my_query->the_post(); 

if( $post->post_parent == 0 )
{?>
							
								<div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div><div>&nbsp;&nbsp;|&nbsp;&nbsp;</div>
							
<?php } endwhile; 
?>
				</div>
				<div id="menu_search_box">
					<form method="get" id="searchform" style="display:inline;" action="<?php bloginfo('home'); ?>/">
					<span>Search:&nbsp;</span>
					<input type="text" class="s" value="<?php the_search_query(); ?>" name="s" id="s" />&nbsp;
					<input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/images/go.gif" value="Submit" class="sub"   />
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="blog">
	<div id="blog_left">
		<?php get_sidebar(); ?>
	</div>
	<div id="blog_center">