<?php
$ROOT = '../';
include '../partial/header.php';
?>   

<link rel="stylesheet" href="../css/featherlight.min.css?v=2871942798">
 
<!--- Start header ---> 
<div id="header">
	<h1>guild website</h1>
	<h2><a class="navlink" href="../"><i class="fa fa-long-arrow-left"></i> back to home</a></h2>
	<p class="description">guild site designed/developed to support an active gaming roster. I developed our previous site in 2012, so it was desperately in need of a revamp. primary goals: speed and responsiveness.</p>
	<p class="line">////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////</p>
</div>
<!--- End header ---> 

<!--- Start content ---> 
<div id="content">

	<!--- Clean & responsive ---> 
	
	<h3>clean & responsive</h3>
	<p class="description">every nook and cranny of the site is responsive. zero desktop-only features. check discord spy, application form, shoutbox, notifications, and of course full forum features.</p><img class="mobile-preview" src="../images/guild-website/mobile-preview.png">
	<div class="desktop-scroll-wrap">
		<div class="desktop-container"><img alt="" src="../images/guild-website/guild-website-desktop.png"></div>
	</div>
	<div class="mobile-scroll-wrap">
		<div class="mobile-container"><img alt="" src="../images/guild-website/guild-website-mobile.png"></div>
	</div>
	<div class="scroll-wrap">
		<i class="fa fa-long-arrow-up"></i> <img src="../images/scroll.png" width="41"> <i class="fa fa-long-arrow-down"></i>
	</div>
	<p class="description" style="padding-top:80px">some samples from mobile (click to zoom).</p>
	
	<!--- Start lightbox samples --->
	<div class="image-wrap">
		<div class="img-8">
			<a data-featherlight="../images/guild-website/mobile-1.jpg" href="#"><img src="../images/guild-website/mobile-1.jpg"></a>
		</div>
		<div class="img-8">
			<a data-featherlight="../images/guild-website/mobile-2.jpg" href="#"><img src="../images/guild-website/mobile-2.jpg"></a>
		</div>
		<div class="img-8">
			<a data-featherlight="../images/guild-website/mobile-3.jpg" href="#"><img src="../images/guild-website/mobile-3.jpg"></a>
		</div>
		<div class="img-8">
			<a data-featherlight="../images/guild-website/mobile-4.jpg" href="#"><img src="../images/guild-website/mobile-4.jpg"></a>
		</div>
		<div class="img-8">
			<a data-featherlight="../images/guild-website/mobile-5.jpg" href="#"><img src="../images/guild-website/mobile-5.jpg"></a>
		</div>
		<div class="img-8">
			<a data-featherlight="../images/guild-website/mobile-6.jpg" href="#"><img src="../images/guild-website/mobile-6.jpg"></a>
		</div>
		<div class="img-8">
			<a data-featherlight="../images/guild-website/mobile-7.jpg" href="#"><img src="../images/guild-website/mobile-7.jpg"></a>
		</div>
		<div class="img-8">
			<a data-featherlight="../images/guild-website/mobile-8.jpg" href="#"><img src="../images/guild-website/mobile-8.jpg"></a>
		</div>
	</div>
	<!--- End lightbox samples --->
	
	<div style="clear: both; display:block"></div>
	<p class="line">////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////</p>
	
	<!--- Fast-loading ---> 
	
	<h3>fast-loading</h3>
	<p class="description">browser caching, gzip compression, css/html/js minification, image compression/lazyloading - check. page speed was an extreme improvement from the old site. used to average 6s load speed, now in the 1-1.5 realm. unfortunately varies a bit due to shared hosting.</p><img src="../images/guild-website/speed.jpg">
	<p class="description subtext">image from guild forum. metrics from gtmetrix.</p>
	<p class="line">////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////</p>
	
	<!--- Sortable roster ---> 
	
	<h3>sortable roster</h3>
	<p class="description">custom sorting via sorttable.js and data attributes.</p>
	<div class="demo">
		<div class="demo-body">
		
			<!--- Start table --->
			<table cellpadding="0" cellspacing="0" class="sortable">
				<thead>
					<tr>
						<th class="sorttable_sorted" height="40px">Name<span id="sorttable_sortfwdind">&nbsp;▾</span></th>
						<th class="">Class</th>
						<th class="" id="Role">Role</th>
						<th class="">Path</th>
						<th class="">Rank</th>
					</tr>
				</thead>
				<tbody style="padding-left:10px; padding-right:10px">
					<tr>
						<td>Aristonis</td>
						<td>Stalker</td>
						<td data-sort-value="7"><img src="../images/guild-website/mdps.png"></td>
						<td>Scientist</td>
						<td data-sort-value="5">Initiate</td>
					</tr>
					<tr>
						<td>Ceriwyn</td>
						<td>Engineer</td>
						<td data-sort-value="1"><img src="../images/guild-website/tank.png"></td>
						<td>Scientist</td>
						<td data-sort-value="2">Officer</td>
					</tr>
					<tr>
						<td>Dasdingo</td>
						<td>Spellslinger</td>
						<td data-sort-value="12"><img src="../images/guild-website/rdps.png"></td>
						<td>Scientist</td>
						<td data-sort-value="5">Initiate</td>
					</tr>
					<tr>
						<td>Donatist</td>
						<td>Engineer</td>
						<td data-sort-value="1"><img src="../images/guild-website/tank.png"></td>
						<td>Soldier</td>
						<td data-sort-value="6">Applicant</td>
					</tr>
					<tr>
						<td>Eltanos</td>
						<td>Spellslinger</td>
						<td data-sort-value="12"><img src="../images/guild-website/rdps.png"></td>
						<td>Scientist</td>
						<td data-sort-value="5">Initiate</td>
					</tr>
					<tr>
						<td>Hydd</td>
						<td>Stalker</td>
						<td data-sort-value="2"><img src="../images/guild-website/tank.png"></td>
						<td>Explorer</td>
						<td data-sort-value="1">Leader</td>
					</tr>
					<tr>
						<td>Irullan</td>
						<td>Spellslinger</td>
						<td data-sort-value="6"><img src="../images/guild-website/rheals.png"></td>
						<td>Scientist</td>
						<td data-sort-value="5">Initiate</td>
					</tr>
					<tr>
						<td>Kazzuma</td>
						<td>Warrior</td>
						<td data-sort-value="8"><img src="../images/guild-website/mdps.png"></td>
						<td>Settler</td>
						<td data-sort-value="2">Officer</td>
					</tr>
					<tr>
						<td>Kethry</td>
						<td>Medic</td>
						<td data-sort-value="11"><img src="../images/guild-website/rdps.png"></td>
						<td>Explorer</td>
						<td data-sort-value="5">Initiate</td>
					</tr>
					<tr>
						<td>Kiwiface</td>
						<td>Esper</td>
						<td data-sort-value="10"><img src="../images/guild-website/rdps.png"></td>
						<td>Explorer</td>
						<td data-sort-value="5">Initiate</td>
					</tr>
					<tr>
						<td>Kobin</td>
						<td>Warrior</td>
						<td data-sort-value="3"><img src="../images/guild-website/tank.png"></td>
						<td>Explorer</td>
						<td data-sort-value="5">Initiate</td>
					</tr>
					<tr>
						<td>Kritarie</td>
						<td>Warrior</td>
						<td data-sort-value="8"><img src="../images/guild-website/mdps.png"></td>
						<td>Soldier</td>
						<td data-sort-value="5">Initiate</td>
					</tr>
					<tr>
						<td>Lipid</td>
						<td>Esper</td>
						<td data-sort-value="5"><img src="../images/guild-website/rheals.png"></td>
						<td>Soldier</td>
						<td data-sort-value="5">Initiate</td>
					</tr>
					<tr>
						<td>Loh</td>
						<td>Medic</td>
						<td data-sort-value="4"><img src="../images/guild-website/mheals.png"></td>
						<td>Scientist</td>
						<td data-sort-value="5">Initiate</td>
					</tr>
					<tr>
						<td>Nasti</td>
						<td>Medic</td>
						<td data-sort-value="4"><img src="../images/guild-website/mheals.png"></td>
						<td>Scientist</td>
						<td data-sort-value="6">Applicant</td>
					</tr>
					<tr>
						<td>PaperTurbine</td>
						<td>Engineer</td>
						<td data-sort-value="9"><img src="../images/guild-website/rdps.png"></td>
						<td>Settler</td>
						<td data-sort-value="4">Raider</td>
					</tr>
					<tr>

						<td>Philosomatik</td>
						<td>Esper</td>
						<td data-sort-value="10"><img src="../images/guild-website/rdps.png"></td>
						<td>Explorer</td>
						<td data-sort-value="4">Raider</td>
					</tr>
					<tr>
						<td>Risetta</td>
						<td>Medic</td>
						<td data-sort-value="11"><img src="../images/guild-website/rdps.png"></td>
						<td>Settler</td>
						<td data-sort-value="5">Initiate</td>
					</tr>
					<tr>
						<td>Rockaby</td>
						<td>Spellslinger</td>
						<td data-sort-value="6"><img src="../images/guild-website/rheals.png"></td>
						<td>Settler</td>
						<td data-sort-value="4">Raider</td>
					</tr>
					<tr>
						<td>Saraborg</td>
						<td>Stalker</td>
						<td data-sort-value="7"><img src="../images/guild-website/mdps.png"></td>
						<td>Soldier</td>
						<td data-sort-value="3">Officer</td>
					</tr>
					<tr>
						<td>Sirus Blackheart</td>
						<td>Warrior</td>
						<td data-sort-value="3"><img src="../images/guild-website/tank.png"></td>
						<td>Scientist</td>
						<td data-sort-value="5">Initiate</td>
					</tr>
					<tr>
						<td>Sqwinty</td>
						<td>Medic</td>
						<td data-sort-value="4"><img src="../images/guild-website/mheals.png"></td>
						<td>Scientist</td>
						<td data-sort-value="6">Applicant</td>
					</tr>
					<tr>
						<td>Trance</td>
						<td>Stalker</td>
						<td data-sort-value="7"><img src="../images/guild-website/mdps.png"></td>
						<td>Explorer</td>
						<td data-sort-value="5">Initiate</td>
					</tr>
					<tr>
						<td>Wintro</td>
						<td>Engineer</td>
						<td data-sort-value="9"><img src="../images/guild-website/rdps.png"></td>
						<td>Scientist</td>
						<td data-sort-value="6">Applicant</td>
					</tr>
					<tr>
						<td>Yssta</td>
						<td>Medic</td>
						<td data-sort-value="11"><img src="../images/guild-website/rdps.png"></td>
						<td>Scientist</td>
						<td data-sort-value="5">Initiate</td>
					</tr>
					<tr>
						<td>Zidjian</td>
						<td>Stalker</td>
						<td data-sort-value="7"><img src="../images/guild-website/mdps.png"></td>
						<td>Settler</td>
						<td data-sort-value="2">Officer</td>
					</tr>
				</tbody>
			</table>
			<!--- End table --->
			
		</div>
		<div class="demo-code">
			<h4>scss</h4>
			<script src="https://gist.github.com/ash-dev/99c6f6e4f8c64224cdc708a63df853e5.js?file=_ash-guild-website-roster.scss">
			</script>
			<h4>html <span>(partial)</span></h4>
			<script src="https://gist.github.com/ash-dev/99c6f6e4f8c64224cdc708a63df853e5.js?file=ash-guild-website-roster.html">
			</script>
		</div>
	</div>
	<div style="clear: both; display:block"></div>
	<p class="line">////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////</p>
	
	<!--- Animated graphs --->
	
	<h3>animated graphs</h3>
	<p class="description">HTML5/js graphs using CanvasJS</p>
	<div class="col-6">
		<video height="auto" id="video1" poster="../images/guild-website/poster1.png" preload="auto" width="98%"><source src="../video/contribute.mp4" type="video/mp4"> <source src="../video/contribute.webm" type="video/webm"> Your browser does not support the video tag.</video>
	</div>
	<div class="col-6">
		<video height="auto" id="video2" poster="../images/guild-website/poster2.png" preload="auto" width="98%"><source src="../video/stats.mp4" type="video/mp4"> <source src="../video/stats.webm" type="video/webm"> Your browser does not support the video tag.</video>
	</div>
	<div style="clear: both; display:block"></div>
	<p class="line">////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////</p>
	
	<!--- Added logic ---> 
	
	<h3>added logic (phpbb syntax)</h3>
	<h4>CTA bar</h4>
	<p class="description">is this user new? have they submitted an app yet? if not, show CTA bar when viewing apps. <span>similar logic added to discord spy - e.g. "join server" button only visible to registered users.</span></p>
	<div class="demo">
		<div class="demo-body"><img src="../images/guild-website/call-to-action.jpg"></div>
		<div class="demo-code">
			<h4>html <span>(+ phpbb syntax)</span></h4>
			<script src="https://gist.github.com/ash-dev/8fa19f063b2e25564140536a4eb41081.js?file=ash-guild-website-cta.html">
			</script>
			<p>check my <a href="wordpress-theme-guilds.php">latest project</a> for more complex logic.</p>
		</div>
	</div>
	<h4>new post indicators</h4>
	<p class="description">new post? clear indicator shows on the post dropdown (useful if not viewing forum) as well as within the forum on the topic bar. relevant code for dropdown indicator shown</p>
	<div class="demo">
		<div class="demo-body"><img src="../images/guild-website/new-post.jpg"></div>
		<div class="demo-code">
			<h4>html <span>(+ phpbb syntax)</span></h4>
			<script src="https://gist.github.com/ash-dev/8fa19f063b2e25564140536a4eb41081.js?file=ash-guild-website-indicator.html">
			</script>
			<h4>css</h4>
			<script src="https://gist.github.com/ash-dev/8fa19f063b2e25564140536a4eb41081.js?file=ash-guild-website-indicator.css">
			</script>
			<p>check my <a href="wordpress-theme-guilds.php">latest project</a> for more complex logic.</p>
		</div>
	</div>

<!--- Scripts for page ---> 

<script src="../js/videos.js?v=2871942798"></script>
<script src="../js/featherlight.min.js?v=2871942798"></script>
<script src="../js/sorttable.js?v=2871942798"></script>
<script type="text/javascript">window.onload=function(){sorttable.innerSortFunction.apply(document.getElementById('Role'), [])};</script>

<?php include '../partial/portfolio-footer.php'; ?>