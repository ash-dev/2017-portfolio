<?php
$ROOT = '../';
include '../partial/header.php';
?>   

<!--- Start header ---> 
<div id="header">
	<h1>design samples</h1>
	<h2><a class="navlink" href="../"><i class="fa fa-long-arrow-left"></i> back to home</a></h2>
	<p class="description">web & logo samples from professional & freelance projects.</p>
	<p class="description" style="opacity: .5">disclaimer: save for a few personal projects, the majority of the work displayed is not owned by me. the designs were completed by me while working for other companies. it is not my intent to sell or claim copyright of this material, simply to show proof of my ability.</p>
	<p class="line">////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////</p>
</div>
<!--- End header ---> 

<!--- Start content ---> 

<div id="content">

[Redacted]
	
<!--- Scripts for page ---> 

<!--- Masonry ---> 	
<script>
	
$(document)
	.ready(function() {

		var $grid = $('.grid')
			.masonry({
				itemSelector: '.grid-item', 
				horizontalOrder: true, 
				transitionDuration: '0.2s'
			});

		$grid.imagesLoaded()
			.progress(function() {
				$grid.masonry('layout');
			});

	});

</script>

<script src="../js/masonry.pkgd.min.js?v=2871942798"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>

<?php include '../partial/portfolio-footer.php'; ?>