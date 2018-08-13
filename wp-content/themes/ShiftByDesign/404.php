<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Bootstrap_4
 */

get_header(); ?>

<?php
	$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
?>

	<div class="container">
		<div class="row">

            <div class="col-md-12 wp-bp-content-width">

				<div id="primary" class="content-area wp-bp-404">
					<main id="main" class="site-main">

						<div class="card mt-3r">
							<div class="card-body">
								<section class="error-404 not-found">
									<header class="page-header">
										<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wp-bootstrap-4' ); ?></h1>
									</header><!-- .page-header -->

									<div class="page-content">
										<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'wp-bootstrap-4' ); ?></p>
                                    </div><!-- .page-content -->
								</section><!-- .error-404 -->
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->

					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
			<!-- /.col-md-8 -->

		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
<?php
get_footer();
