<?php

$portfolio_title_option = get_post_meta( $post->ID, 'portfolio_title_meta_box_check', true ) ? get_post_meta( $post->ID, 'portfolio_title_meta_box_check', true ) : 'on';
$page_title_class = ( isset($portfolio_title_option) && ( 'on' === $portfolio_title_option ) ) ? 'page-title-shown' : 'page-title-hidden';

get_header();
?>

<div class="full-width-page page-portfolio-single <?php echo esc_attr($page_title_class); ?>">
    <div id="primary" class="content-area">

		<div id="content" class="site-content" role="main">

			<header class="entry-header entry-header-portfolio-single">

				<div class="row">
					<div class="large-10 large-centered columns">

						<?php while ( have_posts() ) : the_post(); ?>

                            <?php if ( (isset($portfolio_title_option)) && ($portfolio_title_option == "off") ) : ?>
                                <h1 class="entry-title portfolio_item_title"><?php the_title(); ?></h1>
                            <?php endif; ?>

						<?php endwhile; // end of the loop. ?>

					</div><!--.large-->
				</div><!--.row-->

			</header><!-- .entry-header -->

			<div class="entry-content entry-content-portfolio">

				<?php while ( have_posts() ) : the_post(); ?>
                	<?php the_content(); ?>
                <?php endwhile; // end of the loop. ?>

				<div class="row">
					<div class="portfolio_content_nav post-navigation">
                        <div class="large-8 large-centered columns">
    						<?php
    						$post_navigation = array(
    							'previous' => array(
    								'class' => 'previous',
    								'post' 	=> get_previous_post(),
    								'text'	=> 'Previous Reading'
    							),
    							'next' => array(
    								'class' => 'next',
    								'post' 	=> get_next_post(),
    								'text' 	=> 'Next Reading'
    							)
    						);

    						foreach( $post_navigation as $post_nav ) :
    						?>
    							<div class="large-6 medium-6 small-12 columns post-nav <?php echo wp_kses_post( $post_nav['class'] ); ?>-post-nav">
    								<?php if( !empty($post_nav['post']) ) { ?>
    									<a href="<?php echo esc_url(get_permalink($post_nav['post']->ID)); ?>" rel="prev">
    										<div class="nav-post-title">
    											<?php esc_html_e( $post_nav['text'], 'mr_tailor' ); ?>
    										</div>

    										<div class="previous-post-info">
    											<div class="entry-thumbnail">
    												<?php echo get_the_post_thumbnail( $post_nav['post']->ID, 'large' ); ?>
    												<span class="more-link"><?php esc_html_e('Continue reading', 'mr_tailor'); ?><span class="arrow-icon"></span></span>
    											</div>

    											<h2 class="post-title">
    												<?php echo $post_nav['post']->post_title; ?>
    											</h2>
    										</div>
    									</a>

    									<div class="post_header_date">
    										<?php echo get_the_date( 'F j, Y', $post_nav['post']->ID ); ?>
    									</div>

    									<div class="post_excerpt">
    										<p><?php echo get_the_excerpt( $post_nav['post']->ID ); ?></p>
    									</div>
    								<?php } ?>
    							</div>
    						<?php endforeach; ?>
                        </div>
					</div>
				</div>
			</div>

		</div><!-- #content .site-content -->
	</div>
</div>

<?php get_footer(); ?>
