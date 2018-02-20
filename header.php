<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css" >


		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>

		<!-- wrapper -->
		<div class="wrapper">

			<header class="header clear" role="banner">
			<div class="row center-xs">
				<div class="col-md-12">
					<div class="box">
							<a href="<?php echo home_url(); ?>">
								<span class="logo">
									d <small class="dwight-dot">&#x25CF;</small>
									w <small class="dwight-dot">&#x25CF;</small>
									i <small class="dwight-dot">&#x25CF;</small>
									g <small class="dwight-dot">&#x25CF;</small>
									h <small class="dwight-dot">&#x25CF;</small>
									t
								</span>
							</a>
					</div>
				</div>
			</div>
			</header>
