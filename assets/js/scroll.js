// START SCRIPT


var SNshow	= "yes"		// SHOW NEWS IFRAME



   if (SNshow == "yes") {

// START SCROLLING NEWS
document.write('<div id="news_iframe_scroll">');
document.write('<div class="news_scroll-title">');
document.write('News and Updates<br>');
document.write('</div>');
document.write('<iframe name="NewsIFrame" src="include/news.php" frameborder="0" scrolling="no"></iframe>');
document.write('</div>');
// END SCROLLING NEWS


}

// END SCRIPT