<?php
$ROOT = '../';
include '../partial/header.php';
?>   

<link rel="stylesheet" href="../css/featherlight.min.css">

<!--- Start header ---> 
<div id="header">
	<h1>vegetarian ramen blog</h1>
	<h2><a class="navlink" href="../"><i class="fa fa-long-arrow-left"></i> back to home</a></h2>
	<p class="description">i've been on a major ramen kick this past year. I cook exclusively vegetarian at home, so have been experimenting with veg ramen recipes. thought it would be fun to write about it. minimal layout to feature my photos and notes - no opt-ins, etc. just documenting for fun.</p>
	<p class="line">////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////</p>
</div>
<!--- End header ---> 

<!--- Start content --->
<div id="content">

	<!--- Clean & responsive --->
	
	<h3>clean & responsive</h3>
	<p class="description">site is responsive and optimized for all devices.</p><img class="mobile-preview" src="../images/vegetarian-ramen-blog/mobile-preview.png">
	<div class="desktop-scroll-wrap">
		<div class="desktop-container"><img alt="" src="../images/vegetarian-ramen-blog/vegetarian-ramen-blog-desktop.png"></div>
	</div>
	<div class="mobile-scroll-wrap">
		<div class="mobile-container"><img alt="" src="../images/vegetarian-ramen-blog/vegetarian-ramen-blog-mobile.png"></div>
	</div>
	<div class="scroll-wrap">
		<i class="fa fa-long-arrow-up"></i> <img src="../images/scroll.png" width="41"> <i class="fa fa-long-arrow-down"></i>
	</div>
	<p class="description" style="padding-top:80px">some samples from mobile (click to zoom).</p>
	
	<!--- Start lightbox samples --->
	<div class="image-wrap" style="padding-bottom: 50px">
		<div class="img-8">
			<a data-featherlight="../images/vegetarian-ramen-blog/mobile-1.jpg" href="#"><img src="../images/vegetarian-ramen-blog/mobile-1.jpg"></a>
		</div>
		<div class="img-8">
			<a data-featherlight="../images/vegetarian-ramen-blog/mobile-2.jpg" href="#"><img src="../images/vegetarian-ramen-blog/mobile-2.jpg"></a>
		</div>
		<div class="img-8">
			<a data-featherlight="../images/vegetarian-ramen-blog/mobile-3.jpg" href="#"><img src="../images/vegetarian-ramen-blog/mobile-3.jpg"></a>
		</div>
		<div class="img-8">
			<a data-featherlight="../images/vegetarian-ramen-blog/mobile-4.jpg" href="#"><img src="../images/vegetarian-ramen-blog/mobile-4.jpg"></a>
		</div>
		<div class="img-8">
			<a data-featherlight="../images/vegetarian-ramen-blog/mobile-5.jpg" href="#"><img src="../images/vegetarian-ramen-blog/mobile-5.jpg"></a>
		</div>
		<div class="img-8">
			<a data-featherlight="../images/vegetarian-ramen-blog/mobile-6.jpg" href="#"><img src="../images/vegetarian-ramen-blog/mobile-6.jpg"></a>
		</div>
		<div class="img-8">
			<a data-featherlight="../images/vegetarian-ramen-blog/mobile-7.jpg" href="#"><img src="../images/vegetarian-ramen-blog/mobile-7.jpg"></a>
		</div>
		<div class="img-8">
			<a data-featherlight="../images/vegetarian-ramen-blog/mobile-8.jpg" href="#"><img src="../images/vegetarian-ramen-blog/mobile-8.jpg"></a>
		</div>
	</div>
	<!--- End lightbox samples ---> 
	
	<p class="description">inner pages similarly minimal, content-focused.</p>
	
	<!--- Start lightbox samples --->
	<div class="image-wrap" style="padding-top: 0px">
		<div class="img-3">
			<a data-featherlight="../images/vegetarian-ramen-blog/inner-page-1.jpg" href="#"><img src="../images/vegetarian-ramen-blog/inner-page-1.jpg"></a>
		</div>
		<div class="img-3">
			<a data-featherlight="../images/vegetarian-ramen-blog/inner-page-2.jpg" href="#"><img src="../images/vegetarian-ramen-blog/inner-page-2.jpg"></a>
		</div>
		<div class="img-3">
			<a data-featherlight="../images/vegetarian-ramen-blog/inner-page-3.jpg" href="#"><img src="../images/vegetarian-ramen-blog/inner-page-3.jpg"></a>
		</div>
	</div>
	<!--- End lightbox samples --->
	
	<div style="clear: both; display:block"></div>
	<p class="line">////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////</p>
	
	<!--- What's in the loop? ---> 
	
	<h3>what's in the loop?</h3>
	<p class="description">card-style design for post overviews (home, categories).</p>
	<div class="demo">
		<div class="demo-body"><img src="../images/vegetarian-ramen-blog/wordpress-loop.JPG"></div>
		<div class="demo-code">
			<h4>html/php</h4>
			<script src="https://gist.github.com/ash-dev/9b2f54e07f687d87b094c2d5725b89c4.js">
			</script>
		</div>
	</div>
	<div style="clear: both; display:block"></div>
	<p class="line">////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////</p>
	
	<!--- Custom icons ---> 
	
	<h3>custom icons</h3>
	<p class="description">illustrated icons for each major category.</p><img src="../images/vegetarian-ramen-blog/illustrated-icons.png">

<!--- Scripts for page ---> 

<script src="../js/videos.js?v=2871942798"></script>
<script src="../js/featherlight.min.js?v=2871942798"></script>

<?php include '../partial/portfolio-footer.php'; ?>