<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0 " />
	<title><?php bloginfo('name'); ?> | <?php bloginfo('description' ); ?></title>
	<?php wp_head(); ?>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php $logo = get_template_directory_uri().'/images/logo.png'; ?>
	
	<div class="page-loader">
		<div class="loading"><img src="<?php echo $logo; ?>" alt="	"></div>
	</div>