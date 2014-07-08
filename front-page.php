<?php
require_once('twitterFeed/config.php');
/*
Template Name: Front-page
*/
/**
 * The template used for displaying page content in page.php
 *
 * @package velvet
 */
?>


<?php get_header('homepage'); ?>

	<section class="image-fullscreen">
		<div class="home-container">
			<div class="home-navigation">
				<span class="home-brand">STEPERELLI</span>
				<ul class="nav">
					<li><a href="blog">blog</a></li>
					<li><a href="">resume</a></li>
				</ul>
			</div>

			<img src="wip.png" alt="" id="wip">
			
			<div class="intro-text">
				<h1 class="jobs">Frontend developer</h1>
				<h2 class="sub-jobs">working to make the web awesome</h2>
			</div>
			<div class="footer">
				<div class="twits">
					<img id="bird" src="twits.png" alt="">
					<?php
						foreach($finalArray as $tweet){
							$date = $tweet['created_at'];
							echo '<p>' . $tweet['text'] . "<span class='date'>" . time_ago($date) . "</span>". '</p>';
						}
					?>
				</div>
			</div>

		</div>
	</section>
