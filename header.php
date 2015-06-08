<?php
/**
 * Header Template
 *
 * Here we setup all logic and XHTML that is required for the header section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>" />
<title><?php woo_title(); ?></title>
<?php woo_meta(); ?>
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>" />
<?php wp_head(); ?>
<?php woo_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php woo_top(); ?>
<div id="wrapper">

	<div id="inner-wrapper">

	<?php woo_header_before(); ?>

	<header id="header" class="col-full">

		<svg id="hung" width="64px" height="64px" viewBox="0 0 234 233" xml:space="preserve">
				<g>
						<path fill-rule="evenodd" clip-rule="evenodd" fill="#ED1C24" stroke="#30307C" stroke-width="3.2695" stroke-miterlimit="22.9256" d="
						M117.426,180.044c48.865,0,88.719-39.854,88.719-88.719c0-48.865-39.854-88.719-88.719-88.719
						c-48.865,0-88.719,39.854-88.719,88.719C28.707,140.19,68.561,180.044,117.426,180.044z"/>

						<path fill-rule="evenodd" clip-rule="evenodd" fill="none" stroke="#30307C" stroke-width="4.2009" stroke-miterlimit="22.9256" d="
						M117.217,230.602c62.788,0,113.998-51.21,113.998-113.998S180.005,2.607,117.217,2.607S3.219,53.816,3.219,116.604
						S54.429,230.602,117.217,230.602z"/>
					<g>
						<path fill-rule="evenodd" clip-rule="evenodd" fill="#30307C" d="M115.899,180.663c4.248,0,9.432-1.296,11.952-4.536
							c3.24-5.4,4.752-12.6,2.88-18.648c-2.16-3.888-7.416-5.256-10.8-4.752c-3.816,1.008-3.888,1.44-6.336,3.528
							c-1.512,1.872-2.016,5.184-1.008,7.92c0.504,1.368,2.304,2.52,3.816,2.52c1.296,0,2.448-0.36,3.528-1.152
							c0.576-0.432,1.008-1.656,0.864-2.88c-0.288-1.944-1.512-2.52-2.376-4.176c0.36-1.008,1.152-1.872,1.8-2.232
							s1.44-0.576,2.232-0.36c1.368,0.36,2.88,1.728,3.6,3.096c1.152,4.032,0.144,8.352-1.872,11.088
							c-1.008,0.864-1.008,0.864-1.728,1.368c-5.544,1.296-10.008-1.368-13.536-4.752c-7.056-8.424-10.584-16.992-16.704-25.416
							c3.096,9.936,9.288,22.392,14.184,32.184C109.923,176.775,112.083,179.511,115.899,180.663z"/>
						<path fill-rule="evenodd" clip-rule="evenodd" fill="#30307C" d="M114.819,54.231c7.56-0.504,13.608-0.648,19.656-8.856
							c3.672-4.968,4.248-8.28,4.104-11.952c0-0.504,0.072,0-0.648-0.144c-1.8,4.68-7.992,10.008-13.032,12.024
							c-6.768,2.376-11.592,1.44-17.568-0.72c-5.184-2.52-9.864-6.264-12.384-11.16c-0.36-0.144-0.432-0.072-0.576,0.072
							c0.648,6.624,4.176,11.808,7.92,15.984c2.808,1.728,5.832,3.096,9.36,4.248C112.803,53.367,113.667,53.727,114.819,54.231z"/>
						<path fill-rule="evenodd" clip-rule="evenodd" fill="#30307C" d="M115.395,38.823c3.888,0.504,7.056-1.224,9.936-2.88
							c3.24-2.376,5.544-6.552,5.04-11.088c-1.152-4.752-3.816-8.28-7.704-9.648c-1.224,0-1.872-0.288-2.736-1.008
							c-0.648-0.144-1.152-0.648-1.512-1.656c1.728-2.16,1.512-5.04,0-7.272c0-0.288,0-0.648,0-1.296l-0.792-1.368
							c-1.008,1.872-2.232,3.528-0.72,5.544l-2.808,7.776c-3.528,2.376-8.352,3.024-9.576,7.704c-1.512,3.744,0.36,7.416,2.016,9.936
							c1.008,1.224,1.008,1.728,1.728,2.376C110.283,37.455,112.443,38.607,115.395,38.823L115.395,38.823z M116.403,31.551
							c-1.44-0.144-2.592-1.296-3.456-2.16c-0.864-2.016-0.504-4.248-0.504-6.768c1.152-1.296,2.376-3.816,3.96-4.176l2.016,0.504
							c1.728,0.648,2.88,1.656,3.528,3.168c1.224,2.736,1.224,5.904,0,7.776L116.403,31.551z"/>
						<path fill-rule="evenodd" clip-rule="evenodd" fill="#30307C" d="M131.595,154.743c1.656-3.528-0.72-8.064-2.016-11.448
							c-1.296-1.944-2.232-2.808-3.384-4.104c4.176-4.68,9.072-11.016,6.552-18.144c-0.648-2.304-2.016-3.672-3.024-5.544l-2.88-3.096
							c0-0.144,0.36-0.432,0.504-0.576c7.056-5.904,14.328-14.328,13.176-24.84c-0.216-0.864-0.504-1.872-1.008-2.52l-1.872-2.952
							c-2.952-2.736-6.768-5.616-15.192-1.944c0.792-0.432-5.472,3.6-6.192,5.184c-0.864,1.152-1.512,1.728-2.664,3.024
							c-4.392-2.664-9.936-4.824-15.624-6.192c-0.504-0.216-0.648-0.72-0.648-0.72c0.288-4.824,5.328-7.344,8.712-10.728
							c9.72-6.048,22.536,2.52,30.744-5.904c2.016-2.016,3.24-3.744,4.392-5.76c0-0.288,0-0.792-0.144-1.152
							c-15.696,0.36-32.112,0.648-47.232-2.16c-0.576,0.288-0.72,0.504-1.08,1.152c0.72,5.4,5.4,8.784,9.936,10.584
							c0.216,0.216,0.216,0.36,0.36,0.864c-1.152,1.872-2.376,4.032-3.528,5.904c-2.16,3.024-4.176,5.04-4.896,8.568l-4.68,4.752
							l0.792,1.8c8.784,1.008,16.344,3.528,22.392,10.584c1.872,2.808,4.176,6.408,4.536,9.792c-0.648,0.36-0.216,0.144-0.216,0.144
							c-3.384,0.72-8.136,1.008-11.52,2.664c-2.016,1.008-3.384,1.728-4.896,3.384c-2.88,3.672-2.808,8.424-3.528,12.96
							c-0.648,4.104-1.656,8.424-2.376,11.808c0.792-0.072,7.632-2.88,7.92-4.608c1.152-5.328,0.36-11.736,5.904-15.12
							c5.184-3.024,11.016-1.368,15.912-0.144c0.504,0.288,0.864,0.648,0.864,0.648c2.88,3.888,3.528,9.288,1.008,14.328
							c-0.648,1.152-1.368,2.52-2.52,3.024c-4.896-2.736-10.584-3.528-15.912-1.152c-3.744,1.296-7.632,4.392-7.92,8.064
							c0.144,0.216-1.008,0.72-0.144,0.216c3.24-4.032,11.088-3.96,15.696-3.24c3.744,1.008,5.544,2.664,8.28,4.176
							c2.952,3.024,5.904,5.616,6.264,10.728L131.595,154.743L131.595,154.743z M125.187,111.903l-5.544-2.304
							c0-7.2-0.864-14.256-3.744-20.088c0.864-1.584,1.512-1.728,2.232-2.016c1.296-0.576,2.664-1.224,4.536-1.368
							c5.112,0,7.56,0.864,9.432,3.672c1.656,7.704-1.728,16.776-6.768,21.672L125.187,111.903z"/>
					</g>
				</g></svg>
		<h1 id="custom-header">
			<a href="<?php echo get_option('home'); ?>/" title="Home">
				<span class="first-word">Drikung</span>Kagyü<br><span id="header-desc">
				<?php bloginfo( 'description' ); ?></span>
			</a>
		</h1>

	</header>
	<?php woo_header_after(); ?>