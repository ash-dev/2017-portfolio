<?php
$ROOT = '../';
include '../partial/header.php';
?>   

<!--- Start header ---> 
<div id="header">
	<h1>cat gallery</h1>
	<h2><a class="navlink" href="../"><i class="fa fa-long-arrow-left"></i> back to home</a></h2>
	<p class="description">developed a quick page in honor of my sweet cat. it's a lean site made with the intention to share pics with family and friends, so nothing too flashy. why's it here? maybe I just want to share my cat! but there's some clean code to see as well.</p>
	<p class="line">////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////</p>
</div>
<!--- End header ---> 

<!--- Start content ---> 
<div id="content">

	<!--- Clean & responsive ---> 
	
	<h3>clean & responsive</h3>
	<p class="description">site is responsive and optimized for all devices</p><img class="mobile-preview" src="../images/cat-gallery/mobile-preview.png">
	<div class="desktop-scroll-wrap">
		<div class="desktop-container"><img alt="" src="../images/cat-gallery/cat-gallery-desktop.png"></div>
	</div>
	<div class="mobile-scroll-wrap">
		<div class="mobile-container"><img alt="" src="../images/cat-gallery/cat-gallery-mobile.png"></div>
	</div> 
	<div class="scroll-wrap">
		<i class="fa fa-long-arrow-up"></i> <img src="../images/scroll.png" width="41"> <i class="fa fa-long-arrow-down"></i>
	</div>
	<div style="clear: both; display:block"></div>
	<p class="line">////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////</p>
	
	<!--- Animations/parallax scrolling ---> 
	
	<h3>animations/parallax scrolling</h3>
	<p class="description">Background at .25x speed + CSS animations for text/icons. code preview shows the code for the header area animations.</p>
	<div class="demo">
		<div class="demo-body">
			<video height="auto" id="video1" poster="../images/cat-gallery/poster.png" preload="auto" width="98%"><source src="../video/cat-clip.mp4" type="video/mp4"> <source src="../video/cat-clip.webm" type="video/webm"> Your browser does not support the video tag.</video>
		</div>
		<div class="demo-code">
			<h4>html</h4>
			<script src="https://gist.github.com/ash-dev/50fc09862ee465ceb6ccf80d1a71b5c3.js?file=ash-cat-animations.html">
			</script>
			<h4>scss</h4>
			<script src="https://gist.github.com/ash-dev/50fc09862ee465ceb6ccf80d1a71b5c3.js?file=_ash-cat-animations.scss">
			</script>
			<p>check my <a href="2016-portfolio.php">2016 portfolio</a> for more complex animations/scroll effects.</p>
		</div>
	</div>

<!--- Scripts for page ---> 

<script src="../js/videos.js?v=2871942798"></script>

<?php include '../partial/portfolio-footer.php'; ?>