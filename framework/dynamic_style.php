<?php
if( !isset($data) ){
	$data = gostore_get_theme_options();
}

update_option('ts_load_dynamic_style', 0);

$default_options = array(
				'ts_layout_fullwidth'								=> 0
				,'ts_logo_width'									=> "160"
				,'ts_device_logo_width'								=> "136"
				,'ts_product_rating_style'							=> 'fill'
				,'ts_custom_font_ttf'								=> array( 'url' => '' )
		);
		
foreach( $default_options as $option_name => $value ){
	if( isset($data[$option_name]) ){
		$default_options[$option_name] = $data[$option_name];
	}
}

extract($default_options);
		
$default_colors = array(

				'ts_main_content_background_color'							=> "#ffffff"
				,'ts_text_color'											=> "#707070"
				
				,'ts_input_text_color'										=> "#161616"
				,'ts_input_text_hover'										=> "#161616"
				,'ts_input_border_color'									=> "#d1d1d1"
				,'ts_input_border_hover'									=> "#161616"
				
				,'ts_link_color'											=> "#f50000"
				,'ts_link_color_hover'										=> "#f50000"
				
				,'ts_text_bold_color'										=> "#161616"
				,'ts_text_bold_hover'										=> "#f50000"
				
				,'ts_primary_color'											=> "#f50000"
				,'ts_text_color_in_bg_primary'								=> "#ffffff"
				
				,'ts_border_color'											=> "#e5e5e5"
				,'ts_border_product_color'									=> "#efefef"

				,'ts_button_text_color'										=> "#161616"
				,'ts_button_text_hover'										=> "#ffffff"
				,'ts_button_background_color'								=> "transparent"
				,'ts_button_background_hover'								=> "#161616"
				,'ts_button_border_color'									=> "#161616"
				,'ts_button_border_hover'									=> "#161616"
				
				,'ts_special_button_text_color'								=> "#f50000"
				
				// BREADCRUMB
				,'ts_breadcrumb_text_color'									=> "#707070"
				,'ts_breadcrumb_heading_color'								=> "#161616"
				,'ts_breadcrumb_link_color_hover'							=> "#f50000"
				,'ts_breadcrumb_background_color'							=> "#f6f9fc"
				
				,'ts_breadcrumb_img_text_color'								=> "#ffffff"
				,'ts_breadcrumb_img_heading_color'							=> "#ffffff"
				,'ts_breadcrumb_img_link_color_hover'						=> "#f1f1f1"
				
				// HEADER
				,'ts_header_notice_background_color'						=> "#f6f9fc"
				
				,'ts_middle_header_background_color'						=> "#131f35"
				,'ts_middle_header_text_color'								=> "#ffffff"
				,'ts_middle_header_text_hover'								=> "#f50000"
				
				,'ts_header_cart_number_color'								=> "#ffffff"
				,'ts_header_cart_number_bg_color'							=> "#f50000"
				
				,'ts_header_search_text_color'								=> "#707070"
				,'ts_header_search_placeholder_text'						=> "#999999"
				,'ts_header_search_background_color'						=> "#ffffff"
				,'ts_header_search_border_color'							=> "#ffffff"
				,'ts_header_search_line_color'								=> "#e5e5e5"
				,'ts_header_search_button_text_color'						=> "#161616"
				
				,'ts_bottom_header_background_color'						=> "#131f35"
				,'ts_bottom_header_border_color'							=> "#2b364a"
				,'ts_bottom_header_info_text_color'							=> "#a7a9ae"
				
				
				// MENU
				,'ts_menu_text_color'										=> "#ffffff"
				,'ts_menu_text_hover'										=> "#cdced1"

				,'ts_sub_menu_background_color'								=> "#ffffff"
				,'ts_sub_menu_text_color'									=> "#707070"
				,'ts_sub_menu_text_hover'									=> "#f50000"
				,'ts_sub_menu_heading_color'								=> "#161616"
				
				,'ts_vertical_headding_text_color'							=> "#ffffff"
				,'ts_vertical_headding_background_color'					=> "#131f35"
				,'ts_vertical_menu_background_color'						=> "#ffffff"
				,'ts_vertical_menu_border_color'							=> "#e5e5e5"
				,'ts_vertical_menu_text_color'								=> "#161616"
				,'ts_vertical_menu_text_hover'								=> "#161616"
				,'ts_vertical_sub_menu_text_color'							=> "#707070"
				,'ts_vertical_sub_menu_text_hover'							=> "#f50000"
				
				,'ts_header_mobile_background_color'						=> "#131f35"
				,'ts_header_mobile_text_color'								=> "#ffffff"
				,'ts_header_mobile_search_background_color'					=> "#ffffff"
				,'ts_header_mobile_search_border_color'						=> "#ffffff"
				,'ts_header_mobile_search_button_text_color'				=> "#161616"
				,'ts_header_mobile_cart_number_text_color'					=> "#ffffff"
				,'ts_header_mobile_cart_number_background_color'			=> "#f50000"
				
				,'ts_tab_menu_mobile_text_color'							=> "#ffffff"
				,'ts_tab_menu_mobile_text_hover'							=> "#ffffff"
				,'ts_tab_menu_mobile_background_color'						=> "#131f35"
				,'ts_tab_menu_mobile_background_hover'						=> "#1f2a3f"
				,'ts_menu_mobile_text_color'								=> "#161616"
				,'ts_menu_mobile_text_hover'								=> "#f50000"
				,'ts_menu_mobile_heading_color'								=> "#161616"
				,'ts_menu_mobile_background_color'							=> "#ffffff"
				,'ts_menu_mobile_border_color'								=> "#e5e5e5"
				,'ts_bottom_menu_mobile_text_color'							=> "#707070"
				,'ts_bottom_menu_mobile_background_color'					=> "#f6f9fc"
				
				// FOOTER
				,'ts_footer_background_color'								=> "#131f35"
				,'ts_footer_border_color'									=> "#2b364a"
				,'ts_footer_border_hover'									=> "#ffffff"
				,'ts_footer_text_color'										=> "#b7b9bc"
				,'ts_footer_text_hover'										=> "#f50000"
				,'ts_footer_heading_color'									=> "#ffffff"
				,'ts_footer_tags_background_color'							=> "#1a263b"

				// PRODUCT	
				,'ts_rating_color'											=> "#f9ac00"
				,'ts_rating_fill_color'										=> "#f9ac00"
				
				,'ts_product_name_text_color'								=> "#161616"
				,'ts_product_name_text_hover'								=> "#f50000"

				,'ts_product_button_thumbnail_text_color'					=> "#161616"
				,'ts_product_button_thumbnail_text_hover'					=> "#ffffff"
				,'ts_product_button_thumbnail_background_color'				=> "#ffffff"
				,'ts_product_button_thumbnail_background_hover'				=> "#161616"
				,'ts_product_button_thumbnail_tooltip_text_color'			=> "#161616"
				,'ts_product_button_thumbnail_tooltip_background_color'		=> "#ffffff"

				,'ts_product_sale_label_text_color'							=> "#ffffff"
				,'ts_product_sale_label_background_color'					=> "#39b54a"
				,'ts_product_new_label_text_color'							=> "#ffffff"
				,'ts_product_new_label_background_color'					=> "#0b5fb5"
				,'ts_product_feature_label_text_color'						=> "#ffffff"
				,'ts_product_feature_label_background_color'				=> "#f50000"
				,'ts_product_outstock_label_text_color'						=> "#ffffff"
				,'ts_product_outstock_label_background_color'				=> "#989898"

				,'ts_product_price_color'									=> "#000000"
				,'ts_product_del_price_color'								=> "#848484"
				,'ts_product_sale_price_color'								=> "#f50000"
				
);

$data = apply_filters('gostore_custom_style_data', $data);

foreach( $default_colors as $option_name => $default_color ){
	if( isset($data[$option_name]['rgba']) ){
		$default_colors[$option_name] = $data[$option_name]['rgba'];
	}
	else if( isset($data[$option_name]['color']) ){
		$default_colors[$option_name] = $data[$option_name]['color'];
	}
}

extract( $default_colors );

/* Parse font option. Ex: if option name is ts_body_font, we will have variables below:
* ts_body_font (font-family)
* ts_body_font_weight
* ts_body_font_style
* ts_body_font_size
* ts_body_font_line_height
* ts_body_font_letter_spacing
*/
$font_option_names = array(
							'ts_body_font',
							'ts_body_font_bold',
							'ts_heading_font',
							'ts_menu_font',
							'ts_menu_font_active',
							'ts_sub_menu_font',
							'ts_mobile_menu_font',
							);
$font_size_option_names = array( 
							'ts_h1_font', 
							'ts_h2_font', 
							'ts_h3_font', 
							'ts_h4_font', 
							'ts_h5_font', 
							'ts_h6_font',
							'ts_small_font',
							'ts_mini_font',
							'ts_button_font',
							'ts_body_ipad_font',
							'ts_menu_ipad_font',
							'ts_sub_menu_ipad_font',
							'ts_h1_ipad_font', 
							'ts_h2_ipad_font', 
							'ts_h3_ipad_font', 
							'ts_h4_ipad_font',
							'ts_h5_ipad_font',
							'ts_h6_ipad_font',
							'ts_h1_mobile_font', 
							'ts_h2_mobile_font', 
							'ts_h3_mobile_font', 
							'ts_h4_mobile_font',
							'ts_h5_mobile_font',
							'ts_h6_mobile_font',
							);
