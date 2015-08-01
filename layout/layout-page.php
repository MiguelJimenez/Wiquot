<body>
	<div class="main">
		<h2>Esto es una página independiente</h2>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- post -->
		<?php the_content(); ?>
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>
		<?php include (TEMPLATEPATH.'/layout/nav-main.php'); ?>

		<section role='main'>
			<?php include (TEMPLATEPATH.'/layout/main-options.php'); ?>
			<?php include (TEMPLATEPATH.'/layout/main-tabs.php'); ?>
			<?php include (TEMPLATEPATH.'/layout/main-content-two-cols.php'); ?>
		</section>
	</div>
</body>
</html>