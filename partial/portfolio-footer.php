<!--- Start fixed icons --->
<div class="fixed" id="a" style="display: none"><a href="/">a</a></div>
<div class="fixed" id="up" style="display: none"><a href="#top" onclick="scrollToTop();return false"><i class="fa fa-long-arrow-up"></i></a></div>
<!--- End fixed icons --->

<div style="clear: both; display:block"></div>

<!--- Start portfolio footer --->
<footer>
	<h2><a class="navlink" href="../"><i class="fa fa-long-arrow-left"></i> back to overview</a></h2>
	<p class="line">////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////</p>
	<div id="content">
		<div class="col-6">
			<a href="tel:"># redacted</a> <span>//</span> redacted@gmail.com
		</div>
		<div class="col-6">
			<a href="<?php echo $ROOT; ?>#" target="_blank">download resume <i class="fa fa-download"></i></a>
		</div>
	</div>
</footer>
<!--- End portfolio footer --->

</div>
<!--- End content --->
</div>
<!--- End container ---> 

<!--- Scripts ---> 

<script>
// gist colors	 
	 
$('.gist-data').each(function() {
  var hex = /#([a-zA-Z0-9]+)/g,
  spanhex = '<span style="color: #$1">#$1</span>';

  this.innerHTML = this.innerHTML.replace(hex, spanhex);
});

// back to top

var timeOut;
function scrollToTop() {
	if (document.body.scrollTop!=0 || document.documentElement.scrollTop!=0){
		window.scrollBy(0,-50);
		timeOut=setTimeout('scrollToTop()',10);
	}
	else clearTimeout(timeOut);
}

// shadows and fixed elements

$(".fixed").hide();
$(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
        $(".fixed").fadeIn("slow");
    }
    else {
        $(".fixed").fadeOut("fast");
    }
});

$('#a').okshadow({
  color: 'cyan',
  textShadow: true,
  xMax: 10,
  yMax: 0,
  fuzzMin: 0,
  fuzzMax: 8,
});

$('#up').okshadow({
  color: 'rgba(0, 255, 255, 0.8)',
  textShadow: true,
  xMax: 10,
  yMax: 0,
  fuzzMin: 0,
  fuzzMax: 6,
});
</script>

</body>
</html>