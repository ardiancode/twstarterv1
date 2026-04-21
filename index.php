<?php
/**
 * The main template file
 *
 * @package YourThemeName
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
	<div class="container">
		<h1 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php bloginfo( 'name' ); ?>
			</a>
		</h1>
		<p class="site-description"><?php bloginfo( 'description' ); ?></p>

		<nav class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav>
	</div>
</header>

<main class="site-main">
	<div class="container">
		<?php if ( have_posts() ) : ?>

			<?php
			while ( have_posts() ) :
				the_post();
				?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2 class="entry-title">
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h2>

					<div class="entry-content">
						<?php the_excerpt(); ?>
					</div>
				</article>

			<?php endwhile; ?>

			<?php the_posts_pagination(); ?>

		<?php else : ?>

			<p><?php esc_html_e( 'No posts found.', 'yourthemename' ); ?></p>

		<?php endif; ?>
	</div>
</main>

<footer class="site-footer">
	<div class="container">
		<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></p>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