$font_option_names = array_merge($font_option_names, $font_size_option_names);
foreach( $font_option_names as $option_name ){
	$default = array(
		$option_name 						=> 'inherit'
		,$option_name . '_weight' 			=> 'normal'
		,$option_name . '_style' 			=> 'normal'
		,$option_name . '_size' 			=> 'inherit'
		,$option_name . '_line_height' 		=> 'inherit'
		,$option_name . '_letter_spacing' 	=> 'inherit'
	);
	if( is_array($data[$option_name]) ){
		if( !empty($data[$option_name]['font-family']) ){
			$default[$option_name] = $data[$option_name]['font-family'];
		}
		if( !empty($data[$option_name]['font-weight']) ){
			$default[$option_name . '_weight'] = $data[$option_name]['font-weight'];
		}
		if( !empty($data[$option_name]['font-style']) ){
			$default[$option_name . '_style'] = $data[$option_name]['font-style'];
		}
		if( !empty($data[$option_name]['font-size']) ){
			$default[$option_name . '_size'] = $data[$option_name]['font-size'];
		}
		if( !empty($data[$option_name]['line-height']) ){
			$default[$option_name . '_line_height'] = $data[$option_name]['line-height'];
		}
		if( !empty($data[$option_name]['letter-spacing']) ){
			$default[$option_name . '_letter_spacing'] = $data[$option_name]['letter-spacing'];
		}
	}
	extract( $default );
}
?>	
	
	/*
	1. FONT FAMILY
	2. FONT SIZE
	3. COLORS
	4. RESPONSIVE
	5. FULLWIDTH LAYOUT
	*/
	header .logo img{
		width: <?php echo absint($ts_device_logo_width); ?>px;
	}
	@media only screen and (min-width: 1200px){
		header .logo img{
			width: <?php echo absint($ts_logo_width); ?>px;
		}
	}
	<?php if( isset($data['ts_product_rating_style']) && $data['ts_product_rating_style'] == 'fill' ): ?>
		.ts-testimonial-wrapper .rating span:before,
		blockquote .rating span:before,
		.woocommerce .star-rating span:before,
		.product_list_widget .star-rating span:before{
			content: "\53\53\53\53\53";
		}
		.woocommerce p.stars a:before, 
		.woocommerce p.stars:hover a:before, 
		.woocommerce p.stars a:hover~a:before, 
		.woocommerce p.stars.selected a.active:before, 
		.woocommerce p.stars.selected a.active~a:before, 
		.woocommerce p.stars.selected a:not(.active):before{
			content: "\53";
		}
	<?php endif; ?>
	
	
	/********** 1. FONT FAMILY **********/
	
	<?php 
	/* Custom Font */
	if( isset($ts_custom_font_ttf) && $ts_custom_font_ttf['url'] ):
	?>
	@font-face {
		font-family: 'CustomFont';
		src:url('<?php echo esc_url($ts_custom_font_ttf['url']); ?>') format('truetype');
		font-weight: normal;
		font-style: normal;
	}
	<?php endif; ?>
	html,
	body,
	label,
	input,
	textarea,
	keygen,
	select,
	button,
	body .font-body,
	.product-name,
	.mc4wp-form-fields label,
	#ship-to-different-address label,
	form table label,
	.avatar-name a,
	.woocommerce h3.product-name,
	.woocommerce ul.cart_list h3.product-name a,
	#order_review table .product-name strong,
	.breadcrumb-title-wrapper .breadcrumbs,
	.ts-testimonial-wrapper .author-role,
	.product-group-button .button-tooltip,
	.woocommerce ul.product_list_widget li a,
	article.single-post .entry-format blockquote,
	.ts-testimonial-wrapper .ts-testimonial-wrapper h4.name a,
	.ts-twitter-slider.twitter-content h4.name > a,
	.woocommerce #order_review table.shop_table tfoot td,
	.woocommerce table.shop_table.order_details tfoot td,
	body .pp_nav .currentTextHolder,
	body .theme-default .nivo-caption,
	.dokan-category-menu .sub-block h3,
	.menu-wrapper nav > ul.menu li .menu-desc,
	body .dataTables_wrapper,
	body .compare-list,
	.widget_display_stats > dl dt,
	.rating-wrapper strong.rating,
	.comment_list_widget blockquote.comment-body,
	.woocommerce table.shop_table_responsive tr td:before, 
	.woocommerce-page table.shop_table_responsive tr td:before,
	.woocommerce table.shop_attributes th,
	.woocommerce-cart-form__contents .product-price .amount,
	.woocommerce .checkout-login-coupon-wrapper .woocommerce-info,
	.woocommerce nav.woocommerce-pagination ul li a.next,
	.woocommerce nav.woocommerce-pagination ul li a.prev,
	.ts-pagination ul li a.prev,
	.ts-pagination ul li a.next,
	.tini-wishlist .count-number,
	#page .summary a.compare,
	#yith-wcwl-popup-message,
	header .my-wishlist-wrapper .tini-wishlist span,
	#order_review table th,
	.woocommerce table.shop_table tbody th, 
	.woocommerce table.woocommerce-checkout-review-order-table tfoot td, 
	.woocommerce table.woocommerce-checkout-review-order-table tfoot th,
	ul.wishlist_table .item-details .product-name h3,
	.ts-store-notice h5,
	.ts-product-video-button,
	.ts-product-360-button,
	.woocommerce .product-label span.onsale, 
	.woocommerce .product-label span,
	.amount,
	.quantity span.amount{
		font-family: <?php echo esc_html($ts_body_font); ?> , sans-serif;
		font-weight: <?php echo esc_html($ts_body_font_weight); ?>;
		letter-spacing: <?php echo esc_html($ts_body_font_letter_spacing); ?>;
	}

	h1,h2,h3,
	h4,h5,h6,
	.h1,.h2,.h3,
	.h4,.h5,.h6,
	body .font-body-bold,
	.cart-collaterals .cart_totals > h2,
	.woocommerce-checkout #order_review_heading,
	.category-name h3,
	table thead th,
	table th,
	.comment-detail .reply a,
	.comment-detail .edit a,
	.widget_recent_entries .post-date,
	.avatar-name a,
	.woocommerce form .form-row label.inline,
	.ts-blogs .button-readmore.button-text,
	.widget_calendar caption,
	.elementor-widget-wp-widget-calendar caption,
	table#wp-calendar thead th,
	.elementor-widget-wp-widget-calendar thead th,
	.widget_rss .rsswidget,
	.widget_rss cite,
	body div.ppt,
	.woocommerce #reviews #reply-title,
	.cart_list .quantity,
	body .woocommerce table.compare-list .add-to-cart td a,
	body table.compare-list tr.price td,
	a.button,
	button,
	input[type^="submit"],
	.shopping-cart p.buttons a,
	.woocommerce a.button,
	.woocommerce button.button,
	.woocommerce input.button,
	.woocommerce-page a.button,
	.woocommerce-page button.button,
	.woocommerce-page input.button,
	.woocommerce a.button.alt,
	.woocommerce button.button.alt,
	.woocommerce input.button.alt,
	.woocommerce-page a.button.alt,
	.woocommerce-page button.button.alt,
	.woocommerce-page input.button.alt,
	#content button.button,
	.woocommerce #respond input#submit, 
	div.button a,
	.woocommerce .wishlist_table .product-add-to-cart a,
	.woocommerce-account .woocommerce-MyAccount-navigation li a,
	.woocommerce .widget_price_filter .price_slider_amount .button,
	.woocommerce-page .widget_price_filter .price_slider_amount .button,
	.portfolio-info > span:first-child,
	.woocommerce > form > fieldset legend,
	.cloud-zoom-title,
	.wishlist_table tr td.product-stock-status span.wishlist-in-stock,
	body .product-edit-new-container .dokan-btn-lg,
	#ts-search-result-container .view-all-wrapper,
	.ts-search-result-container li a span.hightlight,
	.ts-button,
	body a.button-text,
	.view-all-wrapper a,
	.woocommerce #reviews #reply-title,
	.woocommerce #reviews #comments > h2,
	.ts-team-members h3 a,
	.portfolio-inner h3 a,
	.woocommerce div.product form.cart .quantity span,
	.wishlist_table tr td.product-stock-status span,
	.wishlist_table tr td.product-stock-status span.wishlist-in-stock,
	body table.compare-list th,
	.ts-active-filters .widget_layered_nav_filters ul li a,
	#ts-search-result-container .view-all-wrapper a,
	.heading-title,
	.more-less-buttons a,
	.woocommerce table.shop_attributes th,
	.chart-table tr:first-child td,
	.woocommerce div.product .entry-title, 
	.single-navigation-1 > a,
	.single-navigation-2 > a,
	.woocommerce table.shop_table th,
	.woocommerce table.shop_table.order_details tfoot th,
	#add_payment_method .cart-collaterals .shipping-calculator-button, 
	.woocommerce-cart .cart-collaterals .shipping-calculator-button, 
	.woocommerce-checkout .cart-collaterals .shipping-calculator-button,
	.woocommerce-checkout .checkout #ship-to-different-address label,
	.woocommerce-message,
	.woocommerce .woocommerce-message,
	.woocommerce-error,
	.woocommerce .woocommerce-error,
	.woocommerce-info,
	.woocommerce .woocommerce-info,
	#ts-ajax-add-to-cart-message,
	li.item-strong > a > .menu-label,
	li.item-strong-color > a > .menu-label,
	.product-hover-vertical-style-2 #page .product-group-button-meta > div a,
	.vertical-menu-heading,
	.ts-cart-checkout-process-bar .status,
	#comments .wcpr-overall-rating-left-average,
	#comments .wcpr-filter-button,
	article.single .entry-meta-bottom > div > span,
	.ts-list-of-product-categories-wrapper.style-horizontal li,
	div.product .single-navigation > a > span,
	.elementor-image figcaption,
	.elementor-widget-wp-widget-media_image .elementor-widget-container h5:not(.elementor-heading-title),
	.ts-tiny-cart-wrapper .total > span.total-title, 
	.widget_shopping_cart .total-title,
	.tab-mobile-menu li span,
	.widget-container .widget-title,
	.widget-title,
	.woocommerce .product .category-name h3,
	.filter-widget-area-button,
	.product-per-page-form > span,
	.product-on-sale-form label,
	.woocommerce div.product .woocommerce-tabs ul.tabs li > a,
	.woocommerce div.product form.cart .variations label,
	/* Pagination */
	.dokan-pagination-container .dokan-pagination li.active a,
	.ts-pagination ul li span.current,
	.woocommerce nav.woocommerce-pagination ul li span.current,
	.post-nav-links > span{
		font-family: <?php echo esc_html($ts_body_font_bold); ?>, sans-serif;
		font-weight: <?php echo esc_html($ts_body_font_bold_weight); ?>;
		letter-spacing: <?php echo esc_html($ts_body_font_bold_letter_spacing); ?>;
	}

	html body > h1,
	body div.ppt,
	.heading-body,
	.ts-product-brand-wrapper .item h3,
	.ts-testimonial-wrapper .byline,
	.widget-container .post_list_widget > li h4.entry-title,
	.heading-wrapper > h2, 
	.heading-shortcode > h3,
	#order_review_heading,
	.ts-sidebar-content h4.title,
	.theme-title .heading-title,
	.comments-title .heading-title,
	#comment-wrapper .heading-title,
	#customer_login h2,
	.woocommerce-account .page-container div.woocommerce > h2,
	.account-content h2,
	.woocommerce-MyAccount-content > h2,
	.woocommerce div.wishlist-title h2,
	.woocommerce-customer-details > h2,
	.woocommerce-order-details > h2,
	.woocommerce .cross-sells > h2,
	.woocommerce .up-sells > h2,
	.woocommerce .related > h2,
	.woocommerce-additional-fields > h3,
	header.woocommerce-Address-title > h3,
	.woocommerce-billing-fields > h3,
	.related > h2,
	.theme-title > h3, 
	.cross-sells > h2, 
	.up-sells > h2,
	.ts-menu nav .widgettitle,
	.vertical-menu .elementor-widget-wp-widget-nav_menu .widgettitle,
	.dropdown-container .dropdown-title,
	.cart-dropdown-form .form-content > .emty-title,
	.shortcode-heading-wrapper h2,
	#page .title-big .elementor-widget-container > h5,
	.heading-tab h2,
	.yith-wfbt-section > h3,
	.breadcrumb-title h1,
	.entry-author .author-info .author,
	blockquote .author-role .author,
	.woocommerce .widget_shopping_cart .total strong, 
	.woocommerce.widget_shopping_cart .total strong,
	.elementor-widget-wp-widget-woocommerce_widget_cart .total strong,
	.woocommerce-account .addresses .title h3, 
	.woocommerce-account .addresses h2, 
	.woocommerce-customer-details .addresses h2,
	body.error404 article > h1.heading-font-1,
	.woocommerce span.onsale,
	.ts-active-filters .widget_layered_nav_filters .widgettitle,
	.style-inline .counter-wrapper,
	.ts-cart-checkout-process-bar h6,
	.ts-portfolio-wrapper .filter-bar li.current,
	.ts-product-brand-wrapper .item .meta-wrapper h3,
	.category-best-selling .product-label.best-selling-label span:last-child,
	.woocommerce .show-tabs-content-default .product-content > h2:first-child,
	.woocommerce .show-tabs-content-default .wc-tab > h2:first-child,
	.woocommerce .show-tabs-content-default #reviews #comments > .woocommerce-Reviews-title,
	.ts-banner h4,
	.ts-countdown:not(.style-inline) .counter-wrapper .number,
	.elementor-widget-wp-widget-ts_products .elementor-widget-container > h5,
	.intro-heading h2{
		font-family: <?php echo esc_html($ts_heading_font); ?>, sans-serif;
		font-weight: <?php echo esc_html($ts_heading_font_weight); ?>;
		letter-spacing: <?php echo esc_html($ts_heading_font_letter_spacing); ?>;
	}
	header nav.main-menu > ul.menu > li > a,
	header nav.main-menu > ul > li > a{
		font-family: <?php echo esc_html($ts_menu_font); ?>, sans-serif;
		font-weight: <?php echo esc_html($ts_menu_font_weight); ?>;
		letter-spacing: <?php echo esc_html($ts_menu_font_letter_spacing); ?>;
	}
	.ts-menu > nav.main-menu > ul.menu > li.current-menu-item > .ts-menu-drop-icon,
	.ts-menu > nav.main-menu > ul.menu > li.current_page_parent > .ts-menu-drop-icon,
	.ts-menu > nav.main-menu > ul.menu > li.current-menu-parent > .ts-menu-drop-icon,
	.ts-menu > nav.main-menu > ul.menu > li.current_page_item > .ts-menu-drop-icon,
	.ts-menu > nav.main-menu > ul.menu > li.current-menu-ancestor > .ts-menu-drop-icon,
	.ts-menu > nav.main-menu > ul.menu > li.current-page-ancestor > .ts-menu-drop-icon,
	header nav.main-menu > ul.menu > li.current-menu-item > a,
	header nav.main-menu > ul.menu > li.current_page_parent > a,
	header nav.main-menu > ul.menu > li.current-menu-parent > a,
	header nav.main-menu > ul.menu > li.current_page_item > a,
	header nav.main-menu > ul.menu > li.current-menu-ancestor > a,
	header nav.main-menu > ul.menu > li.current-page-ancestor > a,
	header nav.main-menu > ul.menu li.current-product_cat-ancestor > a{
		font-family: <?php echo esc_html($ts_menu_font_active); ?>, sans-serif;
		font-weight: <?php echo esc_html($ts_menu_font_active_weight); ?>;
	}
	header nav > ul.menu ul.sub-menu > li > a,
	header nav > ul.menu .elementor-widget-wp-widget-nav_menu li > a,
	header nav > ul.menu ul.sub-menu{
		font-family: <?php echo esc_html($ts_sub_menu_font); ?>, sans-serif;
		font-weight: <?php echo esc_html($ts_sub_menu_font_weight); ?>;
		letter-spacing: <?php echo esc_html($ts_sub_menu_font_letter_spacing); ?>;
	}
	.mobile-menu-wrapper nav > ul > li > a{
		font-family: <?php echo esc_html($ts_mobile_menu_font); ?>, sans-serif;
		font-weight: <?php echo esc_html($ts_mobile_menu_font_weight); ?>;
		letter-spacing: <?php echo esc_html($ts_mobile_menu_font_letter_spacing); ?>;
	}
	
	/********** 2. FONT SIZE **********/
	
	html,
	body,
	select option,
	.ts-testimonial-wrapper .author-role,
	.woocommerce div.product p.price,
	.mc4wp-form-fields label,
	ul li .ts-megamenu-container,
	.comment-text,
	.woocommerce .order_details li,
	.comment_list_widget .comment-body,
	.post_list_widget .excerpt,
	article.single-post .entry-format blockquote,
	.woocommerce ul.products li.product .price del,
	.woocommerce ul.products li.product .price,
	.ts-tiny-cart-wrapper .form-content > label,
	.shopping-cart-wrapper .ts-tiny-cart-wrapper,
	.widget_calendar th,
	.widget_calendar td,
	.elementor-widget-wp-widget-calendar th,
	.elementor-widget-wp-widget-calendar td,
	.post_list_widget blockquote,
	#ts-search-result-container .view-all-wrapper a,
	.woocommerce #reviews #comments ol.commentlist li .comment-text p.meta,
	.yith-wcwl-share h4.yith-wcwl-share-title,
	.woocommerce table.wishlist_table,
	body table.compare-list tr.image td,
	body table.compare-list tr.price td,
	h3 > label,
	.dokan-category-menu .sub-block h3,
	.woocommerce div.product .woocommerce-tabs .panel,
	.rating-wrapper strong.rating,
	body .wpml-ls-legacy-list-vertical a,
	body .wpml-ls-legacy-list-horizontal ul li a,
	.mobile-button-custom *,
	/* COMPARE TABLE */
	body table.compare-list,
	body table.compare-list tr.image th,
	body table.compare-list tr.image td,
	body table.compare-list tr.title th,
	body table.compare-list tr.title td,
	body table.compare-list th,
	body table.compare-list td,
	body table.compare-list th{
		font-size: <?php echo esc_html($ts_body_font_size); ?>;
		line-height: <?php echo esc_html($ts_body_font_line_height); ?>;
	}
	select,
	.yith-wfbt-items label,
	.woocommerce nav.woocommerce-pagination ul li a.next:before,
	.woocommerce nav.woocommerce-pagination ul li a.prev:before,
	.ts-pagination ul li a.prev:before,
	.ts-pagination ul li a.next:before,
	.woocommerce table.my_account_orders td,
	.woocommerce table.shop_table.my_account_orders,
	body .select2-container--default .select2-selection--single .select2-selection__rendered,
	.ts-active-filters .widget_layered_nav_filters .widgettitle,
	.wishlist_table.images_grid li .item-details table.item-details-table td, 
	.wishlist_table.mobile li .item-details table.item-details-table td, 
	.wishlist_table.mobile li table.additional-info td, 
	.wishlist_table.modern_grid li .item-details table.item-details-table td,
	.wcpr-overall-rating-and-rating-count h2,
	.mailchimp-subscription .mc4wp-alert,
	.widget-container .product_list_widget .price .amount,
	.category-best-selling .product-label.best-selling-label span,
	footer .mailchimp-subscription .widget-title,
	footer .widget-title,
	.woocommerce .product .category-name h3,
	.vertical-menu-content .theme-title,
	.ts-list-of-product-categories-wrapper .heading-title,
	.ts-product-brand-wrapper .item .meta-wrapper h3,
	.woocommerce nav.woocommerce-pagination ul li a,
	.woocommerce nav.woocommerce-pagination ul li span,
	.ts-pagination ul li a,
	.ts-pagination ul li span.current,
	.dokan-pagination-container .dokan-pagination li a{
		font-size: <?php echo esc_html($ts_body_font_size); ?>;
	}
	@media only screen and (min-width: 768px){
		body .ts-store-notice h5{
			font-size: <?php echo esc_html($ts_body_font_size); ?>;
		}
	}
	.woocommerce .products .product .amount, 
	.product-meta .amount, 
	.price .amount,
	.wishlist_table .amount,
	.yith-wfbt-section .amount,
	#page .fix-height .ts-product-deals-wrapper .product .price del .amount{
		font-size: <?php echo esc_html($ts_body_font_size); ?>;
	}
	body #pp_full_res{
		line-height: <?php echo esc_html($ts_body_font_line_height); ?> !important;
	}
	.tagcloud a{
		font-size: <?php echo esc_html($ts_body_font_size); ?> !important;
		line-height: 28px !important;
	}
	input,
	textarea,
	keygen,
	.woocommerce form .form-row input.input-text,
	.woocommerce form .form-row textarea,
	.dokan-form-control,
	#add_payment_method table.cart td.actions .coupon .input-text,
	.woocommerce-cart table.cart td.actions .coupon .input-text,
	.woocommerce-checkout table.cart td.actions .coupon .input-text,
	.woocommerce-columns > h3,
	.hidden-title-form input[type="text"]{
		font-size: <?php echo esc_html($ts_body_font_size); ?>;
		line-height: 30px;/* default */
	}
	
	dt,
	dd,
	ol li,
	ul li,
	.woocommerce form .form-row label,
	body .yith-wfbt-items label,
	.mailchimp-subscription .mc4wp-alert{
		line-height: 22px;/* default */
	}
	
	h1,
	.h1{
		font-size: <?php echo esc_html($ts_h1_font_size); ?>;
		line-height: <?php echo esc_html($ts_h1_font_line_height); ?>;
	}

	h2,
	.h2,
	.ts-countdown:not(.style-inline) .counter-wrapper .number{
		font-size: <?php echo esc_html($ts_h2_font_size); ?>;
		line-height: <?php echo esc_html($ts_h2_font_line_height); ?>;
	}
	h3,
	.h3{
		font-size: <?php echo esc_html($ts_h3_font_size); ?>;
		line-height: <?php echo esc_html($ts_h3_font_line_height); ?>;
	}
	@media only screen and (min-width: 1200px){
		.layout-fullwidth .breadcrumb-title h1,
		.layout-fullwidth .woocommerce .cross-sells > h2, 
		.layout-fullwidth.woocommerce .up-sells > h2, 
		.layout-fullwidth.woocommerce .related > h2,
		.layout-fullwidth .ts-portfolio-wrapper .shortcode-heading-wrapper > h2,
		.layout-fullwidth .shortcode-heading-wrapper h2,
		.layout-fullwidth #page .title-big .elementor-widget-container > h5,
		.layout-fullwidth .heading-tab h2,
		.layout-fullwidth .list-posts .entry-title,

		.main-content-fullwidth .breadcrumb-title h1,
		.main-content-fullwidth .woocommerce .cross-sells > h2, 
		.main-content-fullwidth.woocommerce .up-sells > h2, 
		.main-content-fullwidth.woocommerce .related > h2,
		.main-content-fullwidth .ts-portfolio-wrapper .shortcode-heading-wrapper > h2,
		.main-content-fullwidth .shortcode-heading-wrapper h2,
		.main-content-fullwidth #page .title-big .elementor-widget-container > h5,
		.main-content-fullwidth .heading-tab h2,
		.main-content-fullwidth .list-posts .entry-title{
			font-size: <?php echo esc_html($ts_h3_font_size); ?>;
			line-height: <?php echo esc_html($ts_h3_font_line_height); ?>;
		}
	}
	h4,
	.h4,
	.breadcrumb-title h1,
	.heading-shortcode > h3,
	.heading-wrapper > h2,
	#customer_login h2,
	#order_review_heading,
	.woocommerce-account .page-container div.woocommerce > h2,
	.account-content h2,
	.woocommerce-MyAccount-content > h2,
	.woocommerce-customer-details > h2,
	.woocommerce-order-details > h2,
	.woocommerce-billing-fields > h3,
	.woocommerce-additional-fields > h3,
	header.woocommerce-Address-title > h3,
	.woocommerce div.wishlist-title h2,
	.woocommerce .cross-sells > h2, 
	.woocommerce .up-sells > h2, 
	.woocommerce .related > h2,
	.ts-portfolio-wrapper .shortcode-heading-wrapper > h2,
	.theme-title .heading-title,
	.woocommerce div.product .summary > .price .amount,
	div.product .summary > .ts-variation-price .amount,
	.woocommerce div.product .entry-title,
	.shortcode-heading-wrapper h2,
	#page .title-big .elementor-widget-container > h5,
	.heading-tab h2,
	.yith-wfbt-submit-block .total_price .amount,
	#ts-product-360-modal .product-title,
	.list-posts .entry-title{
		font-size: <?php echo esc_html($ts_h4_font_size); ?>;
		line-height: <?php echo esc_html($ts_h4_font_line_height); ?>;
	}
	@media only screen and (min-width: 1400px){
		.woocommerce div.product .summary > .price .amount,
		div.product .summary > .ts-variation-price .amount{
			font-size: <?php echo esc_html($ts_h4_font_size); ?>;
			line-height: <?php echo esc_html($ts_h4_font_line_height); ?>;
		}
	}
	.ts-product .column-tabs .list-categories{
		height:<?php echo esc_html($ts_h4_font_line_height); ?>;
	}

	h5,
	.h5,
	.entry-content h1.blog-title,
	.mc4wp-form-fields > h2.title,
	.ts-banner.size-small h4,
	html body > h1,
	.dropdown-container .dropdown-title,
	.cart-dropdown-form .form-content > .emty-title,
	.woocommerce-account .addresses .title h3, 
	.woocommerce-account .addresses h2, 
	.woocommerce-customer-details .addresses h2,
	.dropdown-container .cart-number,
	.ts-sidebar-content h2,
	.meta-bottom-2 > div > h4,
	.yith-wfbt-submit-block .total_price_label,
	.woocommerce .show-tabs-content-default .product-content > h2:first-child,
	.woocommerce .show-tabs-content-default .wc-tab > h2:first-child,
	.woocommerce .show-tabs-content-default #comments > .woocommerce-Reviews-title,
	#page .fix-height .ts-product-deals-wrapper .product .price ins .amount,
	#page .fix-height .ts-product-deals-wrapper .product .price .amount,
	#colophon .mailchimp-fullwidth .widget-title,
	#colophon .horizontal-button-text .widget-title,
	.mailchimp-subscription .widget-title,
	.ts-product-category-wrapper .shortcode-heading-wrapper h2,
	.elementor-widget-wp-widget-ts_products .elementor-widget-container > h5,
	blockquote,
	.yith-wfbt-section > h3,
	.team-info h3.name,
	.woocommerce .ts-col-24 .show-tabs-content-default .product-content > h2:first-child,
	.woocommerce .ts-col-24 .show-tabs-content-default .wc-tab > h2:first-child,
	.woocommerce .ts-col-24 .show-tabs-content-default #comments > .woocommerce-Reviews-title,
	.woocommerce .ts-col-24 .yith-wfbt-section > h3,
	.ts-blogs .entry-title{
		font-size: <?php echo esc_html($ts_h5_font_size); ?>;
		line-height: <?php echo esc_html($ts_h5_font_line_height); ?>;
	}
	#comments .wcpr-overall-rating-left-average{
		font-size: <?php echo esc_html($ts_h5_font_size); ?>;
	}
	@media only screen and (min-width: 1200px){
		body .ts-store-notice h5{
			font-size: <?php echo esc_html($ts_h5_font_size); ?>;
			line-height: <?php echo esc_html($ts_h5_font_line_height); ?>;
		}
		.layout-fullwidth .ts-product > .ts-countdown .counter-wrapper,
		.main-content-fullwidth .ts-product > .ts-countdown .counter-wrapper{
			font-size: <?php echo esc_html($ts_h5_font_size); ?>;
		}
	}
	.blogs .items article.quote blockquote{
		font-size: <?php echo esc_html($ts_h5_font_size); ?>;
		line-height: <?php echo esc_html($ts_h5_font_line_height); ?>;
	}
	h6,.h6,
	.woocommerce div.product .summary > .price del .amount,
	div.product .summary > .ts-variation-price del .amount,
	.woocommerce table.order_details tfoot .amount,
	.woocommerce table.order_details tfoot .amount,
	.cart-collaterals .cart_totals > h2,
	.woocommerce-checkout #order_review_heading,
	.dokan-pagination-container .dokan-pagination,
	.woocommerce-tabs #comments > h2,
	.comment-respond #reply-title,
	div.product .single-navigation > a > span,
	.filter-widget-area .widget-title,
	.widget-title,
	.ts-portfolio-wrapper .heading-title,
	.single-post > .entry-content > .content-wrapper,
	.entry-author .author-info .author,
	blockquote .author-role .author,
	.ts-portfolio-wrapper .filter-bar li,
	.woocommerce div.product .images .product-label span span,
	.post_list_widget h6.entry-title{
		font-size: <?php echo esc_html($ts_h6_font_size); ?>;
		line-height: <?php echo esc_html($ts_h6_font_line_height); ?>;
	}

	/* HEADER */
	label, 
	.wpcf7 p,
	.my-wishlist-wrapper a,
	.my-account-wrapper .account-control > a,
	header .header-currency .wcml_currency_switcher > a, 
	header .header-language .wpml-ls > ul > li > a,

	.woocommerce-cart .cart-collaterals .cart_totals .woocommerce-shipping-destination,
	#add_payment_method .cart-collaterals .shipping-calculator-button, 
	.woocommerce-cart .cart-collaterals .shipping-calculator-button, 
	.woocommerce-checkout .cart-collaterals .shipping-calculator-button,
	.woocommerce-cart .cart-collaterals .cart_totals .woocommerce-shipping-destination,
	.woocommerce table.shop_table.order_details tfoot th,
	.woocommerce #order_review table.shop_table th,
	.cart_totals table tbody th,
	.woocommerce #payment div.payment_box,
	p.lost_password a,
	.my-account-wrapper .forgot-pass a,
	body .my-account-wrapper .form-content a.sign-up,
	.woocommerce-product-rating .woocommerce-review-link,
	.widget_rss .rss-date,
	#cancel-comment-reply-link,
	.woocommerce ul.product_list_widget li dl,
	.breadcrumb-title-wrapper .breadcrumbs-container span:not(.current),
	#ts-login-form .login-remember,
	.woocommerce-form-login__rememberme,
	#page .summary .compare,
	#page .summary .yith-wcwl-add-to-wishlist,
	.woocommerce .wishlist_table .product-add-to-cart a,
	.woocommerce .wishlist_table .product-add-to-cart a.button,
	.woocommerce div.product .summary .woocommerce-product-details__short-description,
	.ts-cart-checkout-process-bar a > span:not(.status),
	#comments .wcpr-overall-rating-right .wcpr-overall-rating-right-total,
	.woocommerce #reviews #comments ol.commentlist li .comment-text p.meta time,
	article.single div.entry-meta-bottom > div > span,
	.portfolio-info > span:first-child,
	.availability-bar .sold,
	.ts-store-notice h5,
	.category-name .count,
	#vertical-menu-sidebar ul.sub-menu li.menu-item,
	.woocommerce .woocommerce-ordering .orderby-current, 
	.product-per-page-form ul.perpage > li span,
	.widget_price_filter .price_slider_amount .price_label,
	.woocommerce-widget-layered-nav-list__item a, 
	.ts-product-attribute > div,
	div.header-right-2 .right-content{
		font-size: <?php echo esc_html($ts_small_font_size); ?>;
	}
	.menu-desc,
	.woocommerce div.product form.cart .reset_variations,
	.woocommerce .products .product .price del .amount,
	ul.product_list_widget del .amount,
	.wishlist_table del .amount,
	.add-to-cart-popup-content del .amount,
	.yith-wfbt-section del .amount,
	.price del .amount,
	.widget-container .product_list_widget .price del .amount,
	.ts-product-attribute .button-tooltip,
	.woocommerce .product-group-button .button-tooltip,
	.product-group-button .button-tooltip,
	.cart-dropdown-form .clear-cart-button,
	.ts-header .info,
	#comment-wrapper .comment-edit-link,
	.woocommerce .widget_price_filter .price_slider_amount .button,
	.woocommerce .yith-woocompare-widget a.compare.button,
	.ts-product-video-button,
	.ts-product-360-button,
	.ts-product-size-chart-button,
	.ts-social-sharing ul li a,
	.nav-text .owl-nav,
	#page .product-group-button-meta > div a,
	#page .product-group-button-meta > div a.added:before,
	body #page .product-group-button-meta > div.compare a:after, 
	body #page .product-group-button-meta > div.wishlist a:after,
	.ts-shortcode a.view-more,
	.ts-shortcode a.shop-all-button,
	.tab-mobile-menu li,
	.woocommerce .product-label span span,
	.ts-header-recently-viewed-products .recently-viewed-products-control,
	.filter-widget-area-button,
	.product-per-page-form > span,
	.product-on-sale-form label,
	.woocommerce nav.woocommerce-pagination ul li a.next,
	.woocommerce nav.woocommerce-pagination ul li a.prev,
	.ts-pagination ul li a.prev,
	.ts-pagination ul li a.next,
	.category-best-selling .product-label.best-selling-label span:first-child,
	.entry-meta-top,
	.comment_list_widget .meta,
	blockquote .entry-meta-middle,
	.entry-author .author-info .role,
	body .comment-meta .button-text a,
	.cats-portfolio a,
	.ts-team-members .team-info,
	.woocommerce div.product form.cart .variations label,
	.wishlist_table.images_grid li .item-details table.item-details-table td.label, 
	.wishlist_table.mobile li .item-details table.item-details-table td.label, 
	.wishlist_table.mobile li table.additional-info td.label, 
	.wishlist_table.modern_grid li .item-details table.item-details-table td.label,
	.contact-address span,
	.contact-phone span,
	.contact-email span,
	.contact-time span,
	.phone-number{
		font-size: <?php echo esc_html($ts_mini_font_size); ?>;
	}

	/* MENU */
	.vertical-menu-button,
	.menu-wrapper nav > ul.menu > li > a,
	.menu-wrapper nav > ul > li > a,
	.menu-wrapper nav > ul.menu > li.menu-item:before{
		font-size: <?php echo esc_html($ts_menu_font_size); ?>;
		line-height: <?php echo esc_html($ts_menu_font_line_height); ?>;
	}
	#group-icon-header .menu-title,
	.mobile-menu-wrapper nav > ul li > a,
	.mobile-menu-wrapper nav > ul li.fa:before,
	.mobile-menu-wrapper nav > ul li.fas:before,
	.mobile-menu-wrapper nav > ul li.far:before,
	.mobile-menu-wrapper nav > ul li.fab:before,
	.menu-wrapper nav.vertical-menu > ul.menu > li > a,
	.vertical-menu-heading,
	.ts-menu nav .elementor-widget-container > h5{
		font-size: <?php echo esc_html($ts_small_font_size); ?>;
		line-height: <?php echo esc_html($ts_menu_font_line_height); ?>;
	}
	.menu-wrapper nav > ul.menu ul li.menu-item:before,
	.menu-wrapper nav > ul.menu ul.sub-menu,
	.menu-wrapper nav > ul.menu ul.sub-menu > li > a,
	.menu-wrapper nav > ul.menu .elementor-widget-wp-widget-nav_menu li > a{
		font-size: <?php echo esc_html($ts_sub_menu_font_size); ?>;
		line-height: <?php echo esc_html($ts_sub_menu_font_line_height); ?>;
	}
	header .header-currency  ul li, 
	header .header-language ul li,
	header .wpml-ls-legacy-dropdown a{
		line-height: 22px;
	}

	/* PRODUCT */
	h3.product-name,
	body table.compare-list tr.title td,
	.single-navigation .product-info > div > span:first-child,
	ul.wishlist_table .item-details .product-name h3,
	#ts-search-result-container ul li a{
		font-size: <?php echo esc_html($ts_body_font_size); ?>;
		line-height: 20px;
	}
	.product-brands, 
	.woocommerce .products .product .product-categories, 
	.products .product .product-sku,
	body table.compare-list tr.price .amount,
	body table.compare-list tr.price del .amount,
	body table.compare-list tr.price th,
	body table.compare-list tr.price td,
	.woocommerce .products .product .price,
	.single-navigation .product-info > div > span:first-child,
	ul.wishlist_table .item-details .product-name h3{
		line-height: 20px;
	}
	/* BUTTON */
	.woocommerce-error .button,
	.woocommerce-info .button,
	.woocommerce-message .button,
	.woocommerce .woocommerce-error .button,
	.woocommerce .woocommerce-info .button,
	.woocommerce .woocommerce-message .button{
		font-size: 12px;
		line-height: 14px;/* default */
	}
	.woocommerce a.button.added:before,
	.woocommerce button.button.added:before,
	.woocommerce input.button.added:before,
	a.ts-button,
	a.button,
	button, 
	input[type^="submit"], 
	.woocommerce a.button, 
	.woocommerce button.button, 
	.woocommerce input.button,  
	.woocommerce a.button.alt, 
	.woocommerce button.button.alt, 
	.woocommerce input.button.alt,  
	.woocommerce a.button.disabled, 
	.woocommerce a.button:disabled, 
	.woocommerce a.button:disabled[disabled], 
	.woocommerce button.button.disabled, 
	.woocommerce button.button:disabled, 
	.woocommerce button.button:disabled[disabled], 
	.woocommerce input.button.disabled, 
	.woocommerce input.button:disabled, 
	.woocommerce input.button:disabled[disabled],
	.woocommerce #respond input#submit, 
	.shopping-cart p.buttons a,
	html body.woocommerce table.compare-list tr.add-to-cart td a:before,
	html body table.compare-list tr.add-to-cart td a:before,
	.woocommerce-account .woocommerce-MyAccount-navigation li a,
	body .product-edit-new-container .dokan-btn-lg,
	.woocommerce .hidden-title-form a.hide-title-form,
	.single-post article .tags-link a,
	#comments .wcpr-filter-button,
	.woocommerce .wishlist_table .product-add-to-cart a,
	/* Compare */
	body .woocommerce table.compare-list .add-to-cart td a,
	/* Dokan */
	input[type="submit"].dokan-btn,
	a.dokan-btn,
	.dokan-btn{
		font-size: <?php echo esc_html($ts_button_font_size); ?>;
		line-height: 30px;/* default */
	}
	.single-navigation-1 > a,
	.single-navigation-2 > a,
	a.button-text,
	.more-less-buttons a{
		font-size: <?php echo esc_html($ts_button_font_size); ?>;
	}
	@media only screen and (min-width: 1025px){
		body:not(.ts_desktop) #page .product-group-button-meta > div.compare a:after,
		body:not(.ts_desktop) #page .product-group-button-meta > div.wishlist a:after{
			line-height: 30px;/* default */
		}
	}
	@media only screen and (max-width: 1024px){
		body #page .product-group-button-meta > div.compare a:after,
		body #page .product-group-button-meta > div.wishlist a:after{
			line-height: 30px;/* default */
		}
	}
	@media
	only screen and (max-width: 1200px)	and (min-width: 768px){
		html,
		body,
		select option,
		.ts-testimonial-wrapper .author-role,
		.woocommerce div.product p.price,
		.mc4wp-form-fields label,
		ul li .ts-megamenu-container,
		.comment-text,
		.woocommerce .order_details li,
		.comment_list_widget .comment-body,
		.post_list_widget .excerpt,
		article.single-post .entry-format blockquote,
		.woocommerce ul.products li.product .price del,
		.woocommerce ul.products li.product .price,
		.ts-tiny-cart-wrapper .form-content > label,
		.shopping-cart-wrapper .ts-tiny-cart-wrapper,
		.widget_calendar th,
		.widget_calendar td,
		.elementor-widget-wp-widget-calendar th,
		.elementor-widget-wp-widget-calendar td,
		.post_list_widget blockquote,
		#ts-search-result-container .view-all-wrapper a,
		.woocommerce #reviews #comments ol.commentlist li .comment-text p.meta,
		.yith-wcwl-share h4.yith-wcwl-share-title,
		.woocommerce table.wishlist_table,
		body table.compare-list tr.image td,
		body table.compare-list tr.price td,
		h3 > label,
		.dokan-category-menu .sub-block h3,
		.woocommerce div.product .woocommerce-tabs .panel,
		.rating-wrapper strong.rating,
		body .wpml-ls-legacy-list-vertical a,
		body .wpml-ls-legacy-list-horizontal ul li a,
		.widget_price_filter .price_slider_amount .price_label,
		.mobile-button-custom *,
		/* COMPARE TABLE */
		body table.compare-list,
		body table.compare-list tr.image th,
		body table.compare-list tr.image td,
		body table.compare-list tr.title th,
		body table.compare-list tr.title td,
		body table.compare-list th,
		body table.compare-list td,
		body table.compare-list th{
			font-size: <?php echo esc_html($ts_body_ipad_font_size); ?>;
			line-height: <?php echo esc_html($ts_body_ipad_font_line_height); ?>;
		}
		select,
		.yith-wfbt-items label,
		.woocommerce nav.woocommerce-pagination ul li a.next:before,
		.woocommerce nav.woocommerce-pagination ul li a.prev:before,
		.ts-pagination ul li a.prev:before,
		.ts-pagination ul li a.next:before,
		.woocommerce table.my_account_orders td,
		.woocommerce table.shop_table.my_account_orders,
		body .select2-container--default .select2-selection--single .select2-selection__rendered,
		.ts-active-filters .widget_layered_nav_filters .widgettitle,
		.wishlist_table.images_grid li .item-details table.item-details-table td, 
		.wishlist_table.mobile li .item-details table.item-details-table td, 
		.wishlist_table.mobile li table.additional-info td, 
		.wishlist_table.modern_grid li .item-details table.item-details-table td,
		.wcpr-overall-rating-and-rating-count h2,
		.mailchimp-subscription .mc4wp-alert,
		.widget-container .product_list_widget .price .amount,
		.woocommerce .product .category-name h3,
		.ts-list-of-product-categories-wrapper .heading-title,
		.ts-product-brand-wrapper .item .meta-wrapper h3{
			font-size: <?php echo esc_html($ts_body_ipad_font_size); ?>;
		}
		@media only screen and (min-width: 768px){
			body .ts-store-notice h5{
				font-size: <?php echo esc_html($ts_body_ipad_font_size); ?>;
			}
		}
		.woocommerce .products .product .amount, 
		.product-meta .amount, 
		.price .amount,
		.wishlist_table .amount,
		.yith-wfbt-section .amount,
		#page .fix-height .ts-product-deals-wrapper .product .price del .amount{
			font-size: <?php echo esc_html($ts_body_ipad_font_size); ?>;
		}
		body #pp_full_res{
			line-height: <?php echo esc_html($ts_body_ipad_font_line_height); ?> !important;
		}
		.tagcloud a{
			font-size: <?php echo esc_html($ts_body_ipad_font_size); ?> !important;
			line-height: 28px !important;
		}
		input,
		textarea,
		keygen,
		.woocommerce form .form-row input.input-text,
		.woocommerce form .form-row textarea,
		.dokan-form-control,
		#add_payment_method table.cart td.actions .coupon .input-text,
		.woocommerce-cart table.cart td.actions .coupon .input-text,
		.woocommerce-checkout table.cart td.actions .coupon .input-text,
		.woocommerce-columns > h3,
		.hidden-title-form input[type="text"]{
			font-size: <?php echo esc_html($ts_body_ipad_font_size); ?>;
			line-height: 30px;/* default */
		}
		.ts-list-of-product-categories-wrapper.style-horizontal li{
			font-size: <?php echo esc_html($ts_mini_font_size); ?>;
		}
		.tab-mobile-menu li,
		.mobile-menu-wrapper nav > ul li > a,
		.mobile-menu-wrapper nav > ul > li:before,
		nav span.ts-menu-drop-icon,
		#group-icon-header .menu-title,
		.menu-wrapper nav > ul.menu > li > a,
		.menu-wrapper nav > ul > li > a,
		.menu-wrapper nav > ul.menu > li.menu-item:before{
			font-size: <?php echo esc_html($ts_menu_ipad_font_size); ?>;
			line-height: <?php echo esc_html($ts_menu_ipad_font_line_height); ?>;
		}
		.menu-wrapper nav > ul.menu ul li.menu-item:before,
		.menu-wrapper nav > ul.menu ul.sub-menu,
		.menu-wrapper nav > ul.menu ul.sub-menu > li > a,
		.menu-wrapper nav > ul.menu .elementor-widget-wp-widget-nav_menu li > a{
			font-size: <?php echo esc_html($ts_sub_menu_ipad_font_size); ?>;
			line-height: <?php echo esc_html($ts_sub_menu_ipad_font_line_height); ?>;
		}
		
		h1,
		.h1{
			font-size: <?php echo esc_html($ts_h1_ipad_font_size); ?>;
			line-height: <?php echo esc_html($ts_h1_ipad_font_line_height); ?>;
		}

		h2,
		.h2,
		.ts-countdown:not(.style-inline) .counter-wrapper .number{
			font-size: <?php echo esc_html($ts_h2_ipad_font_size); ?>;
			line-height: <?php echo esc_html($ts_h2_ipad_font_line_height); ?>;
		}
		h3,
		.h3,
		#customer_login h2,
		#order_review_heading,
		.woocommerce-account .page-container div.woocommerce > h2,
		.account-content h2,
		.woocommerce-MyAccount-content > h2,
		.woocommerce-customer-details > h2,
		.woocommerce-order-details > h2,
		.woocommerce-billing-fields > h3,
		.woocommerce-additional-fields > h3,
		header.woocommerce-Address-title > h3,
		.woocommerce div.wishlist-title h2,
		.woocommerce .cross-sells > h2, 
		.woocommerce .up-sells > h2, 
		.woocommerce .related > h2,
		.ts-portfolio-wrapper .shortcode-heading-wrapper > h2,
		
		.layout-fullwidth .breadcrumb-title h1,
		.layout-fullwidth .woocommerce .cross-sells > h2, 
		.layout-fullwidth .woocommerce.up-sells > h2, 
		.layout-fullwidth .woocommerce.related > h2,
		.layout-fullwidth .ts-portfolio-wrapper .shortcode-heading-wrapper > h2,
		.layout-fullwidth .shortcode-heading-wrapper h2,
		.layout-fullwidth #page .title-big .elementor-widget-container > h5,
		.layout-fullwidth .heading-tab h2,
		.layout-fullwidth .list-posts .entry-title,

		.main-content-fullwidth .breadcrumb-title h1,
		.main-content-fullwidth .woocommerce .cross-sells > h2, 
		.main-content-fullwidth.woocommerce .up-sells > h2, 
		.main-content-fullwidth.woocommerce .related > h2,
		.main-content-fullwidth .ts-portfolio-wrapper .shortcode-heading-wrapper > h2,
		.main-content-fullwidth .shortcode-heading-wrapper h2,
		.main-content-fullwidth #page .title-big .elementor-widget-container > h5,
		.main-content-fullwidth .heading-tab h2,
		.main-content-fullwidth .list-posts .entry-title{
			font-size: <?php echo esc_html($ts_h3_ipad_font_size); ?>;
			line-height: <?php echo esc_html($ts_h3_ipad_font_line_height); ?>;
		}
		.ts-product .column-tabs .list-categories{
			line-height: <?php echo esc_html($ts_h3_ipad_font_line_height); ?>;
		}
		h4,
		.h4,
		.breadcrumb-title h1,
		.heading-shortcode > h3,
		.heading-wrapper > h2,
		.theme-title .heading-title,
		.woocommerce div.product .summary > .price .amount,
		div.product .summary > .ts-variation-price .amount,
		.woocommerce div.product .entry-title,
		.yith-wfbt-submit-block .total_price .amount,
		.woocommerce .ts-col-24 .show-tabs-content-default .product-content > h2:first-child,
		.woocommerce .ts-col-24 .show-tabs-content-default .wc-tab > h2:first-child,
		.woocommerce .ts-col-24 .show-tabs-content-default #comments > .woocommerce-Reviews-title,
		.woocommerce .ts-col-24 .yith-wfbt-section > h3,
		#ts-product-360-modal .product-title,
		.shortcode-heading-wrapper h2,
		#page .title-big .elementor-widget-container > h5,
		.heading-tab h2{
			font-size: <?php echo esc_html($ts_h4_ipad_font_size); ?>;
			line-height: <?php echo esc_html($ts_h4_ipad_font_line_height); ?>;
		}
		h5,
		.h5,
		.entry-content h1.blog-title,
		.mc4wp-form-fields > h2.title,
		.ts-banner.size-small h4,
		html body > h1,
		.dropdown-container .dropdown-title,
		.cart-dropdown-form .form-content > .emty-title,
		.woocommerce-account .addresses .title h3, 
		.woocommerce-account .addresses h2, 
		.woocommerce-customer-details .addresses h2,
		.dropdown-container .cart-number,
		.ts-sidebar-content h2,
		.meta-bottom-2 > div > h4,
		.yith-wfbt-submit-block .total_price_label,
		.woocommerce-tabs #comments > h2,
		.comment-respond #reply-title,
		.ts-banner h4,
		blockquote,
		.team-info h3.name,
		.yith-wfbt-section > h3,
		.ts-blogs .entry-title{
			font-size: <?php echo esc_html($ts_h5_ipad_font_size); ?>;
			line-height: <?php echo esc_html($ts_h5_ipad_font_line_height); ?>;
		}
		#comments .wcpr-overall-rating-left-average{
			font-size: <?php echo esc_html($ts_h5_ipad_font_size); ?>;
		}
		.entry-meta-top,
		#page .ts-banner a.button,
		.ts-banner .text-small,
		.ts-list-of-product-categories-wrapper .heading-title{
			font-size: <?php echo esc_html($ts_mini_font_size); ?>;
		}
		.blogs .items article.quote blockquote{
			font-size: <?php echo esc_html($ts_h5_ipad_font_size); ?>;
			line-height: <?php echo esc_html($ts_h5_ipad_font_line_height); ?>;
		}
		h6,.h6,
		.woocommerce div.product .summary > .price del .amount,
		div.product .summary > .ts-variation-price del .amount,
		.woocommerce table.order_details tfoot .amount,
		.woocommerce table.order_details tfoot .amount,
		.cart-collaterals .cart_totals > h2,
		.woocommerce-checkout #order_review_heading,
		.dokan-pagination-container .dokan-pagination,
		.ts-product-brand-wrapper .item .meta-wrapper h3,
		div.product .single-navigation > a > span,
		.filter-widget-area .widget-title,
		.widget-title,
		.ts-portfolio-wrapper .heading-title,
		.single-post > .entry-content > .content-wrapper{
			font-size: <?php echo esc_html($ts_h6_ipad_font_size); ?>;
			line-height: <?php echo esc_html($ts_h6_ipad_font_line_height); ?>;
		}
	}
	@media only screen and (max-width: 767px){
		.single-post > .entry-content > .content-wrapper{
			font-size: <?php echo esc_html($ts_body_font_size); ?>;
			line-height: <?php echo esc_html($ts_body_font_line_height); ?>;
		}
		h1,
		.h1{
			font-size: <?php echo esc_html($ts_h1_mobile_font_size); ?>;
			line-height: <?php echo esc_html($ts_h1_mobile_font_line_height); ?>;
		}

		h2,
		.h2,
		.ts-countdown:not(.style-inline) .counter-wrapper .number{
			font-size: <?php echo esc_html($ts_h2_mobile_font_size); ?>;
			line-height: <?php echo esc_html($ts_h2_mobile_font_line_height); ?>;
		}
		h3,
		.h3,
		.shortcode-heading-wrapper h2,
		.heading-tab h2,
		#page .title-big .elementor-widget-container > h5,
		.ts-product-category-wrapper .shortcode-heading-wrapper h2,
		.elementor-widget-wp-widget-ts_products .elementor-widget-container > h5,
		.heading-shortcode > h3,
		.heading-wrapper > h2,
		#customer_login h2,
		#order_review_heading,
		.woocommerce-account .page-container div.woocommerce > h2,
		.account-content h2,
		.woocommerce-MyAccount-content > h2,
		.woocommerce-customer-details > h2,
		.woocommerce-order-details > h2,
		.woocommerce-billing-fields > h3,
		.woocommerce-additional-fields > h3,
		header.woocommerce-Address-title > h3,
		.woocommerce div.wishlist-title h2,
		.woocommerce .cross-sells > h2, 
		.woocommerce .up-sells > h2, 
		.woocommerce .related > h2,
		.ts-portfolio-wrapper .shortcode-heading-wrapper > h2,
		.theme-title .heading-title,
		.woocommerce div.product .entry-title{
			font-size: <?php echo esc_html($ts_h3_mobile_font_size); ?>;
			line-height: <?php echo esc_html($ts_h3_mobile_font_line_height); ?>;
		}

		h4,
		.h4,
		.woocommerce div.product .summary > .price .amount,
		div.product .summary > .ts-variation-price .amount,
		.yith-wfbt-submit-block .total_price .amount,
		.breadcrumb-title h1,
		.woocommerce .ts-col-24 .show-tabs-content-default .product-content > h2:first-child,
		.woocommerce .ts-col-24 .show-tabs-content-default .wc-tab > h2:first-child,
		.woocommerce .ts-col-24 .show-tabs-content-default #comments > .woocommerce-Reviews-title,
		.woocommerce .ts-col-24 .yith-wfbt-section > h3,
		.list-posts .entry-title,
		.ts-blogs .entry-title,
		.ts-portfolio-wrapper .heading-title{
			font-size: <?php echo esc_html($ts_h4_mobile_font_size); ?>;
			line-height: <?php echo esc_html($ts_h4_mobile_font_line_height); ?>;
		}
		.ts-banner .text-small,
		#page .fix-height .ts-product-deals-wrapper .product .price del .amount,
		.ts-product-deals-wrapper.item-layout-list .product-wrapper .ts-countdown.style-inline{
			font-size: <?php echo esc_html($ts_mini_font_size); ?>;
		}
		#page .fix-height .ts-product-deals-wrapper .product .price ins .amount,
		#page .fix-height .ts-product-deals-wrapper .product .price .amount{
			font-size: <?php echo esc_html($ts_body_font_size); ?>;
			line-height: 20px;
		}
		
		h5,
		.h5,
		.entry-content h1.blog-title,
		.mc4wp-form-fields > h2.title,
		.ts-banner.size-small h4,
		html body > h1,
		.dropdown-container .dropdown-title,
		.cart-dropdown-form .form-content > .emty-title,
		.woocommerce-account .addresses .title h3, 
		.woocommerce-account .addresses h2, 
		.woocommerce-customer-details .addresses h2,
		.dropdown-container .cart-number,
		.ts-sidebar-content h2,
		.meta-bottom-2 > div > h4,
		.ts-portfolio-wrapper .heading-title,
		.yith-wfbt-submit-block .total_price_label,
		.woocommerce .ts-col-24 .show-tabs-content-default .product-content > h2:first-child,
		.woocommerce .ts-col-24 .show-tabs-content-default .wc-tab > h2:first-child,
		.woocommerce .ts-col-24 .show-tabs-content-default #comments > .woocommerce-Reviews-title,
		.woocommerce .show-tabs-content-default .product-content > h2:first-child,
		.woocommerce .show-tabs-content-default .wc-tab > h2:first-child,
		.woocommerce .show-tabs-content-default #comments > .woocommerce-Reviews-title,
		#colophon .mailchimp-fullwidth .widget-title,
		#colophon .horizontal-button-text .widget-title,
		.mailchimp-subscription .widget-title,
		.woocommerce-tabs #comments > h2,
		.comment-respond #reply-title,
		blockquote,
		.woocommerce div.product .woocommerce-tabs ul.tabs li > a{
			font-size: <?php echo esc_html($ts_h5_mobile_font_size); ?>;
			line-height: <?php echo esc_html($ts_h5_mobile_font_line_height); ?>;
		}
		#comments .wcpr-overall-rating-left-average{
			font-size: <?php echo esc_html($ts_h5_mobile_font_size); ?>;
		}
		.ts-blogs .items article.quote blockquote{
			font-size: <?php echo esc_html($ts_h5_mobile_font_size); ?>;
			line-height: <?php echo esc_html($ts_h5_mobile_font_line_height); ?>;
		}
		h6,.h6,
		.woocommerce div.product .summary > .price del .amount,
		div.product .summary > .ts-variation-price del .amount,
		.woocommerce table.order_details tfoot .amount,
		.woocommerce table.order_details tfoot .amount,
		.cart-collaterals .cart_totals > h2,
		.woocommerce-checkout #order_review_heading,
		.dokan-pagination-container .dokan-pagination,
		.ts-product-brand-wrapper .item .meta-wrapper h3,
		#ts-product-360-modal .product-title,
		.filter-widget-area .widget-title,
		.widget-title,
		.woocommerce div.product .images .product-label span span{
			font-size: <?php echo esc_html($ts_h6_mobile_font_size); ?>;
			line-height: <?php echo esc_html($ts_h6_mobile_font_line_height); ?>;
		}
	}
	
	/********** 3. COLORS **********/
	
	/* Background Content Color */
	body #main,
	body.dokan-store #main:before,
	#cboxLoadedContent,
	.shopping-cart-wrapper .dropdown-container:before, 
	.my-account-wrapper .dropdown-container:before, 
	form.checkout div.create-account,
	.ts-popup-modal .popup-container,
	body #ts-search-result-container:before,
	body .select2-container--default .select2-selection--single .select2-selection__rendered,
	#yith-wcwl-popup-message,
	.thumbnail-wrapper .button-in.wishlist a.loading:before,
	.thumbnail-wrapper .button-in.compare a.loading:before,
	.woocommerce .add_to_wishlist.loading:before,
	.dataTables_wrapper,
	body > .compare-list,
	.single-navigation > div .product-info:before,
	.single-navigation .product-info:before,
	.archive.ajax-pagination .woocommerce > .products:after,

	div.product .summary .yith-wcwl-add-to-wishlist a.loading:before,
	.dropdown-container ul.cart_list li.loading:before,
	.thumbnail-wrapper .button-in.wishlist > a.loading:before,
	.meta-wrapper .button-in.wishlist > a.loading:before,
	.woocommerce a.button.loading:before,
	.woocommerce button.button.loading:before,
	.woocommerce input.button.loading:before,
	div.blockUI.blockOverlay:before,
	.woocommerce .blockUI.blockOverlay:before,
	.ts-blogs .article-content,
	.list-posts > article,
	div.product .single-navigation a .product-info,
	.ts-floating-sidebar .ts-sidebar-content,
	#ts-mobile-button-bottom,
	.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
	#comments .wcpr-filter-container ul.wcpr-filter-button-ul,
	body > #ts-search-result-container,
	.archive.woocommerce .woocommerce .product-wrapper,
	.shopping-cart-wrapper .dropdown-container:before,
	.my-account-wrapper .dropdown-container:before,
	.wcml_currency_switcher > ul:before, 
	.wpml-ls-legacy-dropdown ul.wpml-ls-sub-menu:before,
	.wpml-ls-item-legacy-dropdown-click ul.wpml-ls-sub-menu:before,
	.ts-header-recently-viewed-products .dropdown-container:before,
	.woocommerce .product-wrapper .meta-wrapper a.button.loading:before,
	.woocommerce .product-wrapper .meta-wrapper button.button.loading:before,
	.woocommerce .product-wrapper .meta-wrapper input.button.loading:before,
	.meta-wrapper .button-in a div.blockUI.blockOverlay:before,
	.cart-dropdown-form.loading .form-content:after,
	.woocommerce .woocommerce-ordering .orderby ul:before,
	.product-per-page-form ul.perpage ul:before,
	.woocommerce-wishlist .product-add-to-cart a.loading:before{
		background-color: <?php echo esc_html($ts_main_content_background_color); ?>;
	}

	/* BODY COLOR */
	body,
	.entry-meta-top span,
	.woocommerce .woocommerce-ordering ul li a, 
	.product-per-page-form ul.perpage ul li a,
	.wishlist_table tr td.product-stock-status span,
	.woocommerce div.product .summary .woocommerce-product-details__short-description,
	.ts-tiny-cart-wrapper li div.blockUI.blockOverlay:after,
	.widget_shopping_cart li div.blockUI.blockOverlay:after,
	.elementor-widget-wp-widget-woocommerce_widget_cart li div.blockUI.blockOverlay:after,
	.dropdown-container ul.cart_list li.loading:after,
	.woocommerce a.button.loading:after,
	.woocommerce button.button.loading:after,
	.woocommerce input.button.loading:after,
	.cats-link,
	.tags-link,
	.brands-link,
	.tags-link a,
	.brands-link a,
	.tagcloud a,
	.header-language .wpml-ls-item li a,
	.header-currency .wcml_currency_switcher li a,
	.account-dropdown-form ul li > a,
	/* Widget */
	.comment_list_widget .comment-body,
	.woocommerce table.shop_attributes td,
	.woocommerce table.shop_attributes th,
	.woocommerce p.stars a,
	.woocommerce-product-rating .woocommerce-review-link,
	table tfoot th,
	.woocommerce-checkout #payment div.payment_box,
	body .pp_nav .currentTextHolder,
	.dashboard-widget.products ul li a, 
	.list-cats li a,
	.product-categories .count,
	.woocommerce-product-rating .woocommerce-review-link,
	.dataTables_wrapper,
	.woocommerce-cart table.cart td.actions .coupon .input-text,
	.woocommerce-checkout table.cart td.actions .coupon .input-text,
	.ts-tiny-cart-wrapper .subtotal > span:first-child,
	p.lost_password a, 
	.my-account-wrapper .forgot-pass a, 
	.login-remember label,
	.woocommerce-form-login__rememberme,
	.forgot-pass a,
	body .my-account-wrapper .form-content a.sign-up,
	.product .product-brands a,
	.meta-wrapper .product-categories a,
	.widget-container ul li .product-categories a,
	.woocommerce div.product .woocommerce-tabs ul.tabs li > a,
	.woocommerce div.product div.images .woocommerce-product-gallery__trigger,
	#page .summary .yith-wcwl-add-to-wishlist a,
	#page .summary a.compare,
	.ts-cart-checkout-process-bar a > span:not(.status),  
	.woocommerce p.stars a:hover~a:before, 
	.woocommerce p.stars.selected a.active~a:before,
	.ts-product-categories-widget ul ul > li a,
	.widget_product_categories ul ul > li a,
	.product-filter-by-brand ul ul > li label,
	.elementor-widget-wp-widget-ts_product_categories ul ul > li a,
	.elementor-widget-wp-widget-woocommerce_product_categories ul ul > li a,
	.column-content .list-categories li,
	.woocommerce.item-layout-list .count,
	.ts-list-of-product-categories-wrapper.style-default .list-categories li a,
	.ts-product-size-chart-button,
	.nav-text .owl-nav > div,
	.ts-shortcode a.view-more,
	.ts-shortcode a.shop-all-button,
	.entry-meta-top > span.cats-link > span:first-child,
	#page .entry-meta-top span.author a,
	body .comment-meta .button-text a,
	.portfolio-info .cat-links a,
	.cats-portfolio a,
	.ts-team-members .member-social a,
	.summary .cat-links a,
	.more-less-buttons a,
	.ts-product-video-button,
	.ts-product-360-button,
	/* Widget */
	.widget-container ul li > a,
	.elementor-widget-container > ul > li a,
	.elementor-widget-wp-widget-nav_menu ul > li a,
	.elementor-widget-wp-widget-woocommerce_product_categories ul > li a,
	.elementor-widget-wp-widget-ts_product_categories ul > li a,
	.elementor-widget-container .social-icons ul li a,
	.dokan-widget-area .widget ul li > a,
	.dokan-orders-content .dokan-orders-area ul.order-statuses-filter li a,
	.product-filter-by-brand ul li label,
	.product-filter-by-availability ul li label,
	.woocommerce .woocommerce-ordering .orderby li a,
	body .select2-container--default .select2-selection--single .select2-selection__arrow b:before,
	/* Pagination */
	.dokan-pagination-container .dokan-pagination li a,
	.woocommerce nav.woocommerce-pagination ul li a,
	.woocommerce nav.woocommerce-pagination ul li span,
	.ts-pagination ul li a,
	.ts-pagination ul li span,
	.post-nav-links > a{
		color: <?php echo esc_html($ts_text_color); ?>;
	}
	.woocommerce p.stars a:hover~a:before, 
	.woocommerce p.stars.selected a.active~a:before{
		color: <?php echo esc_html($ts_text_color); ?> !important;
	}
	@media only screen and (max-width: 1200px){
		body:not(.ts-desktop) .meta-wrapper .button-in a,
		body:not(.ts-desktop) #main .product-group-button-meta .loop-add-to-cart a{
			color: <?php echo esc_html($ts_text_color); ?>;
		}
	}
	body .yith-woocompare-widget ul.products-list a.remove,
	.cart_list li .cart-item-wrapper a.remove, 
	.woocommerce .widget_shopping_cart .cart_list li a.remove, 
	.woocommerce.widget_shopping_cart .cart_list li a.remove,
	.elementor-widget-wp-widget-woocommerce_widget_cart .cart_list li a.remove, 
	body table.compare-list tr.remove td > a,
	.woocommerce table.shop_table .product-remove a,
	ul.wishlist_table .product-remove a{
		color: <?php echo esc_html($ts_text_color); ?> !important;
	}

	select,
	textarea,
	html input[type="search"],
	html input[type="text"],
	html input[type="email"],
	html input[type="password"],
	html input[type="date"],
	html input[type="number"],
	html input[type="tel"],
	body .select2-container--default .select2-search--dropdown .select2-search__field,
	body .select2-container--default .select2-selection--single,
	body .select2-dropdown,
	body .select2-container--default .select2-selection--single,
	body .select2-container--default .select2-search--dropdown .select2-search__field,
	.woocommerce form .form-row.woocommerce-validated .select2-container,
	.woocommerce form .form-row.woocommerce-validated input.input-text,
	.woocommerce form .form-row.woocommerce-validated select,
	body .select2-container--default .select2-selection--multiple{
		color: <?php echo esc_html($ts_input_text_color); ?>;
		border-color: <?php echo esc_html($ts_input_border_color); ?>;
	}
	.ts-product-categories-widget ul > li > a:before, 
	.widget_product_categories ul > li > a:before, 
	.product-filter-by-brand ul > li > label:before, 
	.product-filter-by-availability ul > li > label:before,
	.elementor-widget-wp-widget-ts_product_categories ul > li > a:before,
	.elementor-widget-wp-widget-woocommerce_product_categories ul > li > a:before{
		border-color: <?php echo esc_html($ts_input_border_color); ?>;
	}
	body.error404 article > h1.heading-font-1,
	.entry-meta-top > span:after{
		color: <?php echo esc_html($ts_input_border_color); ?>;
	}
	body .select2-container--default .select2-selection--single .select2-selection__rendered{
		color: <?php echo esc_html($ts_input_text_color); ?>;
	}
	html input[type="search"]:focus,
	html input[type="text"]:focus,
	html input[type="email"]:focus,
	html input[type="password"]:focus,
	html input[type="date"]:focus,
	html input[type="number"]:focus,
	html input[type="tel"]:focus,
	input:-webkit-autofill,
	textarea:-webkit-autofill,
	select:-webkit-autofill,
	html textarea:focus,
	.woocommerce form .form-row textarea:focus,
	body .select2-container--default.select2-container--focus .select2-selection--multiple,
	.woocommerce form .form-row.woocommerce-validated .select2-container,
	.woocommerce form .form-row.woocommerce-validated input.input-text,
	.woocommerce form .form-row.woocommerce-validated select,
	body .select2-container--open .select2-selection--single,
	body .select2-container--open .select2-dropdown--below{
		color: <?php echo esc_html($ts_input_text_hover); ?>;
		border-color: <?php echo esc_html($ts_input_border_hover); ?>;
	}
	body .select2-container--open .select2-selection--single .select2-selection__rendered{
		color: <?php echo esc_html($ts_input_text_hover); ?>;
	}


	/* LINK COLOR */

	a{
		color: <?php echo esc_html($ts_link_color); ?>;
	}
	a:hover{
		color: <?php echo esc_html($ts_link_color_hover); ?>;
	}

	/* TEXT BOLD COLOR */
	h1,h2,h3,h4,h5,h6,
	.h1,.h2,.h3,.h4,.h5,.h6,
	.woocommerce > form > fieldset legend,
	dt,
	table thead th,
	.woocommerce table.shop_table th,
	fieldset div > label,
	blockquote,
	.wpcf7 p,
	.primary-text,
	html input:focus:invalid:focus, 
	html select:focus:invalid:focus,
	#yith-wcwl-popup-message,
	html body > h1,
	table#wp-calendar thead th,
	.woocommerce table.shop_attributes th,
	.avatar-name a,
	h4.heading-title > a,
	h1 > a,
	h2 > a,
	h3 > a,
	h4 > a,
	h5 > a,
	h6 > a,
	body a.button-text,
	body .button-text a,
	.single-navigation-1 a,
	.single-navigation-2 a,
	.ts-product-attribute > div a,
	.social-icons.style-circle li a,
	.heading-title,
	.wp-block-archives li a,
	.wp-block-latest-posts li a,
	.wp-block-tag-cloud a,
	.wp-block-rss li a,
	.woocommerce .widget_layered_nav ul li a,
	form.cart .reset_variations,
	.widget-container .post_list_widget > li a.post-title,
	.dashboard-widget.products ul li a,
	.woocommerce .checkout-login-coupon-wrapper .woocommerce-info a,
	.widget-title-wrapper a.block-control,
	.woocommerce-account .woocommerce-MyAccount-navigation li a,
	.woocommerce div.product .woocommerce-tabs ul.tabs li.active > a,
	.woocommerce div.product .woocommerce-tabs ul.tabs li > a:hover,
	.woocommerce div.product form.cart .quantity span,
	.widget_shopping_cart_content p.total strong,
	.elementor-widget-wp-widget-woocommerce_widget_cart p.total strong,
	.woocommerce .checkout-login-coupon-wrapper .woocommerce-info,
	.ts-team-members h3,
	.ts-search-result-container > p,
	.woocommerce .button.button-border,
	.button.button-border,
	.widget-title,
	.ts-countdown.text-light .counter-wrapper > div,
	.total .total-title,
	.cart_list .icon,
	.single-counter-wrapper > span,
	.woocommerce div.product .entry-title,
	#ts-mobile-button-bottom a,
	.ts-floating-sidebar .close, 
	#ts-quickshop-modal .close,
	#ts-product-360-modal .close,
	#ts-add-to-cart-popup-modal span.close,
	.ts-store-notice .close,
	.woocommerce table.cart td.actions .coupon .button,
	body .cart-empty.woocommerce-info,
	#add_payment_method #payment div.payment_box p, 
	.woocommerce-cart #payment div.payment_box p, 
	.woocommerce-checkout #payment div.payment_box p,
	.woocommerce table.shop_table.order_details tfoot td,
	.woocommerce table.shop_table_responsive tr td:before, 
	.woocommerce-page table.shop_table_responsive tr td:before,
	.ts-tiny-cart-wrapper li div.blockUI.blockOverlay:after,
	.widget_shopping_cart li div.blockUI.blockOverlay:after,
	.elementor-widget-wp-widget-woocommerce_widget_cart li div.blockUI.blockOverlay:after,
	.dropdown-container ul.cart_list li.loading:after,
	.thumbnail-wrapper .button-in.wishlist > a.loading:after,
	.meta-wrapper .button-in.wishlist > a.loading:after,
	.woocommerce a.button.loading:after,
	.woocommerce button.button.loading:after,
	.woocommerce input.button.loading:after,
	.meta-wrapper .button-in a.compare div.blockUI.blockOverlay:after,
	.thumbnail-wrapper .button-in a.compare div.blockUI.blockOverlay:after,
	div.blockUI.blockOverlay:after,
	.woocommerce div.blockUI.blockOverlay:after,
	body div.product .summary .yith-wcwl-add-to-wishlist a.loading:after,
	div.wpcf7 .ajax-loader:after,
	.woocommerce p.stars a:hover,
	.woocommerce #reviews #comments ol.commentlist li .comment-text p.meta,
	.shipping-calculator-button,
	#order_review_heading,
	.woocommerce form.login,
	.woocommerce form.register,
	.woocommerce .checkout-login-coupon-wrapper .checkout_coupon,
	.mailchimp-subscription .widgettitle,
	.woocommerce table.shop_table.order_details tfoot th,
	.woocommerce table.shop_table.customer_details th,
	.woocommerce #reviews #reply-title,
	fieldset legend,
	.woocommerce ul.order_details li strong,
	.portfolio-info > span:first-child,
	.single-portfolio .info-content .entry-title,
	.quantity .number-button:hover:before,
	.quantity .number-button:hover:after,
	.woocommerce .checkout-login-coupon-wrapper .woocommerce-info:before,
	.woocommerce .woocommerce-ordering ul.orderby .orderby-current,
	.woocommerce .woocommerce-ordering .orderby-current, 
	.filter-widget-area-button a,
	.product-on-sale-form label,
	.product-per-page-form > span,
	.product-per-page-form ul.perpage > li span,
	.ts-search-by-category .search-button:before,
	.horizontal-button-text .mailchimp-subscription .newsletter,
	.horizontal-button-text .subscribe-email input[type="email"],
	.horizontal-button-text .subscribe-email input[type="email"]:focus,
	.counter-wrapper > div,
	.account-content h2,
	.woocommerce-MyAccount-content > h2,
	.woocommerce-customer-details > h2,
	.woocommerce-order-details > h2,
	.woocommerce-additional-fields > h3,
	header.woocommerce-Address-title > h3,
	.woocommerce div.wishlist-title h2,
	.ts-countdown:not(.style-inline) .counter-wrapper > div .number-wrapper,
	body table.compare-list tr.remove td > a .remove,
	.woocommerce-product-details__short-description .ul-style.square li:before,
	.chart-table tr:first-child td,
	.sku-wrapper span:not(.sku),
	.availability span:not(.availability-text),
	.brands-link span:not(.brand-links),
	.cats-link span:not(.cat-links),
	.tags-link span:not(.tag-links), 
	.social-sharing > span,
	.woocommerce div.product 
	blockquote:before,
	.single-post article .tags-link a,
	.author-info span.author a,
	body.error404 article > p,
	.ts-team-members h3 a,
	.vertical-button-icon .subscribe-email .button i,
	.horizontal-icon .feature-icon,
	.ts-shop-result-count,
	.woocommerce.archive #primary > .woocommerce-info:before,
	.woocommerce.archive #primary > .woocommerce-info,
	.ts-active-filters .widget_layered_nav_filters ul li a,
	.author-info,
	.woocommerce div.product div.images .woocommerce-product-gallery__trigger:hover,
	.yith-wfbt-section .yith-wfbt-images .image_plus,
	.yith-wfbt-submit-block .total_price_label,
	#page .wishlist-title a.show-title-form,
	.woocommerce .woocommerce-tabs table.shop_attributes a,
	#comments .wcpr-overall-rating-right .wcpr-overall-rating-right-total,
	#comments li.wcpr-filter-button-li a,
	.tagcloud a,
	.woocommerce.item-layout-list .heading-title a,
	.ts-product-categories-widget-wrapper .all-categories > span,
	.ts-cart-checkout-process-bar .status,
	.single-counter-wrapper .availability-bar .sold,
	#page .summary .ts-buy-now-button,
	.ts-list-of-product-categories-wrapper.style-horizontal li a,
	.ts-list-of-product-categories-wrapper .owl-nav > div,
	.cart-dropdown-form .clear-cart-button,
	div.product .single-navigation > a > span,
	.ts-product-size-chart-button:hover,
	.elementor-image figcaption,
	.blocks-gallery-item__caption figcaption,
	.wp-block-table strong,
	table strong,
	.woocommerce div.product form.cart .variations label,
	.yith-wfbt-items label,
	.widget_recent_comments .comment-author-link a,
	.elementor-widget-wp-widget-recent-comments .comment-author-link a,
	.quantity input[type^="button"],
	/* Compare table */
	body table.compare-list th,
	body table.compare-list tr.title th,
	body table.compare-list tr.image th,
	body table.compare-list tr.price th{
		color: <?php echo esc_html($ts_text_bold_color); ?>;
	}
	@media only screen and (max-width: 1200px){
		body:not(.ts-desktop) .meta-wrapper .button-in a:hover,
		body:not(.ts-desktop) #main .product-group-button-meta .loop-add-to-cart a:hover{
			color: <?php echo esc_html($ts_text_bold_color); ?>;
		}
		body:not(.ts-desktop) .meta-wrapper .button-in a:hover div.blockUI.blockOverlay:after,
		body:not(.ts-desktop) body .product-group-button-meta div.loop-add-to-cart a:hover.loading:after{
			border-top-color: <?php echo esc_html($ts_text_bold_color); ?>;
			border-left-color: <?php echo esc_html($ts_text_bold_color); ?>;
		}
	}
	@media only screen and (max-width: 767px){
		.ts-popup-modal .product-size-chart-container .close{
			color: <?php echo esc_html($ts_text_bold_color); ?>;
		}
	}
	.cats-portfolio a:hover,
	.ts-product-in-product-type-tab-wrapper .column-tabs ul.tabs li{
		color: <?php echo esc_html($ts_text_bold_color); ?>;
		background-color: transparent;
		border-color: <?php echo esc_html($ts_text_bold_color); ?>;
	}
	.ts-product-in-product-type-tab-wrapper .column-tabs ul.tabs li:hover,
	.ts-product-in-product-type-tab-wrapper .column-tabs ul.tabs li.current,
	.woocommerce div.product form.cart .button,
	.woocommerce .subscribe-email .button:hover,
	.subscribe-email .button:hover,
	.post-password-form input[type^="submit"]{
		color: <?php echo esc_html($ts_main_content_background_color); ?>;
		background-color: <?php echo esc_html($ts_text_bold_color); ?>;
		border-color: <?php echo esc_html($ts_text_bold_color); ?>;
	}
	#ts-search-popup .ts-button-close{
		color: <?php echo esc_html($ts_text_bold_color); ?> !important;
	}
	.woocommerce .button.button-border,
	.button.button-border,
	.product-wrapper .color-swatch > div.active,
	.product-wrapper .color-swatch > div:hover,
	#customer_login h2:after,
	.woocommerce .checkout #order_review,
	.product-filter-by-color ul li.chosen a, 
	.product-filter-by-color ul li:hover a, 
	.ts-product-attribute > div.color:hover,
	.ts-product-attribute > div.selected,
	.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
	.more-less-buttons a:before,
	.woocommerce .checkout-login-coupon-wrapper .woocommerce-info,
	.woocommerce .woocommerce-widget-layered-nav-list .woocommerce-widget-layered-nav-list__item.chosen a,
	.woocommerce .woocommerce-widget-layered-nav-list .woocommerce-widget-layered-nav-list__item:hover a,
	.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
	.woocommerce .product figure .color-image.active span:before,
	.woocommerce .product figure .color.active span:before,
	body.single article .entry-format:after,
	.summary .quantity input.qty,
	.single-post article .tags-link a:hover,
	.single-navigation-1 > a,
	.single-navigation-2 > a,
	.theme-title .heading-title,
	.comments-title .heading-title,
	#comment-wrapper .heading-title,
	.woocommerce-checkout #order_review_heading,
	.woocommerce .cross-sells > h2,
	.woocommerce .up-sells > h2,
	.woocommerce .related > h2,
	.widget_price_filter .price_slider_amount input[type="text"]:focus,
	#add_payment_method table.cart td.actions .coupon .input-text,
	.woocommerce-cart table.cart td.actions .coupon .input-text,
	.woocommerce-checkout table.cart td.actions .coupon .input-text,
	.widget-title-wrapper a.block-control:hover,
	.widget-title-wrapper a.block-control.active,
	.yith-wfbt-section li .checkboxbutton,
	.ts-cart-checkout-process-bar .status,
	.widget_media_image:hover img,
	.elementor .elementor-widget-wp-widget-media_image:hover img,
	.woocommerce div.product div.images .flex-control-thumbs li img:hover,
	.woocommerce div.product div.images .flex-control-thumbs li img.flex-active,
	.product-on-sale-form label:before,
	#page .summary .ts-buy-now-button:hover,
	.cart-dropdown-form .clear-cart-button:after,
	#ts-product-360-modal .close,
	.ts-megamenu-container .elementor-widget-wp-widget-media_image a:hover{
		border-color: <?php echo esc_html($ts_text_bold_color); ?>;
	}
	@media only screen and (max-width: 767px){
		.ts-popup-modal .product-size-chart-container .close:before{
			border-color: <?php echo esc_html($ts_text_bold_color); ?>;
		}
	}

	#page div.product .summary a.compare.loading:after,
	#yith-woocompare table.compare-list tr.remove td > a .blockOverlay:after,
	#page div.product .summary .yith-wcwl-add-to-wishlist a.loading:after,
	.images.loading:after,
	.ts-product .content-wrapper.loading:after,
	.ts-logo-slider-wrapper.loading .content-wrapper:after,
	.related-posts.loading .content-wrapper:after,
	.woocommerce .product figure.loading:after,
	.ts-blogs-widget-wrapper.loading:after,
	.ts-recent-comments-widget-wrapper.loading:after,
	.blogs article a.gallery.loading:after,
	.ts-blogs-wrapper.loading .content-wrapper:after,
	.ts-testimonial-wrapper .items.loading:after,
	.ts-twitter-slider .items.loading:after,
	article .thumbnail.loading:after,
	.ts-portfolio-wrapper.loading:after,
	.thumbnails.loading:after,
	.widget-container .gallery.loading figure:after,
	.ts-product-category-wrapper .content-wrapper.loading:after,
	.thumbnails-container.loading:after,
	.images-slider-wrapper .image-items.loading:after,
	.ts-instagram-wrapper.loading:after,
	.column-products.loading:after,
	.image-gallery.loading:after,
	.ts-team-members .loading:after,

	.ts-search-by-category .search-content.loading ~ .search-button:before,
	#page div.product .summary a.compare.loading:after,
	#yith-woocompare table.compare-list tr.remove td > a .blockOverlay:after,
	#page div.product .summary .yith-wcwl-add-to-wishlist a.loading:after,
	.cart-dropdown-form.loading .form-content:before,

	.ts-tiny-cart-wrapper li div.blockUI.blockOverlay:after,
	.widget_shopping_cart li div.blockUI.blockOverlay:after,
	.elementor-widget-wp-widget-woocommerce_widget_cart li div.blockUI.blockOverlay:after,
	.dropdown-container ul.cart_list li.loading:after,
	.woocommerce a.button.loading:after,
	.woocommerce button.button.loading:after,
	.woocommerce input.button.loading:after,
	div.product .summary .yith-wcwl-add-to-wishlist a.loading:after,
	div.blockUI.blockOverlay:after,
	.woocommerce div.blockUI.blockOverlay:after,
	div.wpcf7 .ajax-loader:after,
	.woocommerce-wishlist .product-add-to-cart a.loading:after{
		border-top-color: <?php echo esc_html($ts_text_bold_color); ?>;
		border-left-color: <?php echo esc_html($ts_text_bold_color); ?>;
	}
	.woocommerce .widget_price_filter .ui-slider-horizontal .ui-slider-range:before{
		background-color: <?php echo esc_html($ts_text_bold_color); ?>;
	}
	.woocommerce .button.button-border:hover,
	.button.button-border:hover{
		background-color: <?php echo esc_html($ts_text_bold_color); ?>;
		color: <?php echo esc_html($ts_main_content_background_color); ?>;
		border-color: <?php echo esc_html($ts_text_bold_color); ?>;
	}

	/* Slider */
	.owl-dots > div > span, body .flex-control-paging li a, 
	body .theme-default .nivo-controlNav a, 
	body .theme-default .nivo-controlNav a.active{
		border-color: <?php echo esc_html($ts_text_bold_color); ?>;
	}
	.owl-dots > div.active > span:before,
	.owl-dots > div:hover > span:before,
	.owl-dots > div.active > span,
	.owl-dots > div:hover > span,
	body .theme-default .nivo-controlNav a.active,
	body .theme-default .nivo-controlNav a.active:before,
	body .theme-default .nivo-controlNav a.hover:before{
		background: <?php echo esc_html($ts_text_bold_color); ?>;
	}

	/* Text Bold Hover */
	.avatar-name a:hover,
	h4.heading-title > a:hover,
	h1 > a:hover,
	h2 > a:hover,
	h3 > a:hover,
	h4 > a:hover,
	h5 > a:hover,
	h6 > a:hover,
	body a.button-text:hover,
	body .button-text a:hover,
	.single-navigation-1 a:hover,
	.single-navigation-2 a:hover,
	.more-less-buttons a:hover,
	form.cart .reset_variations:hover,
	.widget-container .post_list_widget > li a.post-title:hover,
	.dashboard-widget.products ul li a:hover,
	.woocommerce .checkout-login-coupon-wrapper .woocommerce-info a:hover,
	.view-all-wrapper a:hover,
	.comments-area .reply a:hover,
	.ts-search-by-category .search-button:hover:before,
	.portfolio-meta .heading-title a:hover,
	.portfolio-inner .item h3 a:hover,
	.list-posts .heading-title a:hover,
	.woocommerce table.cart td.actions .coupon .button:hover,
	.ts-testimonial-wrapper.text-light .ts-testimonial-wrapper h4.name a:hover,
	.ts-twitter-slider.text-light .twitter-content h4.name > a:hover,
	label a:hover,
	.shipping-calculator-button:hover,
	.single-portfolio .portfolio-info:not(.social-sharing) a:hover,
	.dashboard-widget.products ul li a:hover,
	.add-to-cart-popup-content .product-meta a:hover,
	.column-content .list-categories li.current,
	.column-content .list-categories li:hover,
	.widget-container ul.product_list_widget li > a:hover,
	.widget-container ul.product_list_widget li .ts-wg-meta > a:hover,
	.woocommerce .widget-container ul.product_list_widget li .ts-wg-meta > a:hover,
	.woocommerce ul.product_list_widget .ts-wg-meta > a:hover,
	.ts-team-members h3 a:hover,
	body .comment-meta .button-text a:hover,

	.widget-container ul > li a:hover,
	.elementor-widget-container > ul > li a:hover,
	.elementor-widget-wp-widget-nav_menu ul > li a:hover,
	.dokan-widget-area .widget ul li > a:hover,
	.dokan-orders-content .dokan-orders-area ul.order-statuses-filter li.active a,
	.dokan-orders-content .dokan-orders-area ul.order-statuses-filter li:hover a,
	.dokan-dashboard .dokan-dashboard-content li.active > a,
	.dokan-orders-content .dokan-orders-area ul.order-statuses-filter li a:hover,
	.widget_categories > ul li.cat-parent.active > a{
		color: <?php echo esc_html($ts_text_bold_hover); ?>;
	}
	.single-navigation-1 > a:hover:after,
	.single-navigation-2 > a:hover:after,
	.summary .quantity input.qty:focus{
		border-color: <?php echo esc_html($ts_text_bold_hover); ?>;
	}

	/* Button Nav Slider */
	.owl-nav > div,
	div.product .single-navigation > div > a{
		color: <?php echo esc_html($ts_text_bold_color); ?>;
		background: <?php echo esc_html($ts_main_content_background_color); ?>;
		border-color: <?php echo esc_html($ts_border_color); ?>;
	}
	div.product .single-navigation > div > a:hover,
	.owl-nav > div:hover,
	.single-portfolio .thumbnail .owl-nav > div:hover{
		color: <?php echo esc_html($ts_main_content_background_color); ?>;
		background: <?php echo esc_html($ts_text_bold_color); ?>;
		border-color: <?php echo esc_html($ts_text_bold_color); ?>;
	}

	/* PRIMARY COLOR */
	html body > h1 a.close,
	.style-inline .counter-wrapper *{
		color: <?php echo esc_html($ts_text_color_in_bg_primary); ?>;
	}

	/* Pagination */
	.woocommerce nav.woocommerce-pagination ul li a.next:hover,
	.woocommerce nav.woocommerce-pagination ul li a.prev:hover,
	.ts-pagination ul li a.prev:hover,
	.ts-pagination ul li a.next:hover,
	.woocommerce nav.woocommerce-pagination ul li a.next:focus,
	.woocommerce nav.woocommerce-pagination ul li a.prev:focus,
	.ts-pagination ul li a.prev:focus,
	.ts-pagination ul li a.next:focus,
	.dokan-pagination-container .dokan-pagination li:hover a,
	.dokan-pagination-container .dokan-pagination li.active a,
	.ts-pagination ul li a:hover,
	.ts-pagination ul li a:focus,
	.ts-pagination ul li span.current,
	.post-nav-links > a:hover,
	.post-nav-links > span,
	.woocommerce nav.woocommerce-pagination ul li a:hover,
	.woocommerce nav.woocommerce-pagination ul li span.current,
	.woocommerce nav.woocommerce-pagination ul li a:focus,

	.product-per-page-form ul.perpage ul li a.current,
	.product-per-page-form ul.perpage ul li:hover a,
	.woocommerce .woocommerce-ordering .orderby li a.current,
	.woocommerce .woocommerce-ordering .orderby li a:hover,
	.dokan-dashboard .dokan-dashboard-content ul.dokan_tabs li.active > a,
	.dokan-dashboard .dokan-dashboard-content ul.dokan_tabs li > a:hover,
	body .select2-container--default .select2-results__option[aria-selected=true],
	body .select2-container--default .select2-results__option--highlighted[aria-selected],
	.order-number a,
	.ol-style.icon-primary li:before,
	.ul-style.icon-primary > li:before,
	.woocommerce .checkout-login-coupon-wrapper .woocommerce-info a,
	.widget_recent_entries .post-date,
	.primary-color,
	.phone-number,
	#page .comments-area .entry-meta-top .author a,
	.widget_recent_comments .comment-author-link a:hover,
	.elementor-widget-wp-widget-recent-comments .comment-author-link a:hover,
	.entry-meta-top > span:before,
	#page .entry-meta-top span.author a:hover,
	.ts-product-video-button:hover,
	.ts-product-360-button:hover,
	.summary .cat-links a:hover,
	.portfolio-info .cat-links a:hover,
	.ts-portfolio-wrapper .filter-bar li:hover,
	.ts-portfolio-wrapper .filter-bar li.current,
	div.product .single-navigation > a > span:hover,
	li.item-strong-color > a > .menu-label,
	body .pp_pic_holder a.pp_close:hover,
	body .pp_pic_holder .pp_nav .pp_play:hover,
	body .pp_pic_holder .pp_nav .pp_pause:hover,
	body .pp_pic_holder .pp_arrow_next:hover,
	body .pp_pic_holder .pp_arrow_previous:hover,
	p.lost_password a:hover, 
	#page .summary .yith-wcwl-add-to-wishlist a:hover,
	#page .summary a.compare:hover,
	.my-account-wrapper .forgot-pass a:hover, 
	body .my-account-wrapper .form-content a.sign-up:hover,
	.logged-in-as a:first-child,
	span.comment-author-link a,
	.elementor-widget-wp-widget-recent-comments span.comment-author-link a,
	.tagcloud a:hover,
	.brands-link a:hover,
	.tags-link a:hover,
	.wp-block-archives li a:hover,
	.wp-block-latest-posts li a:hover,
	.wp-block-tag-cloud a:hover,
	.wp-block-rss li a:hover,
	header .header-language .wpml-ls-item li a:hover,
	header .header-currency .wcml_currency_switcher li a:hover,
	.account-dropdown-form ul li > a:hover,
	.woocommerce-product-rating .woocommerce-review-link:hover,
	.woocommerce-checkout #payment .payment_method_paypal .about_paypal:hover,
	p.lost_password a:hover,
	.availability-bar span span.already-sold,
	span.author a,
	.author-info span.author a:hover,
	*:not(.ts-mailchimp-subscription-shortcode) > .mailchimp-subscription button,
	.elementor-widget-wp-widget-ts_mailchimp_subscription .subscribe-widget button,
	body.error404 article > .heading-font-2,
	div.wpcf7 label > span,
	.woocommerce .woocommerce-ordering .orderby-current:hover, 
	.filter-widget-area-button a.active,
	.filter-widget-area-button a.active,
	.filter-widget-area-button a:hover,
	.product-on-sale-form:hover label,
	.product-on-sale-form:hover label:before,
	.product-on-sale-form.checked label,
	.product-on-sale-form.checked label:before,
	.woocommerce .woocommerce-ordering:hover ul.orderby .orderby-current,
	.woocommerce .woocommerce-ordering:hover .orderby-current,
	.product-per-page-form ul.perpage > li:hover span,
	.ts-product-categories-widget div > ul > li.current > a:after, 
	.widget_product_categories > ul > li.current-cat > a:after,  
	.elementor-widget-wp-widget-ts_product_categories div > ul > li.current > a:after,
	.elementor-widget-wp-widget-woocommerce_product_categories ul > li.current-cat > a:after,
	.elementor-widget-wp-widget-ts_product_categories ul > li.current > a,
	.elementor-widget-wp-widget-ts_product_categories ul > li > a:hover,
	.elementor-widget-wp-widget-woocommerce_product_categories ul > li.current-cat > a,
	.elementor-widget-wp-widget-woocommerce_product_categories ul > li > a:hover,
	.ts-product-categories-widget ul > li.current > a,
	.ts-product-categories-widget ul > li a:hover, 
	.widget_product_categories ul > li.current-cat > a,
	.widget_product_categories ul > li a:hover,
	.product-filter-by-brand div > ul > li.selected > label:after,
	.product-filter-by-brand ul > li.selected > label,
	.product-filter-by-brand ul li > label:hover,
	.product-filter-by-availability ul > li.selected label:after,
	.product-filter-by-availability ul > li.selected *,
	.product-filter-by-availability ul li:hover *, 
	.ts-active-filters .widget_layered_nav_filters ul li a:hover,
	.yith-wfbt-section li .checkboxbutton.checked:after,
	#page .wishlist-title a.show-title-form:hover,
	.woocommerce .woocommerce-tabs table.shop_attributes a:hover,
	.single-portfolio .portfolio-info a.portfolio-url,
	.ts-shortcode a.view-more:hover,
	.ts-shortcode a.shop-all-button:hover,
	.nav-text .owl-nav > div:hover,
	.woocommerce.item-layout-list .heading-title a:hover,
	.ts-list-of-product-categories-wrapper.style-horizontal li a:hover,
	.ts-list-of-product-categories-wrapper .owl-nav > div:hover,
	.ts-list-of-product-categories-wrapper.style-default .list-categories li a:hover,
	ul.info-content li:before,
	.ts-product-in-category-tab-wrapper .column-tabs ul.tabs li:hover,
	.ts-product-in-category-tab-wrapper .column-tabs ul.tabs li.current,
	.woocommerce .widget_price_filter .price_slider_amount .button:hover,
	.woocommerce-page .widget_price_filter .price_slider_amount .button:hover,
	.ts-team-members .member-social a:hover,
	.contact-address:before,
	.contact-phone:before,
	.contact-email:before,
	.contact-time:before,
	#ts-mobile-button-bottom a:hover,
	/* Social */
	.social-icons li a:hover,
	footer#colophon .social-icons li a:hover,
	.social-icons.style-circle-multicolor li.custom a:hover,
	footer#colophon .social-icons.style-circle-multicolor li.custom a:hover,
	.style-vertical-multicolor li.custom a:hover i,
	.social-icons:not(.style-vertical) li.custom .ts-tooltip:before{
		color:<?php echo esc_html($ts_primary_color); ?>;
	}
	header .header-template .my-account-wrapper .forgot-pass a:hover,
	body .my-account-wrapper .form-content a.sign-up:hover,
	body .pp_nav .pp_play:hover:before,
	body .pp_nav .pp_pause:hover:before,
	body .pp_arrow_previous:hover:before,
	body .pp_arrow_next:hover:before{
		color: <?php echo esc_html($ts_primary_color); ?> !important;
	}
	.ts-product-categories-widget div > ul > li.current > a:before,
	.widget_product_categories ul > li.current-cat > a:before,
	.ts-product-categories-widget div > ul > li > a:hover:before,
	.widget_product_categories ul > li > a:hover:before,
	.elementor-widget-wp-widget-ts_product_categories div > ul > li.current > a:before,
	.elementor-widget-wp-widget-woocommerce_product_categories ul > li.current-cat > a:before,
	.elementor-widget-wp-widget-ts_product_categories div > ul > li > a:hover:before,
	.elementor-widget-wp-widget-woocommerce_product_categories ul > li > a:hover:before,
	.product-filter-by-brand div > ul > li.selected > label:before,
	.product-filter-by-brand div > ul > li > label:hover:before,
	.product-filter-by-availability ul > li.selected label:before,
	.product-filter-by-availability ul > li label:hover:before,
	.woocommerce form.checkout_coupon,
	.menu-wrapper > .ic-close-menu-button:hover,
	.woocommerce div.product div.thumbnails li:hover a img,
	.mobile-menu-wrapper nav > ul > li > ul,
	.shortcode-heading-wrapper .heading-title:after,
	.column-tabs .heading-tab .heading-title:after,
	.ts-shop-result-count > span.bar > span,
	.ts-pagination ul li span.current,
	.woocommerce nav.woocommerce-pagination ul li span.current,
	.post-nav-links > span,
	.tagcloud a:hover:before,
	.yith-wfbt-section li .checkboxbutton.checked,
	.ts-cart-checkout-process-bar > a.active,
	.woocommerce.yith-wfbt-section,
	.single-counter-wrapper .availability-bar .sold,
	.product-on-sale-form.checked label:before,
	.product-on-sale-form:hover label:before,
	/* Social */
	.style-circle-multicolor li.custom a:hover,
	.style-vertical-multicolor li.custom a:hover i,
	.social-icons:not(.style-vertical) li.custom .ts-tooltip:before{
		border-color: <?php echo esc_html($ts_primary_color); ?>;
	}
	.style-inline .counter-wrapper,
	.availability-bar .progress-bar span,
	.social-icons:not(.style-vertical) li.custom .ts-tooltip,
	.ts-tiny-cart-wrapper .ic-cart:after{
		background-color: <?php echo esc_html($ts_primary_color); ?>;
	}
	.elementor-widget-wp-widget-calendar #today,
	*:not(.ts-mailchimp-subscription-shortcode) > .mailchimp-subscription button:hover,
	.elementor-widget-wp-widget-ts_mailchimp_subscription .subscribe-widget button:hover,
	.woocommerce div.product form.cart .button:hover,
	.woocommerce .yith-wfbt-submit-block .yith-wfbt-submit-button,
	.woocommerce .subscribe-email .button,
	.subscribe-email .button,
	.category-best-selling .product-label.best-selling-label,
	.ts-header-intro #page .button.button-primary,
	.post-password-form input[type^="submit"]:hover,
	.label-info,
	/* Social */
	body .social-icons.style-circle-opacity li.custom a:hover,
	body footer#colophon .social-icons.style-circle-opacity li.custom a:hover,
	body .social-icons.style-square li.custom a:hover,
	body footer#colophon .social-icons.style-square li.custom a:hover,
	body .social-icons.style-circle li.custom a:hover,
	body footer#colophon .social-icons.style-circle li.custom a:hover,
	body .social-icons.style-circle-multicolor li.custom a,
	body footer#colophon .social-icons.style-circle-multicolor li.custom a,
	body .style-vertical-multicolor li.custom a i,
	body .social-icons:not(.style-vertical) li.custom .ts-tooltip{
		background-color: <?php echo esc_html($ts_primary_color); ?>;
		color: <?php echo esc_html($ts_text_color_in_bg_primary); ?>;
		border-color: <?php echo esc_html($ts_primary_color); ?>;
	}
	.woocommerce .yith-wfbt-submit-block .yith-wfbt-submit-button:hover{
		border-color: <?php echo esc_html($ts_primary_color); ?>;
		color: <?php echo esc_html($ts_primary_color); ?>;
		background: transparent;
	}

	/* BORDER COLOR */
	*,
	*:before,
	*:after,
	.image-border .add-to-cart-popup-content .product-image img,
	.image-border .thumbnail-wrapper img,
	.quantity .number-button,
	.quantity .minus,
	.quantity .plus,
	.single-post article .tags-link a,
	.woocommerce-account-fields,
	.ts-shortcode .load-more-wrapper,
	.ts-shop-load-more,
	body.error404 article > h1.heading-font-1:after,
	body #yith-woocompare table.compare-list tbody th,
	body #yith-woocompare table.compare-list tbody td,
	.woocommerce table.shop_table,
	.woocommerce-page table.shop_table,
	.woocommerce ul.order_details li,
	.woocommerce div.product form.cart .group_table td,
	.dokan-dashboard .dokan-dashboard-content .edit-account fieldset,
	body > table.compare-list,
	.woocommerce table.my_account_orders tbody tr:first-child td:first-child,
	body .woocommerce table.my_account_orders td.order-actions,
	.woocommerce table.shop_attributes th,
	.woocommerce table.shop_attributes td,
	.woocommerce .widget_layered_nav ul,
	.woocommerce table.shop_table,
	.woocommerce table.shop_table td,
	.woocommerce table.wishlist_table tbody td,
	.woocommerce p.stars a.star-1,
	.woocommerce p.stars a.star-2,
	.woocommerce p.stars a.star-3,
	.woocommerce p.stars a.star-4,
	.woocommerce p.stars a.star-5,
	.woocommerce #reviews #comments ol.commentlist li .comment-text,
	.woocommerce table.shop_attributes,
	.woocommerce #reviews #comments ol.commentlist li ,
	.dataTables_wrapper,
	.woocommerce div.product div.thumbnails li a img,
	.woocommerce div.product div.images-thumbnails img,
	.woocommerce ul.cart_list li img,
	.woocommerce ul.product_list_widget li img,
	.woocommerce-account .woocommerce-MyAccount-navigation li a,
	.widget_price_filter .price_slider_amount input[type="text"],
	.woocommerce div.product div.images .flex-control-thumbs li img,
	.widget_media_image img,
	.elementor .elementor-widget-wp-widget-media_image img,
	#page .summary .ts-buy-now-button,
	#ts-quickshop-modal .close,
	.cats-portfolio a,
	.ts-megamenu-container .elementor-widget-wp-widget-media_image a{
		border-color: <?php echo esc_html($ts_border_color); ?>;
	}
	.nav-text .owl-nav > div.owl-next:before{
		border-color: <?php echo esc_html($ts_border_color); ?>;
	}
	.entry-meta-top > span:after{
		color: <?php echo esc_html($ts_border_color); ?>;
	}
	@media only screen and (max-width: 767px){
		.ts-popup-modal .product-size-chart-container .close{
			border-color: <?php echo esc_html($ts_border_color); ?>;
		}
	}
	.ts-product-attribute > div:before{
		background-color: <?php echo esc_html($ts_border_color); ?>;
		border-color: <?php echo esc_html($ts_border_color); ?>;
	}
	.availability-bar .progress-bar{
		background-color: <?php echo esc_html($ts_border_color); ?>;
	}
	.woocommerce .products,
	.woocommerce .products .product,
	#page .ts-slider .products .owl-item,
	.ts-product .product-group:before,
	.column-content > .list-categories,
	.ts-product.ts-slider .products .owl-stage-outer, 
	.woocommerce .ts-product.ts-slider .products .owl-stage-outer, 
	.up-sells .products .owl-stage-outer, 
	.cross-sells .products .owl-stage-outer,
	.related .products .owl-stage-outer,
	.wishlist_table.mobile li,
	.shop_table *,
	.ts-product.ts-slider .products .owl-stage-outer:before, 
	.woocommerce .ts-product.ts-slider .products .owl-stage-outer:before, 
	.up-sells .products .owl-stage-outer:before, 
	.cross-sells .products .owl-stage-outer:before, 
	.related .products .owl-stage-outer:before,
	.ts-product.ts-slider .products .owl-stage-outer:after, 
	.woocommerce .ts-product.ts-slider .products .owl-stage-outer:after, 
	.up-sells .products .owl-stage-outer:after, 
	.cross-sells .products .owl-stage-outer:after, 
	.related .products .owl-stage-outer:after{
		border-color: <?php echo esc_html($ts_border_product_color); ?>;
	}

	/* BUTTON */
	a.button,
	button, 
	input[type^="submit"], 
	.woocommerce a.button, 
	.woocommerce button.button, 
	.woocommerce input.button,  
	.woocommerce a.button.alt, 
	.woocommerce button.button.alt, 
	.woocommerce input.button.alt,  
	.woocommerce a.button.disabled, 
	.woocommerce a.button:disabled, 
	.woocommerce a.button:disabled[disabled], 
	.woocommerce button.button.disabled, 
	.woocommerce button.button:disabled, 
	.woocommerce button.button:disabled[disabled], 
	.woocommerce input.button.disabled, 
	.woocommerce input.button:disabled, 
	.woocommerce input.button:disabled[disabled],
	.woocommerce #respond input#submit, 
	.shopping-cart p.buttons a,
	.threesixty .nav_bar a,
	#comments .wcpr-filter-button,

	.woocommerce a.button.alt.disabled,
	.woocommerce a.button.alt.disabled:hover,
	.woocommerce a.button.alt:disabled,
	.woocommerce a.button.alt:disabled:hover,
	.woocommerce a.button.alt:disabled[disabled],
	.woocommerce a.button.alt:disabled[disabled]:hover,
	.woocommerce button.button.alt.disabled,
	.woocommerce button.button.alt.disabled:hover,
	.woocommerce button.button.alt:disabled,
	.woocommerce button.button.alt:disabled:hover,
	.woocommerce button.button.alt:disabled[disabled],
	.woocommerce button.button.alt:disabled[disabled]:hover,
	.woocommerce input.button.alt.disabled,
	.woocommerce input.button.alt.disabled:hover,
	.woocommerce input.button.alt:disabled,
	.woocommerce input.button.alt:disabled:hover,
	.woocommerce input.button.alt:disabled[disabled],
	.woocommerce input.button.alt:disabled[disabled]:hover,

	.woocommerce-account .woocommerce-MyAccount-navigation li:hover a,
	.woocommerce-account .woocommerce-MyAccount-navigation li.is-active a,
	.woocommerce div.product form.cart table .button:hover,
	.shopping-cart-wrapper.cart-primary a > .ic-cart,
	.woocommerce .button.button-border-secondary:hover,
	.button.button-border-secondary:hover,
	.portfolio-inner .icon-group a:hover,
	.meta-content .ic-like,
	.woocommerce .woocommerce-form-register .button:hover,
	.woocommerce .wishlist_table .product-add-to-cart a{ 
		background-color: transparent;
		color: <?php echo esc_html($ts_button_text_color); ?>;
		border-color: <?php echo esc_html($ts_button_border_color); ?>;
	}
	.meta-content .ic-like.loading:before{
		border-top-color: <?php echo esc_html($ts_button_text_color); ?>;
		border-left-color: <?php echo esc_html($ts_button_text_color); ?>;
	}
	.ts-tiny-cart-wrapper .dropdown-footer .button.view-cart,
	#ts-add-to-cart-popup-modal .action .button.view-cart,
	.woocommerce.widget_shopping_cart .buttons .button,
	.woocommerce .widget_shopping_cart .buttons .button,
	.elementor-widget-wp-widget-woocommerce_widget_cart .buttons .button,
	.woocommerce table.cart .actions > .button.empty-cart-button,
	body .woocommerce table.compare-list .add-to-cart td a:hover{
		background-color: transparent;
		color: <?php echo esc_html($ts_button_text_color); ?>;
		border-color: <?php echo esc_html($ts_button_border_color); ?>;
	}
	a.button:hover,
	button:hover, 
	input[type^="submit"]:hover, 
	.woocommerce a.button:hover, 
	.woocommerce button.button:hover, 
	.woocommerce input.button:hover,  
	.woocommerce a.button.alt:hover, 
	.woocommerce button.button.alt:hover, 
	.woocommerce input.button.alt:hover,  
	.woocommerce #respond input#submit:hover, 
	.woocommerce form.register .button,
	.threesixty .nav_bar a:hover,
	body .mfp-close-btn-in .mfp-close:hover,
	.woocommerce .woocommerce-form-register .button,
	.woocommerce .wishlist_table .product-add-to-cart a:hover,
	.cart_totals .wc-proceed-to-checkout a.button.view-cart:hover,
	.ts-tiny-cart-wrapper .dropdown-footer .button.view-cart:hover,
	#ts-add-to-cart-popup-modal .action .button.view-cart:hover,
	.woocommerce.widget_shopping_cart .buttons .button:hover,
	.woocommerce .widget_shopping_cart .buttons .button:hover,
	.elementor-widget-wp-widget-woocommerce_widget_cart .buttons .button:hover,
	.woocommerce table.cart .actions > .button.empty-cart-button:hover,
	.woocommerce .woocommerce-widget-layered-nav-list .woocommerce-widget-layered-nav-list__item.chosen a,
	.woocommerce .woocommerce-widget-layered-nav-list .woocommerce-widget-layered-nav-list__item:hover a,
	.ts-product-attribute > div:not(.color) a:hover,
	.ts-product-attribute > div:not(.color).selected a,
	#comments .wcpr-filter-button:hover,
	.portfolio-inner .icon-group a,
	.meta-content .ic-like:hover,
	body .woocommerce table.compare-list .add-to-cart td a,
	input[type='submit'].dokan-btn:hover, 
	a.dokan-btn:hover, 
	.dokan-btn:hover, 
	input[type='submit'].dokan-btn:focus, 
	a.dokan-btn:focus, 
	.dokan-btn:focus, 
	input[type='submit'].dokan-btn.focus, 
	a.dokan-btn.focus, 
	.dokan-btn.focus{
		background-color: <?php echo esc_html($ts_button_background_hover); ?>;
		color: <?php echo esc_html($ts_button_text_hover); ?>;
		border-color: <?php echo esc_html($ts_button_border_hover); ?>;
	}

	/* SPECIAL BUTTON */
	.woocommerce .checkout #order_review > *,
	.woocommerce .cart-collaterals .cart_totals{
		border-color: <?php echo esc_html($ts_special_button_text_color); ?>;
	}
	.woocommerce #payment #place_order,
	#comments .wcpr-overall-rating-left-average,
	.woocommerce .cart_totals .wc-proceed-to-checkout a.button,
	.ts-tiny-cart-wrapper .dropdown-footer .button.checkout-button,
	.woocommerce.widget_shopping_cart .buttons .button.checkout,
	.woocommerce .widget_shopping_cart .buttons .button.checkout,
	.elementor-widget-wp-widget-woocommerce_widget_cart .buttons .button.checkout,
	#ts-add-to-cart-popup-modal .action .button{
		background-color: <?php echo esc_html($ts_special_button_text_color); ?>;
		color: <?php echo esc_html($ts_main_content_background_color); ?>;
		border-color: <?php echo esc_html($ts_special_button_text_color); ?>;
	}
	.woocommerce #payment #place_order:hover,
	.woocommerce .cart_totals .wc-proceed-to-checkout a.button:hover,
	.ts-tiny-cart-wrapper .dropdown-footer .button.checkout-button:hover,
	.woocommerce.widget_shopping_cart .buttons .button.checkout:hover,
	.woocommerce .widget_shopping_cart .buttons .button.checkout:hover,
	.elementor-widget-wp-widget-woocommerce_widget_cart .buttons .button.checkout:hover,
	#ts-add-to-cart-popup-modal .action .button:hover{
		background-color: transparent;
		color: <?php echo esc_html($ts_special_button_text_color); ?>;
		border-color: <?php echo esc_html($ts_special_button_text_color); ?>;
	}
	.shopping-cart-wrapper .subtotal .amount,
	.woocommerce table.order_details tfoot tr:last-child .amount,
	.total .amount,
	.order-total .amount,
	#order_review .order-total .amount,
	.quantity .plus:hover,
	.quantity .minus:hover{
		color: <?php echo esc_html($ts_special_button_text_color); ?>;
	}

	/* BREADCRUMB */
	.breadcrumb-title-wrapper{
		background-color: <?php echo esc_html($ts_breadcrumb_background_color); ?>;
	}
	.breadcrumb-title-wrapper .breadcrumb-title *{
		color: <?php echo esc_html($ts_breadcrumb_text_color); ?>;
	}
	.breadcrumb-title-wrapper .breadcrumb-title a,
	.breadcrumb-title-wrapper .breadcrumb-title h1{
		color: <?php echo esc_html($ts_breadcrumb_heading_color); ?>;
	}
	.breadcrumb-title-wrapper .breadcrumb-title a:hover{
		color: <?php echo esc_html($ts_breadcrumb_link_color_hover); ?>;
	}
	.breadcrumb-title-wrapper.breadcrumb-v3 .breadcrumb-title *{
		color: <?php echo esc_html($ts_breadcrumb_img_text_color); ?>;
	}
	.breadcrumb-title-wrapper.breadcrumb-v3 .breadcrumb-title a,
	.breadcrumb-title-wrapper.breadcrumb-v3 .breadcrumb-title h1{
		color: <?php echo esc_html($ts_breadcrumb_img_heading_color); ?>;
	}
	.breadcrumb-title-wrapper.breadcrumb-v3 .breadcrumb-title a:hover{
		color: <?php echo esc_html($ts_breadcrumb_img_link_color_hover); ?>;
	}
	
	/* HEADER COLOR */
	.ts-store-notice{
		background: <?php echo esc_html($ts_header_notice_background_color); ?>;
	}
	/* Header Middle */
	.header-middle{
		background: <?php echo esc_html($ts_middle_header_background_color); ?>;
	}
	.shopping-cart-wrapper .cart-control,
	.icon-menu-sticky-header,
	.my-wishlist-wrapper a,
	.my-account-wrapper .account-control > a,
	header .header-currency .wcml_currency_switcher > a, 
	header .header-language .wpml-ls > ul > li > a,
	div.header-right-2 .right-content a{
		color: <?php echo esc_html($ts_middle_header_text_color); ?>;
	}
	.shopping-cart-wrapper:hover .cart-control, 
	.icon-menu-sticky-header:hover,
	body:not(.logged-in) .my-account-wrapper:hover .account-control > a,
	body.logged-in .my-account-wrapper .account-control > a:hover,
	.my-wishlist-wrapper:hover a,
	header .header-currency:hover .wcml_currency_switcher > a, 
	header .header-language:hover .wpml-ls> ul > li > a,
	header .wpml-ls-legacy-dropdown a:focus,
	div.header-right-2 .right-content a:hover{
		color: <?php echo esc_html($ts_middle_header_text_hover); ?>;
	}
	
	/* Cart */
	.ic-cart .cart-number,
	.tini-wishlist .count-number{
		background: <?php echo esc_html($ts_header_cart_number_bg_color); ?>;
		color: <?php echo esc_html($ts_header_cart_number_color); ?>;
	}
	
	/* Search */
	.ts-search-by-category{
		border-color: <?php echo esc_html($ts_header_search_border_color); ?>;
		background-color: <?php echo esc_html($ts_header_search_background_color); ?>;
	}
	.ts-search-by-category .search-content:before{
		border-color: <?php echo esc_html($ts_header_search_line_color); ?>;
	}
	.ts-search-by-category .select-category,
	.ts-search-by-category .search-content input[type="text"]{
		color: <?php echo esc_html($ts_header_search_text_color); ?>;
	}
	.ts-search-by-category .search-content.loading:after{
		border-top-color: <?php echo esc_html($ts_header_search_text_color); ?>;
		border-left-color: <?php echo esc_html($ts_header_search_text_color); ?>;
	}
	.ts-search-by-category .search-content:after{
		color: <?php echo esc_html($ts_header_search_button_text_color); ?>;
	}
	.ts-search-by-category ::-webkit-input-placeholder{
		color: <?php echo esc_html($ts_header_search_placeholder_text); ?>;
	}
	.ts-search-by-category :-moz-placeholder{ /* Firefox 18- */
		color: <?php echo esc_html($ts_header_search_placeholder_text); ?>;
	}
	.ts-search-by-category ::-moz-placeholder{  /* Firefox 19+ */
		color: <?php echo esc_html($ts_header_search_placeholder_text); ?>;
	}
	.ts-search-by-category :-ms-input-placeholder{
		color: <?php echo esc_html($ts_header_search_placeholder_text); ?>;
	}

	/* Header Bottom */
	.header-bottom{
		background: <?php echo esc_html($ts_bottom_header_background_color); ?>;
		border-color: <?php echo esc_html($ts_bottom_header_border_color); ?>;
	}
	.ts-header .info,
	.ts-header .info [href^=tel]{
		color: <?php echo esc_html($ts_bottom_header_info_text_color); ?>;
	}
	.menu-wrapper > .vertical-menu-wrapper:before{
		border-color: <?php echo esc_html($ts_bottom_header_border_color); ?>;
	}

	/* MENU */
	.vertical-menu-button,
	.vertical-menu-heading,
	.ts-menu > nav.main-menu > ul.menu > li > .ts-menu-drop-icon,
	header nav.main-menu > ul.menu > li > a,
	header nav.main-menu > ul > li > a,
	header nav.main-menu > ul.menu > li.menu-item:before,
	.ts-header-recently-viewed-products .recently-viewed-products-control{
		color: <?php echo esc_html($ts_menu_text_color); ?>;
	}
	@media 
	only screen and (max-width: 1200px) and (min-width: 768px){
		.header-v3 .ts-header .vertical-menu-heading,
		.header-v3 .ts-header .vertical-menu-heading:before{
			color: <?php echo esc_html($ts_menu_text_color); ?>;
		}
		.header-v3 .ts-header .vertical-menu-heading:hover,
		.header-v3 .ts-header .vertical-menu-heading:hover:before{
			color: <?php echo esc_html($ts_menu_text_hover); ?>;
		}
	}

	.vertical-menu-button:hover,
	header nav.main-menu > ul.menu > li.menu-item:hover:before,
	header nav.main-menu > ul.menu > li.current-menu-item:before,
	header nav.main-menu > ul.menu > li.current_page_parent:before,
	header nav.main-menu > ul.menu > li.current-menu-parent:before,
	header nav.main-menu > ul.menu > li.current_page_item:before,
	header nav.main-menu > ul.menu > li.current-menu-ancestor:before,
	header nav.main-menu > ul.menu > li.current-page-ancestor:before,

	.ts-menu > nav.main-menu > ul.menu > li.current-menu-item > .ts-menu-drop-icon,
	.ts-menu > nav.main-menu > ul.menu > li.current_page_parent > .ts-menu-drop-icon,
	.ts-menu > nav.main-menu > ul.menu > li.current-menu-parent > .ts-menu-drop-icon,
	.ts-menu > nav.main-menu > ul.menu > li.current_page_item > .ts-menu-drop-icon,
	.ts-menu > nav.main-menu > ul.menu > li.current-menu-ancestor > .ts-menu-drop-icon,
	.ts-menu > nav.main-menu > ul.menu > li.current-page-ancestor > .ts-menu-drop-icon,
	.ts-menu > nav.main-menu > ul.menu li.current-product_cat-ancestor > .ts-menu-drop-icon,
	header nav.main-menu > ul.menu > li:hover > a,
	header nav.main-menu > ul.menu > li.current-menu-item > a,
	header nav.main-menu > ul.menu > li.current_page_parent > a,
	header nav.main-menu > ul.menu > li.current-menu-parent > a,
	header nav.main-menu > ul.menu > li.current_page_item > a,
	header nav.main-menu > ul.menu > li.current-menu-ancestor > a,
	header nav.main-menu > ul.menu > li.current-page-ancestor > a,
	header nav.main-menu > ul.menu li.current-product_cat-ancestor > a,
	.ts-header-recently-viewed-products:hover .recently-viewed-products-control{
		color: <?php echo esc_html($ts_menu_text_hover); ?>;
	}
	.ts-header nav.vertical-menu > ul > li:after,
	header nav > ul.menu li ul.sub-menu:before{
		background-color: <?php echo esc_html($ts_sub_menu_background_color); ?>;
	}

	/* Menu sub text */
	header nav > ul.menu ul.sub-menu li.menu-item:before,
	header nav > ul.menu ul.sub-menu > li > a,
	header nav > ul.menu .elementor-widget-wp-widget-nav_menu li > a,
	.ts-menu nav > ul.menu ul li > .ts-menu-drop-icon{
		color: <?php echo esc_html($ts_sub_menu_text_color); ?>;
	}

	/* Menu sub hover */
	.ts-menu > nav > ul.menu ul li:hover > .ts-menu-drop-icon,
	.ts-menu > nav > ul.menu ul li.current_page_item > .ts-menu-drop-icon,
	.ts-menu > nav > ul.menu ul li.current-menu-item > .ts-menu-drop-icon,
	.ts-menu > nav > ul.menu ul li.current_page_parent > .ts-menu-drop-icon,
	.ts-menu > nav > ul.menu ul li.current-menu-parent > .ts-menu-drop-icon,
	.ts-menu > nav > ul.menu ul li.current-menu-ancestor > .ts-menu-drop-icon,
	.ts-menu > nav > ul.menu ul li.current-page-ancestor > .ts-menu-drop-icon,
	.ts-menu > nav > ul.menu ul li.current-product_cat-ancestor > .ts-menu-drop-icon,
	header nav > ul.menu ul.sub-menu > li:hover > a,
	header nav > ul.menu ul.sub-menu li.menu-item:hover:before,
	header nav > ul.menu .elementor-widget-wp-widget-nav_menu li:hover > a,
	header nav > ul.menu .elementor-widget-wp-widget-nav_menu li.current-menu-item > a,
	header nav > ul.menu ul.sub-menu li.current-menu-item > a,
	header nav > ul.menu ul.sub-menu li.current_page_parent > a,
	header nav > ul.menu ul.sub-menu li.current-menu-parent > a,
	header nav > ul.menu ul.sub-menu li.current_page_item > a,
	header nav > ul.menu ul.sub-menu li.current-menu-ancestor > a,
	header nav > ul.menu ul.sub-menu li.current-page-ancestor > a,
	header nav > ul.menu ul.sub-menu li.current-product_cat-ancestor > a,

	header nav > ul.menu ul.sub-menu li.current-menu-item:before,
	header nav > ul.menu ul.sub-menu li.current_page_parent:before,
	header nav > ul.menu ul.sub-menu li.current-menu-parent:before,
	header nav > ul.menu ul.sub-menu li.current_page_item:before,
	header nav > ul.menu ul.sub-menu li.current-menu-ancestor:before,
	header nav > ul.menu ul.sub-menu li.current-page-ancestor:before,
	header nav > ul.menu ul.sub-menu li.current-product_cat-ancestor:before{
		color: <?php echo esc_html($ts_sub_menu_text_hover); ?>;
	}

	/* Heading menu */
	.menu-wrapper nav > ul.menu ul.sub-menu h1,
	.menu-wrapper nav > ul.menu ul.sub-menu h2,
	.menu-wrapper nav > ul.menu ul.sub-menu h3,
	.menu-wrapper nav > ul.menu ul.sub-menu h4,
	.menu-wrapper nav > ul.menu ul.sub-menu h5,
	.menu-wrapper nav > ul.menu ul.sub-menu h6,
	.menu-wrapper nav > ul.menu ul.sub-menu .h1,
	.menu-wrapper nav > ul.menu ul.sub-menu .h2,
	.menu-wrapper nav > ul.menu ul.sub-menu .h3,
	.menu-wrapper nav > ul.menu ul.sub-menu .h4,
	.menu-wrapper nav > ul.menu ul.sub-menu .h5,
	.menu-wrapper nav > ul.menu ul.sub-menu .h6{
		color: <?php echo esc_html($ts_sub_menu_heading_color); ?>;
	}

	/* Vertical Menu Sidebar */
	.header-v3 .vertical-menu-heading{
		background-color: <?php echo esc_html($ts_vertical_headding_background_color); ?>;
		color: <?php echo esc_html($ts_vertical_headding_text_color); ?>;
	}
	#vertical-menu-sidebar .vertical-menu-content,
	.ts-header .vertical-menu-wrapper > .vertical-menu:before{
		background: <?php echo esc_html($ts_vertical_menu_background_color); ?>;
	}
	#vertical-menu-sidebar,
	#vertical-menu-sidebar h1,
	#vertical-menu-sidebar h2,
	#vertical-menu-sidebar h3,
	#vertical-menu-sidebar h4,
	#vertical-menu-sidebar h5,
	#vertical-menu-sidebar h6,
	#vertical-menu-sidebar .ts-menu-drop-icon,
	#vertical-menu-sidebar .ts-menu ul li.menu-item a,
	#vertical-menu-sidebar .ts-menu ul li.menu-item:before,
	#vertical-menu-sidebar .close,
	.ts-header nav.vertical-menu > ul.menu > li > a,
	.ts-header nav.vertical-menu > ul.menu > li.menu-item:before{
		color: <?php echo esc_html($ts_vertical_menu_text_color); ?>;
	}
	.ts-header nav.vertical-menu > ul.menu > li,
	#vertical-menu-sidebar *{
		border-color: <?php echo esc_html($ts_vertical_menu_border_color); ?>;
	}
	#vertical-menu-sidebar .sub-menu *{
		border-color: <?php echo esc_html($ts_vertical_menu_border_color); ?>;
	}
	.ts-header nav.vertical-menu > ul.menu > li:hover > a,
	#vertical-menu-sidebar .close:hover,
	#vertical-menu-sidebar ul.menu li.menu-item:hover:before,
	#vertical-menu-sidebar ul.menu li.current-menu-item:before,
	#vertical-menu-sidebar ul.menu li.current_page_parent:before,
	#vertical-menu-sidebar ul.menu li.current-menu-parent:before,
	#vertical-menu-sidebar ul.menu li.current_page_item:before,
	#vertical-menu-sidebar ul.menu li.current-menu-ancestor:before,
	#vertical-menu-sidebar ul.menu li.current-page-ancestor:before,

	#vertical-menu-sidebar ul.menu li.current-menu-item > .ts-menu-drop-icon,
	#vertical-menu-sidebar ul.menu li.current_page_parent > .ts-menu-drop-icon,
	#vertical-menu-sidebar ul.menu li.current-menu-parent > .ts-menu-drop-icon,
	#vertical-menu-sidebar ul.menu li.current_page_item > .ts-menu-drop-icon,
	#vertical-menu-sidebar ul.menu li.current-menu-ancestor > .ts-menu-drop-icon,
	#vertical-menu-sidebar ul.menu li.current-page-ancestor > .ts-menu-drop-icon,
	#vertical-menu-sidebar ul.menu li.current-product_cat-ancestor > .ts-menu-drop-icon,
	#vertical-menu-sidebar ul.menu li.menu-item:hover > a,
	#vertical-menu-sidebar ul.menu li.menu-item:hover:before,
	#vertical-menu-sidebar ul.menu li.current-menu-item > a,
	#vertical-menu-sidebar ul.menu li.current_page_parent > a,
	#vertical-menu-sidebar ul.menu li.current-menu-parent > a,
	#vertical-menu-sidebar ul.menu li.current_page_item > a,
	#vertical-menu-sidebar ul.menu li.current-menu-ancestor > a,
	#vertical-menu-sidebar ul.menu li.current-page-ancestor > a,
	#vertical-menu-sidebar ul.menu li.current-product_cat-ancestor > a,
	#vertical-menu-sidebar .ts-menu-drop-icon.active,
	#vertical-menu-sidebar .ts-menu-drop-icon:hover{
		color: <?php echo esc_html($ts_vertical_menu_text_hover); ?>;
	}
	#vertical-menu-sidebar .ts-menu ul.sub-menu li.menu-item a{
		color: <?php echo esc_html($ts_vertical_sub_menu_text_color); ?>;
	}
	#vertical-menu-sidebar ul.sub-menu li.current-menu-item > .ts-menu-drop-icon,
	#vertical-menu-sidebar ul.sub-menu li.current_page_parent > .ts-menu-drop-icon,
	#vertical-menu-sidebar ul.sub-menu li.current-menu-parent > .ts-menu-drop-icon,
	#vertical-menu-sidebar ul.sub-menu li.current_page_item > .ts-menu-drop-icon,
	#vertical-menu-sidebar ul.sub-menu li.current-menu-ancestor > .ts-menu-drop-icon,
	#vertical-menu-sidebar ul.sub-menu li.current-page-ancestor > .ts-menu-drop-icon,
	#vertical-menu-sidebar ul.sub-menu li.current-product_cat-ancestor > .ts-menu-drop-icon,
	#vertical-menu-sidebar ul.sub-menu li.menu-item:hover > a,
	#vertical-menu-sidebar ul.sub-menu li.menu-item:hover:before,
	#vertical-menu-sidebar ul.sub-menu li.current-menu-item > a,
	#vertical-menu-sidebar ul.sub-menu li.current_page_parent > a,
	#vertical-menu-sidebar ul.sub-menu li.current-menu-parent > a,
	#vertical-menu-sidebar ul.sub-menu li.current_page_item > a,
	#vertical-menu-sidebar ul.sub-menu li.current-menu-ancestor > a,
	#vertical-menu-sidebar ul.sub-menu li.current-page-ancestor > a,
	#vertical-menu-sidebar ul.sub-menu li.current-product_cat-ancestor > a,
	#vertical-menu-sidebar ul.sub-menu .ts-menu-drop-icon.active,
	#vertical-menu-sidebar ul.sub-menu .ts-menu-drop-icon:hover{
		color: <?php echo esc_html($ts_vertical_sub_menu_text_hover); ?>;
	}
	
	/* MOBILE */
	@media only screen and (max-width: 767px){
		.ts-header .header-template,
		.ts-header .header-middle{
			background-color: <?php echo esc_html($ts_header_mobile_background_color); ?>;
		}
		.ts-header .ts-mobile-icon-toggle .icon:before, 
		.ts-header .shopping-cart-wrapper a.cart-control{
			color: <?php echo esc_html($ts_header_mobile_text_color); ?>;
		}
		.ts-header .ic-cart .cart-number{
			color: <?php echo esc_html($ts_header_mobile_cart_number_text_color); ?>;
			background: <?php echo esc_html($ts_header_mobile_cart_number_background_color); ?>;
		}
		.ts-header .ts-search-by-category{
			background: <?php echo esc_html($ts_header_mobile_search_background_color); ?>;
			border-color: <?php echo esc_html($ts_header_mobile_search_border_color); ?>;
		}
		.ts-search-by-category .search-content:after{
			color: <?php echo esc_html($ts_header_mobile_search_button_text_color); ?>;
		}
	}
	.ic-mobile-menu-close-button,
	.mobile-menu-wrapper nav li > a,
	.mobile-menu-wrapper nav li:before,
	.mobile-menu-wrapper nav li > .ts-menu-drop-icon,
	.mobile-menu-wrapper nav > ul.menu ul li > .ts-menu-drop-icon,
	.group-button-header .ts-header-info,
	.ts-sidebar-content .menu-title{
		color: <?php echo esc_html($ts_menu_mobile_text_color); ?>;
	}
	.mobile-menu-wrapper nav *{
		border-color: <?php echo esc_html($ts_menu_mobile_border_color); ?>;
	}
	#group-icon-header .ts-sidebar-content,
	.mobile-menu-wrapper li .ts-menu-drop-icon.active,
	#group-icon-header .menu-title{
		background-color: <?php echo esc_html($ts_menu_mobile_background_color); ?>;
	}
	.tab-mobile-menu li{
		color: <?php echo esc_html($ts_tab_menu_mobile_text_color); ?>;
		background-color: <?php echo esc_html($ts_tab_menu_mobile_background_color); ?>;
	}
	.tab-mobile-menu li.active{
		color: <?php echo esc_html($ts_tab_menu_mobile_text_hover); ?>;
		background-color: <?php echo esc_html($ts_tab_menu_mobile_background_hover); ?>;
	}
	.mobile-menu-wrapper nav > ul.menu ul.sub-menu h1,
	.mobile-menu-wrapper nav > ul.menu ul.sub-menu h2,
	.mobile-menu-wrapper nav > ul.menu ul.sub-menu h3,
	.mobile-menu-wrapper nav > ul.menu ul.sub-menu h4,
	.mobile-menu-wrapper nav > ul.menu ul.sub-menu h5,
	.mobile-menu-wrapper nav > ul.menu ul.sub-menu h6,
	.mobile-menu-wrapper nav > ul.menu ul.sub-menu .h1,
	.mobile-menu-wrapper nav > ul.menu ul.sub-menu .h2,
	.mobile-menu-wrapper nav > ul.menu ul.sub-menu .h3,
	.mobile-menu-wrapper nav > ul.menu ul.sub-menu .h4,
	.mobile-menu-wrapper nav > ul.menu ul.sub-menu .h5,
	.mobile-menu-wrapper nav > ul.menu ul.sub-menu .h6{
		color: <?php echo esc_html($ts_menu_mobile_heading_color); ?>;
	}
	.mobile-menu-wrapper .ts-menu-drop-icon.active,
	.mobile-menu-wrapper .ts-menu-drop-icon:hover,
	.mobile-menu-wrapper nav > ul li:hover > .ts-menu-drop-icon,
	.mobile-menu-wrapper nav ul li:hover > a,
	.mobile-menu-wrapper ul ul li:hover > a,
	.mobile-menu-wrapper nav ul li.menu-item:hover:before,
	.mobile-menu-wrapper nav ul li > .ts-menu-drop-icon:hover,
	.mobile-menu-wrapper ul.menu ul li:hover > .ts-menu-drop-icon,
	.mobile-menu-wrapper ul.menu ul.sub-menu > li > a:hover,
	.mobile-menu-wrapper ul.menu .elementor-widget-wp-widget-nav_menu li > a:hover,
	.mobile-menu-wrapper ul.menu ul .elementor-widget-wp-widget-nav_menu li.current-menu-item > a,
	.mobile-menu-wrapper ul.menu li.current-menu-item > a,
	.mobile-menu-wrapper ul.menu li.current_page_parent > a,
	.mobile-menu-wrapper ul.menu li.current-menu-parent > a,
	.mobile-menu-wrapper ul.menu li.current_page_item > a,
	.mobile-menu-wrapper ul.menu li.current-menu-ancestor > a,
	.mobile-menu-wrapper ul.menu li.current-page-ancestor > a,
	.mobile-menu-wrapper ul.menu li.current-product_cat-ancestor > a,
	.mobile-menu-wrapper ul.menu li.current-menu-item > .ts-menu-drop-icon,
	.mobile-menu-wrapper ul.menu li.current_page_parent > .ts-menu-drop-icon,
	.mobile-menu-wrapper ul.menu li.current-menu-parent > .ts-menu-drop-icon,
	.mobile-menu-wrapper ul.menu li.current_page_item > .ts-menu-drop-icon,
	.mobile-menu-wrapper ul.menu li.current-menu-ancestor > .ts-menu-drop-icon,
	.mobile-menu-wrapper ul.menu li.current-page-ancestor > .ts-menu-drop-icon,
	.mobile-menu-wrapper ul.menu li.current-product_cat-ancestor > .ts-menu-drop-icon,
	.mobile-menu-wrapper nav ul.menu li.current-menu-item:before,
	.mobile-menu-wrapper nav ul.menu li.current_page_parent:before,
	.mobile-menu-wrapper nav ul.menu li.current-menu-parent:before,
	.mobile-menu-wrapper nav ul.menu li.current_page_item:before,
	.mobile-menu-wrapper nav ul.menu li.current-menu-ancestor:before,
	.mobile-menu-wrapper nav ul.menu li.current-page-ancestor:before,
	.mobile-menu-wrapper nav ul.menu li.current-product_cat-ancestor:before,
	.group-button-header a:hover,
	.group-button-header .wpml-ls-legacy-dropdown a:focus,
	.group-button-header .wpml-ls-legacy-dropdown a:hover,
	.group-button-header .wpml-ls-legacy-dropdown .wpml-ls-current-language:hover > a{
		color: <?php echo esc_html($ts_menu_mobile_text_hover); ?>;
	}
	.mobile-menu-wrapper ul.sub-menu{
		background: <?php echo esc_html($ts_menu_mobile_background_color); ?>;
	}
	.mobile-menu-wrapper nav .sub-menu *{
		border-color: <?php echo esc_html($ts_menu_mobile_border_color); ?>;
	}
	.group-button-header{
		color: <?php echo esc_html($ts_bottom_menu_mobile_text_color); ?>;
		background: <?php echo esc_html($ts_bottom_menu_mobile_background_color); ?>;
	}
	.group-button-header a{
		color: <?php echo esc_html($ts_bottom_menu_mobile_text_color); ?>;
	}

	/* FOOTER COLOR */
	footer#colophon{
		background-color: <?php echo esc_html($ts_footer_background_color); ?>;
	}
	.footer-container *,
	.footer-container input[type="text"], 
	.footer-container input[type="search"], 
	.footer-container input[type="text"], 
	.footer-container input[type="email"], 
	.footer-container input[type="password"], 
	.footer-container input[type="date"], 
	.footer-container input[type="number"], 
	.footer-container input[type="tel"],
	#colophon .tagcloud a{
		border-color: <?php echo esc_html($ts_footer_border_color); ?>;
	}
	.footer-container input[type="text"]:focus, 
	.footer-container input[type="search"]:focus, 
	.footer-container input[type="text"]:focus, 
	.footer-container input[type="email"]:focus, 
	.footer-container input[type="password"]:focus, 
	.footer-container input[type="date"]:focus, 
	.footer-container input[type="number"]:focus, 
	.footer-container input[type="tel"]:focus{
		border-color: <?php echo esc_html($ts_footer_border_hover); ?>;
	}
	footer#colophon,
	footer#colophon .social-icons li > a,
	.footer-container a,
	.footer-container dt,
	.footer-container .elementor-widget-container > ul > li a,
	.footer-container .elementor-widget-wp-widget-nav_menu ul > li a,
	.footer-container .elementor-widget-wp-widget-woocommerce_product_categories ul > li a,
	.footer-container .elementor-widget-wp-widget-ts_product_categories ul > li a,
	.footer-container .mc4wp-form-fields label,
	#colophon .mailchimp-subscription .newsletter{
		color: <?php echo esc_html($ts_footer_text_color); ?>;
	}
	.footer-container h1,
	.footer-container h2,
	.footer-container h3,
	.footer-container h4,
	.footer-container h5,
	.footer-container h6,
	.footer-container .widget-title,
	.footer-container .mc4wp-form-fields h2.title{
		color: <?php echo esc_html($ts_footer_heading_color); ?>;
	}
	.footer-container a:hover,
	.footer-container .elementor-widget-container > ul > li a:hover,
	.footer-container .elementor-widget-wp-widget-nav_menu ul > li a:hover,
	.footer-container .elementor-widget-wp-widget-ts_product_categories ul > li.current > a,
	.footer-container .elementor-widget-wp-widget-ts_product_categories ul > li > a:hover,
	.footer-container .elementor-widget-wp-widget-woocommerce_product_categories ul > li.current-cat > a,
	.footer-container .elementor-widget-wp-widget-woocommerce_product_categories ul > li > a:hover{
		color: <?php echo esc_html($ts_footer_text_hover); ?>;
	}
	.footer-container .tagcloud a{
		background: <?php echo esc_html($ts_footer_tags_background_color); ?>;
	}

	/* PRODUCT COLOR */
	/* Rating Product */
	.ts-testimonial-wrapper .rating:before,
	.star-rating:before, 
	.woocommerce .star-rating:before,
	body .star-rating.no-rating:before{
		color: <?php echo esc_html($ts_rating_color); ?> !important;
	}
	.woocommerce p.stars:hover a:before, 
	.star-rating span:before, 
	.ts-testimonial-wrapper .rating span:before, 
	.woocommerce p.stars.selected a.active:before, 
	.woocommerce p.stars.selected a:before,
	#comments li.wcpr-filter-button-li a:hover{
		color: <?php echo esc_html($ts_rating_fill_color); ?> !important;
	}
	#comments .rate-percent-bg .rate-percent{
		background-color: <?php echo esc_html($ts_rating_fill_color); ?>;
	}

	/* Name Product */
	.add-to-cart-popup-content .product-meta a,
	.ts-search-result-container ul li a,
	#ts-search-result-container .view-all-wrapper a,
	.widget-container ul.product_list_widget li > a,
	.widget-container ul.product_list_widget li .ts-wg-meta > a,
	.woocommerce .widget-container ul.product_list_widget li .ts-wg-meta > a,
	.woocommerce ul.product_list_widget .ts-wg-meta > a,
	.elementor-widget-container ul.product_list_widget li > a,
	.elementor-widget-container ul.product_list_widget li .ts-wg-meta > a,
	h3.product-name > a,
	.product-name a,
	.single-navigation .product-info,
	.group_table a,
	body table.compare-list tr.title td,
	.woocommerce .list-categories .product .product-categories a,
	ul.wishlist_table .item-details .product-name h3,
	.woocommerce #order_review td.product-name,
	.meta-wrapper .button-in a,
	#main .product-group-button-meta .loop-add-to-cart a{
		color: <?php echo esc_html($ts_product_name_text_color); ?>;
	}
	.product .product-brands a:hover,
	.meta-wrapper .product-categories a:hover,
	.widget-container ul li .product-categories a:hover,
	.add-to-cart-popup-content .product-meta a:hover,
	.ts-search-result-container ul li a:hover,
	#ts-search-result-container .view-all-wrapper a:hover,
	.elementor-widget-container ul.product_list_widget li > a:hover,
	.elementor-widget-container ul.product_list_widget li .ts-wg-meta > a:hover,
	.woocommerce .widget-container ul.product_list_widget li .ts-wg-meta > a:hover,
	.widget-container ul.product_list_widget li > a:hover,
	.widget-container ul.product_list_widget li .ts-wg-meta > a:hover,
	.woocommerce ul.product_list_widget .ts-wg-meta > a:hover,
	h3.product-name > a:hover,
	.product-name a:hover,
	.single-navigation .product-info,
	.group_table a:hover,
	.woocommerce .list-categories .product .product-categories a:hover{
		color: <?php echo esc_html($ts_product_name_text_hover); ?>;
	}

	/* Button Product */
	.thumbnail-wrapper .product-group-button .loop-add-to-cart a,
	.woocommerce .product .product-group-button-meta .loop-add-to-cart a,
	.product-group-button > div a{
		background-color: <?php echo esc_html($ts_product_button_thumbnail_background_color); ?>;
		color: <?php echo esc_html($ts_product_button_thumbnail_text_color); ?>;
	}
	.meta-wrapper .button-in a div.blockUI.blockOverlay:after,
	.thumbnail-wrapper .button-in a div.blockUI.blockOverlay:after,
	body .product-group-button div.loop-add-to-cart a.loading:after,
	body .product-group-button-meta div.loop-add-to-cart a.loading:after{
		border-top-color: <?php echo esc_html($ts_product_button_thumbnail_text_color); ?>;
		border-left-color: <?php echo esc_html($ts_product_button_thumbnail_text_color); ?>;
	}
	.thumbnail-wrapper .product-group-button .loop-add-to-cart a:hover,
	.product-group-button > div a:hover{
		background-color: <?php echo esc_html($ts_product_button_thumbnail_background_hover); ?>;
		color: <?php echo esc_html($ts_product_button_thumbnail_text_hover); ?>;
	}
	.thumbnail-wrapper .product-group-button a .button-tooltip,
	.ts-product-attribute .button-tooltip{
		color: <?php echo esc_html($ts_product_button_thumbnail_tooltip_text_color); ?>;
	}
	.product-group-button .button-tooltip:before,
	.ts-product-attribute .button-tooltip:before{
		background-color: <?php echo esc_html($ts_product_button_thumbnail_tooltip_background_color); ?>;
	}
	.woocommerce .product .meta-wrapper .loop-add-to-cart a:hover,
	.woocommerce .product .meta-wrapper .wishlist a:hover,
	.woocommerce .product .meta-wrapper .compare a:hover{
		color: <?php echo esc_html($ts_product_name_text_color); ?>;
	}
	/* Label Product */
	.woocommerce .product .product-label .onsale span{
		color: <?php echo esc_html($ts_product_sale_label_text_color); ?>;
		background: <?php echo esc_html($ts_product_sale_label_background_color); ?>;
	}
	.woocommerce .product .product-label .onsale.amount{
		color: <?php echo esc_html($ts_product_sale_label_text_color); ?>;
	}
	.woocommerce .product .product-label .new span{
		color: <?php echo esc_html($ts_product_new_label_text_color); ?>;
		background: <?php echo esc_html($ts_product_new_label_background_color); ?>;
	}
	.woocommerce .product .product-label .featured span{
		color: <?php echo esc_html($ts_product_feature_label_text_color); ?>;
		background: <?php echo esc_html($ts_product_feature_label_background_color); ?>;
	}
	.woocommerce .product .product-label .out-of-stock span{
		color: <?php echo esc_html($ts_product_outstock_label_text_color); ?>;
		background: <?php echo esc_html($ts_product_outstock_label_background_color); ?>;
	}
	/* Amount Product */
	.price .amount,
	.shop_table .amount,
	.ts-tiny-cart-wrapper .subtotal > span.amount,
	.woocommerce .products .product .price,
	.product_list_widget .price,
	.product_list_widget .amount,
	.woocommerce div.product p.price,
	.woocommerce div.product span.price,
	.single-navigation .product-info .price,
	/* Compare table */
	body table.compare-list tr.price td{
		color: <?php echo esc_html($ts_product_price_color); ?>;
	}
	del .amount,
	.add-to-cart-popup-content del .amount,
	.woocommerce .products .product del .amount,
	.product_list_widget del .amount,
	.shop_table del .amount,
	div.product .summary > .price del .amount,
	.price del .amount,
	.woocommerce div.product .summary > .price del .amount,
	.yith-wfbt-section del .amount{
		color: <?php echo esc_html($ts_product_del_price_color); ?>;
	}
	.yith-wfbt-submit-block .total_price .amount,
	ins .amount,
	.woocommerce .products .product ins .amount,
	.product_list_widget ins .amount,
	div.product .price ins .amount,
	.price ins .amount,
	.yith-wfbt-section ins .amount,
	.wishlist_table ins .amount{
		color: <?php echo esc_html($ts_product_sale_price_color); ?>;
	}
	
<?php update_option('ts_load_dynamic_style', 1);  //uncomment after finished this file ?>	