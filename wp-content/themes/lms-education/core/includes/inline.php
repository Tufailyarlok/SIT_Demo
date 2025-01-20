<?php

$lms_education_custom_css = '';


$lms_education_is_dark_mode_enabled = get_theme_mod( 'lms_education_is_dark_mode_enabled', false );

if ( $lms_education_is_dark_mode_enabled ) {

    $lms_education_custom_css .= 'body,.fixed-header,tr:nth-child(2n+2),.courses-info {';
    $lms_education_custom_css .= 'background: #000;';
    $lms_education_custom_css .= '}';

    $lms_education_custom_css .= '.some {';
    $lms_education_custom_css .= 'background: #000 !important;';
    $lms_education_custom_css .= '}';

	$lms_education_custom_css .= '.sticky .post-content{';
    $lms_education_custom_css .= 'color: #000';
    $lms_education_custom_css .= '}';

	$lms_education_custom_css .= 'h5.product-text a,#featured-product p.price,.card-header a,.comment-content.card-block p,.post-box.sticky a{';
    $lms_education_custom_css .= 'color: #000 !important';
    $lms_education_custom_css .= '}';

    $lms_education_custom_css .= '.some{';
    $lms_education_custom_css .= 'background: #fff;';
    $lms_education_custom_css .= '}';

    $lms_education_custom_css .= '.some {';
    $lms_education_custom_css .= 'background: #fff !important;';
    $lms_education_custom_css .= '}';
	

    $lms_education_custom_css .= 'body,h1,h2,h3,h4,h5,p,#main-menu ul li a,.woocommerce .woocommerce-ordering select, .woocommerce form .form-row input.input-text, .woocommerce form .form-row textarea,a{';
    $lms_education_custom_css .= 'color: #fff;';
    $lms_education_custom_css .= '}';

    $lms_education_custom_css .= 'a.wc-block-components-product-name, .wc-block-components-product-name,.wc-block-components-totals-footer-item .wc-block-components-totals-item__value,
.wc-block-components-totals-footer-item .wc-block-components-totals-item__label,
.wc-block-components-totals-item__label,.wc-block-components-totals-item__value,
.wc-block-components-product-metadata .wc-block-components-product-metadata__description>p,
.is-medium table.wc-block-cart-items .wc-block-cart-items__row .wc-block-cart-item__total .wc-block-components-formatted-money-amount,
.wc-block-components-quantity-selector input.wc-block-components-quantity-selector__input,
.wc-block-components-quantity-selector .wc-block-components-quantity-selector__button,
.wc-block-components-quantity-selector,table.wc-block-cart-items .wc-block-cart-items__row .wc-block-cart-item__quantity .wc-block-cart-item__remove-link,
.wc-block-components-product-price__value.is-discounted,del.wc-block-components-product-price__regular,.logo span,h2.woocommerce-loop-product__title,.woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price{';
    $lms_education_custom_css .= 'color: #fff !important;';
    $lms_education_custom_css .= '}';

	$lms_education_custom_css .= '.post-box{';
    $lms_education_custom_css .= '    border: 1px solid rgb(229 229 229 / 48%)';
    $lms_education_custom_css .= '}';
}

	/*---------------------------text-transform-------------------*/

	$lms_education_text_transform = get_theme_mod( 'menu_text_transform_lms_education','UPPERCASE');

    if($lms_education_text_transform == 'CAPITALISE'){

		$lms_education_custom_css .='#main-menu ul li a{';

			$lms_education_custom_css .='text-transform: capitalize ; font-size: 15px;';

		$lms_education_custom_css .='}';

	}else if($lms_education_text_transform == 'UPPERCASE'){

		$lms_education_custom_css .='#main-menu ul li a{';

			$lms_education_custom_css .='text-transform: uppercase ; font-size: 15px;';

		$lms_education_custom_css .='}';

	}else if($lms_education_text_transform == 'LOWERCASE'){

		$lms_education_custom_css .='#main-menu ul li a{';

			$lms_education_custom_css .='text-transform: lowercase ; font-size: 15px;';

		$lms_education_custom_css .='}';
	}

		/*---------------------------menu-zoom-------------------*/

		$lms_education_menu_zoom = get_theme_mod( 'lms_education_menu_zoom','None');

	if($lms_education_menu_zoom == 'None'){

		$lms_education_custom_css .='#main-menu ul li a{';

			$lms_education_custom_css .='';

		$lms_education_custom_css .='}';

	}else if($lms_education_menu_zoom == 'Zoominn'){

		$lms_education_custom_css .='#main-menu ul li a:hover{';

			$lms_education_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #222222;';

		$lms_education_custom_css .='}';
	}

	/*---------------------------Container Width-------------------*/

$lms_education_container_width = get_theme_mod('lms_education_container_width');

		$lms_education_custom_css .='body{';

			$lms_education_custom_css .='width: '.esc_attr($lms_education_container_width).'%; margin: auto';

		$lms_education_custom_css .='}';

	/*---------------------------Slider-content-alignment-------------------*/

$lms_education_slider_content_alignment = get_theme_mod( 'lms_education_slider_content_alignment','CENTER-ALIGN');

 if($lms_education_slider_content_alignment == 'LEFT-ALIGN'){

		$lms_education_custom_css .='.content_inner_box{';

			$lms_education_custom_css .='text-align:left;';

		$lms_education_custom_css .='}';


	}else if($lms_education_slider_content_alignment == 'CENTER-ALIGN'){

		$lms_education_custom_css .='.content_inner_box{';

			$lms_education_custom_css .='text-align:center;';

		$lms_education_custom_css .='}';


	}else if($lms_education_slider_content_alignment == 'RIGHT-ALIGN'){

		$lms_education_custom_css .='.content_inner_box{';

			$lms_education_custom_css .='text-align:right;';

		$lms_education_custom_css .='}';

	}

	/*---------------------------Copyright Text alignment-------------------*/

$lms_education_copyright_text_alignment = get_theme_mod( 'lms_education_copyright_text_alignment','LEFT-ALIGN');

 if($lms_education_copyright_text_alignment == 'LEFT-ALIGN'){

		$lms_education_custom_css .='.copy-text p{';

			$lms_education_custom_css .='text-align:left;';

		$lms_education_custom_css .='}';


	}else if($lms_education_copyright_text_alignment == 'CENTER-ALIGN'){

		$lms_education_custom_css .='.copy-text p{';

			$lms_education_custom_css .='text-align:center;';

		$lms_education_custom_css .='}';


	}else if($lms_education_copyright_text_alignment == 'RIGHT-ALIGN'){

		$lms_education_custom_css .='.copy-text p{';

			$lms_education_custom_css .='text-align:right;';

		$lms_education_custom_css .='}';

	}

	/*---------------------------related Product Settings-------------------*/


$lms_education_related_product_setting = get_theme_mod('lms_education_related_product_setting',true);

	if($lms_education_related_product_setting == false){

		$lms_education_custom_css .='.related.products, .related h2{';

			$lms_education_custom_css .='display: none;';

		$lms_education_custom_css .='}';
	}

	/*---------------------------Scroll to Top Alignment Settings-------------------*/

	$lms_education_scroll_top_position = get_theme_mod( 'lms_education_scroll_top_position','Right');

	if($lms_education_scroll_top_position == 'Right'){

		$lms_education_custom_css .='.scroll-up{';

			$lms_education_custom_css .='right: 20px;';

		$lms_education_custom_css .='}';

	}else if($lms_education_scroll_top_position == 'Left'){

		$lms_education_custom_css .='.scroll-up{';

			$lms_education_custom_css .='left: 20px;';

		$lms_education_custom_css .='}';

	}else if($lms_education_scroll_top_position == 'Center'){

		$lms_education_custom_css .='.scroll-up{';

			$lms_education_custom_css .='right: 50%;left: 50%;';

		$lms_education_custom_css .='}';
	}

		/*---------------------------Pagination Settings-------------------*/


$lms_education_pagination_setting = get_theme_mod('lms_education_pagination_setting',true);

	if($lms_education_pagination_setting == false){

		$lms_education_custom_css .='.nav-links{';

			$lms_education_custom_css .='display: none;';

		$lms_education_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$lms_education_slider_opacity_color = get_theme_mod( 'lms_education_slider_opacity_color','unset');

	if($lms_education_slider_opacity_color == '0'){

		$lms_education_custom_css .='.blog_box img{';

			$lms_education_custom_css .='opacity:0';

		$lms_education_custom_css .='}';

		}else if($lms_education_slider_opacity_color == '0.1'){

		$lms_education_custom_css .='.blog_box img{';

			$lms_education_custom_css .='opacity:0.1';

		$lms_education_custom_css .='}';

		}else if($lms_education_slider_opacity_color == '0.2'){

		$lms_education_custom_css .='.blog_box img{';

			$lms_education_custom_css .='opacity:0.2';

		$lms_education_custom_css .='}';

		}else if($lms_education_slider_opacity_color == '0.3'){

		$lms_education_custom_css .='.blog_box img{';

			$lms_education_custom_css .='opacity:0.3';

		$lms_education_custom_css .='}';

		}else if($lms_education_slider_opacity_color == '0.4'){

		$lms_education_custom_css .='.blog_box img{';

			$lms_education_custom_css .='opacity:0.4';

		$lms_education_custom_css .='}';

		}else if($lms_education_slider_opacity_color == '0.5'){

		$lms_education_custom_css .='.blog_box img{';

			$lms_education_custom_css .='opacity:0.5';

		$lms_education_custom_css .='}';

		}else if($lms_education_slider_opacity_color == '0.6'){

		$lms_education_custom_css .='.blog_box img{';

			$lms_education_custom_css .='opacity:0.6';

		$lms_education_custom_css .='}';

		}else if($lms_education_slider_opacity_color == '0.7'){

		$lms_education_custom_css .='.blog_box img{';

			$lms_education_custom_css .='opacity:0.7';

		$lms_education_custom_css .='}';

		}else if($lms_education_slider_opacity_color == '0.8'){

		$lms_education_custom_css .='.blog_box img{';

			$lms_education_custom_css .='opacity:0.8';

		$lms_education_custom_css .='}';

		}else if($lms_education_slider_opacity_color == '0.9'){

		$lms_education_custom_css .='.blog_box img{';

			$lms_education_custom_css .='opacity:0.9';

		$lms_education_custom_css .='}';

		}else if($lms_education_slider_opacity_color == 'unset'){

		$lms_education_custom_css .='.blog_box img{';

			$lms_education_custom_css .='opacity:unset';

		$lms_education_custom_css .='}';

		}