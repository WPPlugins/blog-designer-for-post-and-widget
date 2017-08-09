<?php
/**
 * Settings Page
 *
 * @package WP Stylish Post And Widgets
 * @since 1.0.4
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;
?>

<div class="wrap wpspw-settings">

<h2><?php _e( 'Blog Designer Shortcode', 'blog-designer-for-post-and-widget' ); ?></h2><br />
	
	<!-- General Settings Starts -->
	<div id="wpspw-general-sett" class="post-box-container wpspw-general-sett">
		<div class="metabox-holder">
			<div class="meta-box-sortables ui-sortable">
				<div id="general" class="postbox">

					<button class="handlediv button-link" type="button"><span class="toggle-indicator"></span></button>

						<!-- Settings box title -->
						<h3 class="hndle">
							<span><?php _e( 'Blog Designer', 'blog-designer-for-post-and-widget' ); ?></span>
						</h3>
						
						<div class="inside">
						
						<table class="form-table wpspw-general-sett-tbl">
							<tbody>
								<tr>
									<th scope="row">
										<label for="wpspw-pro-default-img"><?php _e('Recent Blog Posts Slider/Carousel', 'blog-designer-for-post-and-widget'); ?>:</label>
									</th>
									<td>
										<code>[wpspw_recent_post_slider]</code>
									</td>
								</tr>
								<tr>
									<th>
										<label for="wpspw-pro-default-img"><?php _e('Post with Blog Post Grid View', 'blog-designer-for-post-and-widget'); ?>:</label>
									</th>
									<td>
										<code>[wpspw_post]</code>
									</td>
								</tr>
								<tr>
									<th>
										<label for="wpspw-pro-default-img"><?php _e('How it works', 'blog-designer-for-post-and-widget'); ?>:</label>
									</th>
									<td>
										<ul>
											<li><?php _e('1. Create a page like blog or our blog or my blog.', 'blog-designer-for-post-and-widget'); ?></li>
											<li><?php _e('2. Put above shortcode.', 'blog-designer-for-post-and-widget'); ?></li>
										</ul>
									</td>
								</tr>
								<tr>
									<th>
										<label for="wpspw-pro-default-img"><?php _e('Complete shortcode example', 'blog-designer-for-post-and-widget'); ?>:</label>
									</th>
									<td>
										<a href="https://www.wponlinesupport.com/plugins-documentation/documentblog-designer-post-and-widget/#section-4" target="_blank"><?php _e('Please click here', 'blog-designer-for-post-and-widget'); ?></a>
									</td>
								</tr>
							</tbody>
						 </table>
					</div><!-- .inside -->
				</div><!-- #general -->
			</div><!-- .meta-box-sortables ui-sortable -->
		</div><!-- .metabox-holder -->
	</div><!-- #wpspw-general-sett -->
	<!-- General Settings Ends -->