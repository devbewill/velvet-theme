<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package velvet
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<!-- LOGO SECTION END -->
</head>
<style type="text/css">
@import url(http://fonts.googleapis.com/css?family=Montserrat:400,700);
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);
@import url(http://fonts.googleapis.com/css?family=Oswald:300,700);
@import url(http://fonts.googleapis.com/css?family=Anton);

html,body {
	height: 100%;
	margin: 0;
}

body { 
background: url('http://i60.tinypic.com/ay252v.jpg') no-repeat 10% 100%; 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}

.container2 {
	min-height: 100%;
  background: linear-gradient(135deg, #723362, #9d223c);
}

.container {
	min-height: 100%;
	background: linear-gradient(to bottom right, rgba(227,5,94, 0.90), rgba(100,1,133, 0.90));
	border: 5px solid #fff;
}

.navigation {
	width: 100%;
	height: 40px;
}

.brand {
	color: #f4f4f4;
	font-size: 35px;
	font-family: 'Montserrat';
	font-weight: 700;
	padding-left: 15px;
}

</style>
<body>
	<div class="container">
		<div class="navigation">
			<span class="brand">DEVBEWILL</span>
		</div>
	</div>


