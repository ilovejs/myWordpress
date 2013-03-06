<html xmlns="http://wwww.w3.org/1999/xhtml" <?php language_attributes();?>>
	<head>
		<meta http-equiv="Content-Type" content=<?php bloginfo('html_type');?> charset=<?php bloginfo('charset');?>/>
		<title><?php bloginfo('name');?></title>
		<link rel="stylesheet" href=<?php bloginfo('stylesheet_url');?> type="text/css" media="screen"/>
	</head>
	<body>
		<div id='wrap'>
			<div id="header">
				<h1><a href="<?php echo get_option('home');?>/"> <?php bloginfo('name');?></a></h1>
				<div class="tagline"><?php bloginfo('description');?></div>
			</div>
			<!--main-->
			<?php if(have_posts()):?>
				<?php while(have_posts()): the_post()?>
					<div class="post_snippet">
					<h2><a href="<?php the_permalink();?>" title="Permanent link to <?php the_title_attribute();?>">
						<?php the_title();?></a></h2>
					<?php the_content('Continue Reading...');?>
					</div>
				<?php endwhile;?>
				<p><?php previous_posts_link('Previous Entries');?><?php next_posts_link('Older Entries');?><p>
			<?php else: ?>
				<h2>Sorry but we could not find wht you were looking for. But dont' give up. Keep at it.</h2>
			<?php endif;?>
			<!--end main-->
			<!--footer-->
			<div id="footer">
				<p><?php bloginfo('name');?> is proundly powered by <a href="http://www.wordpress.com">wordpress</a> | <a href="<?php bloginfo('rss2_url');?>">Full Post Rss</a>
					and <a href="<?php bloginfo('comments_rss2_url');?>">Comments Rss</a>.</p>
			</div>
		</div>
	</body>
</html>