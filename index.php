<?php
$ROOT = './';
include 'partial/header.php';
?>    

<!--- Start header --->
<div id="header"><h1>Ashley S.</h1>
<h2>web developer in Seattle, WA</h2>
</div>
<!--- End header --->

<!--- Start testimonials --->
<div id="testimonials">
	<p class="line">////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////</p>
	<div class="testimonials-wrap">
		<div class="testimonial first">
			<p>[Redacted]</p>
		</div>
		<div class="testimonial">
			<p>[Redacted]</p>
		</div>
		<div class="testimonial">
			<p>[Redacted]</p>
		</div>
		<div class="testimonial first">
			<p>[Redacted]</p>
		</div>
		<div class="testimonial">
			<p>[Redacted]</p>
		</div>
		<div class="testimonial">
			<p>[Redacted]</p>
		</div>
		<div class="testimonial first">
			<p>[Redacted]</p>
		</div>
		<div class="testimonial">
			<p>[Redacted]</p>
		</div>
		<div class="testimonial">
			<p>[Redacted]</p>
		</div>
	</div>
	<div class="expand">
		<a class="expand-link" href="#">expand</a>
	</div>
	<p class="line bottom-fade">////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////</p>
</div>
<!--- End testimonials --->

<!--- Start main block/skill tally --->
<div id="main">
	<h2 id="dev-wp">development</h2>
	<p class="loading w-100 l-dev"></p>
	<p>WordPress development (front-end)</p>
	<p class="loading w-100 l-dev"></p>
	<p>jQuery (working knowledge), HTML5, CSS3</p>
	<p class="loading w-95 l-dev"></p>
	<p>responsiveness, Bootstrap</p>
	<p class="loading w-95 l-dev"></p>
	<p>performance (browser, device, retina, speed)</p>
	<p class="loading w-80 l-dev"></p>
	<p>Sass/SCSS</p>
	<p class="loading w-80 l-dev"></p>
	<p>eCommerce (WooCommerce, Shopify)</p>
	<p class="loading w-70 l-dev"></p>
	<p>phpBB</p>
	<p class="loading w-60 l-dev"></p>
	<p>web animations</p>
	<p class="loading w-60 l-dev"></p>
	<p>Kirki, WP Customizer API (working knowledge)</p>
	<p class="loading w-50 l-dev"></p>
	<p>PHP (working knowledge)</p>
	<h2 id="design-wp">design</h2>
	<p class="loading w-100 l-design"></p>
	<p>web</p>
	<p class="loading w-100 l-design"></p>
	<p>branding</p>
	<p class="loading w-100 l-design"></p>
	<p>Xara</p>
	<p class="loading w-70 l-design"></p>
	<p>Illustrator</p>
	<p class="loading w-40 l-design"></p>
	<p>InDesign</p>
	<p class="loading w-40 l-design"></p>
	<p>illustration (illustrative logos, icon sets, etc.)</p>
	<h2 id="more-wp">more</h2>
	<p class="loading w-100 l-more"></p>
	<p>customer service</p>
	<p class="loading w-100 l-more"></p>
	<p>troubleshooting (google-savvy)</p>
	<p class="loading w-80 l-more"></p>
	<p>Constant Contact development</p>
	<p class="loading w-80 l-more"></p>
	<p>marketing fundamentals</p>
	<p class="loading w-80 l-more"></p>
	<p>SEO fundamentals</p>
	<p class="loading w-80 l-more"></p>
	<p>domain management, SSL</p>
	<p class="loading w-65 l-more"></p>
	<p>Plesk, cPanel</p>
	<p class="loading w-50 l-dev"></p>
	<p>local development (XAMPP)</p>
	<p class="loading w-50 l-more"></p>
	<p>MySQL</p>
</div>
<!--- End main block/skill tally --->

<!--- Start sidebar --->
<div id="sidebar">
	<h2 class="dev">featured samples</h2>
	<div class="case-study-wrap" onclick="location.href='projects/2016-portfolio.php'" style="cursor: pointer">
		<p class="case-study">2016 Portfolio</p><img src="images/2016-portfolio/mobile-preview.png">
		<p><span>featuring:</span> responsive wp dev, scss, jquery, animations (SVG, GSAP, keyframe)</p>
	</div>
	<div class="case-study-wrap" onclick="location.href='projects/wordpress-theme-guilds.php'" style="cursor: pointer">
		<p class="case-study">WordPress theme for guilds</p>
		<p class="grey">IN PROGRESS</p><img src="images/wp-theme-guild/mobile-preview.png">
	</div>
	<h2 class="dev">personal projects</h2>
	<div class="case-study-wrap archive first" onclick="location.href='projects/vegetarian-ramen-blog.php'" style="cursor: pointer">
		<p class="case-study">Vegetarian Ramen Blog</p>
		<p><span>featuring:</span> responsive wp dev, wp loop, illustration</p>
	</div>
	<div class="case-study-wrap archive" onclick="location.href='projects/guild-website.php'" style="cursor: pointer">
		<p class="case-study">Guild Website</p>
		<p><span>featuring:</span> responsive phpbb dev (site + forum), phpbb syntax, scss</p>
	</div>
	<div class="case-study-wrap archive" onclick="location.href='projects/cat-gallery.php'" style="cursor: pointer">
		<p class="case-study">Cat Gallery</p>
		<p><span>featuring:</span> responsive dev, keyframe animations, scss, my cat</p>
	</div>
	<h2 class="design">design archive</h2>
	<div class="case-study-wrap archive" onclick="location.href='projects/design-samples.php'" style="cursor: pointer">
		<p class="case-study">2014-Present</p>
		<p><span>featuring:</span> logos, web design. includes freelance & professional projects.</p>
	</div>
	<h2 class="github">repositories</h2>
	<div class="case-study-wrap archive" onclick="window.open('https://github.com/ash-dev/minimal-gist', '_blank');" style="cursor: pointer">
		<p class="case-study">minimal gist</p>
		<p>minimal styling for gist. sass variables + js for color-highlighted hex codes.</p>
	</div>
	<div class="case-study-wrap archive" onclick="window.open('https://github.com/ash-dev/sassy-colors', '_blank');" style="cursor: pointer">
		<p class="case-study">sassy colors</p>
		<p>color manipulation + scheme generation with Sass color functions.</p>
	</div>
	<div class="case-study-wrap archive" onclick="window.open('https://github.com/ash-dev/2017-portfolio', '_blank');" style="cursor: pointer">
		<p class="case-study">2017 portfolio</p>
		<p>view full source code.</p>
	</div>
</div>
<!--- End sidebar --->

<!--- Homepage scripts ---> 
<script src="https://cdn.jsdelivr.net/jquery.typeit/4.4.0/typeit.min.js"></script>

<?php include 'partial/footer.php'; ?>