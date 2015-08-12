	<div class="main__content__sidebar">
		<figure>
			<?php echo get_avatar(get_the_author_meta("user_email" )); ?>
				<figcaption><?php the_author(); ?></figcaption>
			</img>
		</figure>

		<?php if (is_active_sidebar('sidebar-curso-wp' )): ?>
			<?php dynamic_sidebar('sidebar-curso-wp' ); ?>
		<?php endif; ?>
			
	</div>