<?php
$ROOT = '../';
include '../partial/header.php';
?>   

<!--- Start header ---> 
<div id="header">
	<h1>2016 portfolio</h1>
	<h2><a href="../" class="navlink"><i class="fa fa-long-arrow-left"></i> back to home</a></h2>
	<p class="description">My 2016 portfolio was pushed out for the new, but it's still a useful representation of my dev experience.</p>
	<p class="line">////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////</p>
</div>
<!--- End header ---> 

<!--- Start content ---> 
<div id="content">

	<!--- Clean & responsive ---> 
	
	<h3>clean & responsive</h3>
	<p class="description">site is responsive and optimized for all devices.</p><img class="mobile-preview" src="../images/2016-portfolio/mobile-preview.png">
	<div class="desktop-scroll-wrap">
		<div class="desktop-container"><img alt="" src="../images/2016-portfolio/2016-portfolio-desktop.png"></div>
	</div>
	<div class="mobile-scroll-wrap">
		<div class="mobile-container"><img alt="" src="../images/2016-portfolio/2016-portfolio-mobile.png"></div>
	</div>
	<div class="scroll-wrap">
		<i class="fa fa-long-arrow-up"></i> <img src="../images/scroll.png" width="41"> <i class="fa fa-long-arrow-down"></i>
	</div>
	<div style="clear: both; display:block"></div>
	<p class="line">////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////</p>
	
	<!--- Complementary color selector ---> 
	
	<h3>complementary color selector</h3>
	<p class="description">on click, make background color of first div that color. apply that color's complementary color to the second div. bonus svg animation on radio select (inspired by codrops).</p>
	<div class="demo">
		<div class="demo-body">
			
			<!--- Start favorite color div --->
			<div id="favorite-color">
				<p>what's your favorite color?</p>
				<div id="color-swatches">
					<form class="ac-custom ac-radio ac-drop">
						<ul style="white-space: nowrap;">
							<li><input checked="checked" id="blue" name="color" type="radio" value="blue"><label class="radio blue" for="blue"></label><svg viewbox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><path d="M27.667,9.833c0,0-4.315,6.831-9.417,13.104c-6.083,7.479-9.403,12.449-7.938,19.563C12.331,52.294,19,56.583,26.5,56.75c8.72,0.193,15.545-7.039,16.75-12.875c1.286-6.232,0.412-11.807-7.591-21.463C30.517,16.207,27.75,9.583,27.75,9.583" style="stroke-dasharray: 123.13, 123.13; stroke-dashoffset: 0; transition: stroke-dashoffset 0.8s ease-in 0s;"></path></svg></li>
							<li><input id="mint" name="color" type="radio" value="mint"><label class="radio mint" for="mint"></label></li>
							<li><input id="green" name="color" type="radio" value="green"><label class="radio green" for="green"></label></li>
							<li><input id="yellow" name="color" type="radio" value="yellow"><label class="radio yellow" for="yellow"></label></li>
							<li><input id="orange" name="color" type="radio" value="orange"><label class="radio orange" for="orange"></label></li>
							<li><input id="red" name="color" type="radio" value="red"><label class="radio red" for="red"></label></li>
							<li><input id="pink" name="color" type="radio" value="pink"><label class="radio pink" for="pink"></label></li>
							<li><input id="purple" name="color" type="radio" value="purple"><label class="radio purple" for="purple"></label></li>
						</ul>
					</form>
				</div>
			</div>
			<p style="margin-top: 35px">i'm your favorite color!</p>
			<div id="design-block"></div>
			<p style="margin-top: 35px">i'm complementary!</p>
			<div id="more-block"></div>
			<!--- End favorite color div --->
			
		</div>
		<div class="demo-code">
			<h4>jquery</h4>
			<script src="https://gist.github.com/ash-dev/37a3f106737ab00b16fcd255cb414bf8.js?file=ash-2016-portfolio-cc.js">
			</script>
			<h4>scss</h4>
			<script src="https://gist.github.com/ash-dev/37a3f106737ab00b16fcd255cb414bf8.js?file=ash-2016-portfolio-cc.scss">
			</script>
		</div>
	</div>
	<div style="clear: both; display:block"></div>
	<p class="line">////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////</p>
	
	
	<!--- SVG animation with keyframes --->
	
	<!--- Trigger for animation --->
	<div id="trigger1"></div>
	
	<h3>SVG animation with keyframes</h3>
	<p class="description">wireframe design animated using css keyframes. liberal use of mixins for dry code.</p>
	<div class="demo">
		<div class="demo-body">
			<svg height="820px" id="webdraw" version="1.1" viewbox="0 0 660 820" width="660px" x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
			<g>
				<polygon class="ql" fill="none" points="49.634,439.195 49.634,572.634 219.438,572.634 219.438,439.195 49.634,439.195" stroke="#FFFFFF" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.4873"></polygon>
				<polygon class="ql" fill="none" points="245.449,439.195 245.449,572.634 415.255,572.634 415.255,439.195 245.449,439.195" stroke="#FFFFFF" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.4873"></polygon>
				<polygon class="ql" fill="none" points="440.438,439.195 440.438,572.634 610.238,572.634 610.238,439.195 440.438,439.195" stroke="#FFFFFF" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.4873"></polygon>
				<polygon class="bounds" fill="none" points="0,0 0,820 659.875,820 659.875,0 0,0" stroke="#FFFFFF" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.4873"></polygon>
				<path d="M660.371,33.86C440.386,33.449,220.4,33.036,0.415,32.624" fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.4873"></path>
				<line fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.4873" x1="0.354" x2="280.808" y1="356.384" y2="356.384"></line>
				<line fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.4873" x1="378.842" x2="659.293" y1="356.384" y2="356.384"></line>
				<polygon class="qls" fill="none" points="281.801,339.581 281.801,371.215 378.207,371.215 378.207,339.581 281.801,339.581" stroke="#FFFFFF" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.4873"></polygon>
				<path d="M660.373,697.417c-219.71-0.412-439.421-0.824-659.131-1.235" fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.4873"></path>
				<line fill="none" stroke="rgba(255,255,255,.5)" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="6.0052" x1="364.92" x2="568.408" y1="145.399" y2="145.399"></line>
				<line fill="none" stroke="rgba(255,255,255,.5)" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="6.0052" x1="364.92" x2="568.408" y1="166.6" y2="166.6"></line>
				<line fill="none" stroke="#FFFFFF" stroke-linecap="square" stroke-miterlimit="10" stroke-width="18.0155" x1="372.938" x2="456.133" y1="199.004" y2="199.004"></line>
				<line fill="none" stroke="rgba(255,255,255,.5)" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3.0026" x1="51.414" x2="218.978" y1="591.825" y2="591.825"></line>
				<line fill="none" stroke="rgba(255,255,255,.5)" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3.0026" x1="51.414" x2="218.978" y1="602.299" y2="602.299"></line>
				<line fill="none" stroke="rgba(255,255,255,.5)" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3.0026" x1="51.415" x2="218.979" y1="613.353" y2="613.353"></line>
				<line fill="none" stroke="rgba(255,255,255,.5)" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3.0026" x1="51.415" x2="218.979" y1="623.827" y2="623.827"></line>
				<line fill="none" stroke="#FFFFFF" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="6.0052" x1="53.422" x2="256.91" y1="765.168" y2="765.168"></line>
				<line fill="none" stroke="rgba(255,255,255,.5)" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3.0026" x1="246.98" x2="414.546" y1="591.825" y2="591.825"></line>
				<line fill="none" stroke="rgba(255,255,255,.5)" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3.0026" x1="246.98" x2="414.546" y1="602.299" y2="602.299"></line>
				<line fill="none" stroke="rgba(255,255,255,.5)" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3.0026" x1="246.981" x2="414.547" y1="613.353" y2="613.353"></line>
				<line fill="none" stroke="rgba(255,255,255,.5)" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3.0026" x1="246.981" x2="414.547" y1="623.827" y2="623.827"></line>
				<line fill="none" stroke="rgba(255,255,255,.5)" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3.0026" x1="441.725" x2="609.289" y1="591.825" y2="591.825"></line>
				<line fill="none" stroke="rgba(255,255,255,.5)" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3.0026" x1="441.725" x2="609.289" y1="602.299" y2="602.299"></line>
				<line fill="none" stroke="rgba(255,255,255,.5)" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3.0026" x1="441.726" x2="609.291" y1="613.353" y2="613.353"></line>
				<line fill="none" stroke="rgba(255,255,255,.5)" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3.0026" x1="441.726" x2="609.291" y1="623.827" y2="623.827"></line>
				<line fill="none" stroke="rgba(255,255,255,.5)" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3.0026" x1="51.415" x2="328.345" y1="797.46" y2="797.46"></line>
				<line fill="none" stroke="rgba(255,255,255,.5)" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3.0026" x1="51.417" x2="328.348" y1="808.516" y2="808.516"></line>
				<line fill="none" stroke="rgba(255,255,255,.5)" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3.0026" x1="51.417" x2="328.348" y1="818.988" y2="818.988"></line>
				<line class="shorty" fill="none" stroke="rgba(255,255,255,.5)" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3.0026" x1="613.298" x2="642.564" y1="17.369" y2="17.369"></line>
				<line class="shorty" fill="none" stroke="rgba(255,255,255,.5)" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3.0026" x1="563.179" x2="592.447" y1="17.37" y2="17.37"></line>
				<line class="shorty" fill="none" stroke="rgba(255,255,255,.5)" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3.0026" x1="513.266" x2="542.533" y1="17.37" y2="17.37"></line>
				<line class="shorty" fill="none" stroke="rgba(255,255,255,.5)" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3.0026" x1="463.147" x2="492.414" y1="17.371" y2="17.371"></line>
				<line class="shorty" fill="none" stroke="rgba(255,255,255,.5)" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3.0026" x1="413.033" x2="442.302" y1="17.371" y2="17.371"></line>
				<line class="shorty" fill="none" stroke="rgba(255,255,255,.5)" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3.0026" x1="362.916" x2="392.183" y1="17.373" y2="17.373"></line>
			</g></svg>
		</div>
		<div class="demo-code">
			<h4>scss</h4>
			<script src="https://gist.github.com/ash-dev/be1e8f8891db0f099addc10f06b3b069.js">
			</script>
		</div>
	</div>
	<div style="clear: both; display:block"></div>
	<p class="line">////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////</p>
	
	
	<!--- Animations with GSAP ---> 
	
	<h3>animations with GSAP</h3>
	<p class="description">fireballs triggered on scroll via ScrollMagic and animated with TweenMax. code shows a single fireball.</p>
	<div class="demo">
		<div class="demo-body">
			<video height="auto" id="video1" poster="../images/2016-portfolio/poster.png" preload="auto" width="98%"><source src="../video/animation.mp4" type="video/mp4"> <source src="../video/animation.webm" type="video/webm"> Your browser does not support the video tag.</video>
		</div>
		<div class="demo-code">
			<h4>jQuery</h4>
			<script src="https://gist.github.com/ash-dev/4927bee5b4f66cd3e6ae2e4bda651d1c.js?file=ash-2016-portfolio-ascii-fireballs.js">
			</script>
			<h4>scss</h4>
			<script src="https://gist.github.com/ash-dev/4927bee5b4f66cd3e6ae2e4bda651d1c.js?file=_ash-2016-portfolio-ascii-fireballs.scss">
			</script>
			<h4>html</h4>
			<script src="https://gist.github.com/ash-dev/4927bee5b4f66cd3e6ae2e4bda651d1c.js?file=ash-2016-portfolio-ascii-fireballs.html">
			</script>
		</div>
	</div>
	<div style="clear: both; display:block"></div>
	<p class="line">////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////</p>
	
	
	<!--- Hidden cat ---> 
	
	<h3>hidden cat</h3>
	<p class="description">I added a clue in the source code to an easter egg. the "answer" is to right click the mint/pink boxes and the "reward" is pictures of my cat. 😸</p>
	<div class="demo">
		<div class="demo-body">
			<div id="favorite-color">
				<div class="large" id="color-swatches">
					<form class="ac-custom ac-radio ac-drop">
						<ul>
							<li>
								<input id="mint" name="color" type="radio" value="mint"><label class="radio mint" for="mint"><img id="cat1" src="http://ashleyschinowsky.com/2016/wp-content/uploads/2017/02/cat1.png" style="display: none;"></label><svg viewbox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"></svg>
							</li>
							<li>
								<input id="pink" name="color" type="radio" value="pink"><label class="radio pink" for="pink"><img id="cat2" src="http://ashleyschinowsky.com/2016/wp-content/uploads/2017/02/cat2.png" style="display: none;"></label><svg viewbox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"></svg>
							</li>
						</ul>
					</form>
				</div>
			</div>
		</div>
		<div class="demo-code">
			<h4>jQuery</h4>
			<script src="https://gist.github.com/ash-dev/e3c4bee242cd79a1b1c1554502cfd85f.js?file=_ash-2016-portfolio-cat.js">
			</script>
			<h4>html</h4>
			<script src="https://gist.github.com/ash-dev/e3c4bee242cd79a1b1c1554502cfd85f.js?file=ash-2016-portfolio-cat.html">
			</script>
			<h4>css</h4>
			<script src="https://gist.github.com/ash-dev/e3c4bee242cd79a1b1c1554502cfd85f.js?file=ash-2016-portfolio-cat.css">
			</script>
		</div>
	</div>
	<div style="clear: both; display:block"></div>
	<p class="line">////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////</p>
	
	<!--- Scroll interactions ---> 
	
	<h3>scroll interactions</h3>
	<p class="description">pin elements at certain positions. typewriter effect & other animations on scroll. this is best experienced firsthand...</p><a class="navlink" href="http://ashdoeswebsites.com/2016/" style="margin-bottom: 50px;" target="_blank">view saved copy <i class="fa fa-external-link-square"></i></a>

<!--- Scripts for page ---> 

<script src="../js/videos.js?v=2871942798"></script>
<script src="http://ashdoeswebsites.com/2016/js/scrollmagic/minified/ScrollMagic.min.js"></script>
<script src="http://ashdoeswebsites.com/2016/js/scrollmagic/TimelineMax.min.js"></script>
<script src="http://ashdoeswebsites.com/2016/js/scrollmagic/TweenMax.min.js"></script>
<script src="http://ashdoeswebsites.com/2016/js/scrollmagic/minified/plugins/animation.gsap.min.js"></script>
<script src="http://ashdoeswebsites.com/2016/js/scripts.js"></script>
<script src="http://ashdoeswebsites.com/2016/js/modernizr.custom.js"></script>

<?php include '../partial/portfolio-footer.php'; ?>