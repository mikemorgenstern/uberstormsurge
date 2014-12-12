<?php
include "simpleCachedCurl.inc.php";
$ch = curl_init();
$timeout = 5;
curl_setopt($ch, CURLOPT_URL, "https://api.uber.com/v1/estimates/price?server_token=REDACTED_UBER_SERVER_TOKEN&start_latitude=37.765053&start_longitude=-122.419715&end_latitude=37.788820&end_longitude=-122.401997");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
// $response = curl_exec($ch);
curl_close($ch);

$response = simpleCachedCurl("https://api.uber.com/v1/estimates/price?server_token=REDACTED_UBER_SERVER_TOKEN&start_latitude=37.765053&start_longitude=-122.419715&end_latitude=37.788820&end_longitude=-122.401997",200,false);

$response_array = json_decode($response);

$surgevalue = $response_array->prices[0]->surge_multiplier;

$color = "#ff0000";
$text = "ARMAGEDDON!!";
$bg = "background.jpg";

if ($surgevalue < 3.4) {
$color = "#ff0000";
$text = "YOUR WALLET<br>IS FLOODED!";
$bg = "background.jpg";
}

if ($surgevalue < 2.6) {
$color = "#f45e15";
$text = "HOLY #HELLASTORM!";
$bg = "background.jpg";
}

if ($surgevalue < 2.2) {
$color = "#f4c215";
$text = "GET YOUR UBERELLAS!";
$bg = "background.jpg";
}

if ($surgevalue < 2.1) {
$color = "#f4c215";
$text = "PUDDLES<br>EVERYWHERE!";
$bg = "background.jpg";
}

if ($surgevalue < 2.0) {
$color = "#f4c215";
$text = "IS THE DROUGHT OVER?";
$bg = "background.jpg";
}

if ($surgevalue < 1.76) {
$color = "#ffff00";
$text = "DOWNPOUR!!";
$bg = "background.jpg";
}

if ($surgevalue < 1.6) {
$color = "#ffff00";
$text = "POURING!!";
$bg = "background.jpg";
}

if ($surgevalue < 1.5) {
$color = "#ffff00";
$text = "H20 IN UR FACE!";
$bg = "background.jpg";
}

if ($surgevalue < 1.5) {
$color = "#ffff00";
$text = "#HELLASTORM TIME!";
$bg = "background.jpg";
}

if ($surgevalue < 1.5) {
$color = "#ffff00";
$text = "YES, ITS RAINING";
$bg = "background.jpg";
}

if ($surgevalue < 1.4) {
$color = "#ffff00";
$text = "RAIN!";
$bg = "background.jpg";
}

if ($surgevalue < 1.26) {
$color = "#ffff00";
$text = "LIGHT RAIN";
$bg = "background.jpg";
}

if ($surgevalue < 1.01) {
$color = "#00de00";
$text = "MAYBE NOT RAINING<br>OR UBER'S FAKIN IT";
$bg = "background-happy.jpg";
}

?>



 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<title>Uber Storm Surge</title>

<meta property="og:description" content="Is it raining in San Francisco? Let's check Uber."/>
<meta name="description" content="Is it raining in San Francisco? Let's check Uber.">
<meta name="keywords" content="Uber,Lyft,storm,rain,San Francisco,SF">
<meta name="author" content="Michael Morgenstern">
<meta property="og:image" content="http://www.uberstormsurge.com/favicon-196x196.png"/>

<link rel="apple-touch-icon-precomposed" sizes="57x57" href="http://www.uberstormsurge.com/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://www.uberstormsurge.com/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://www.uberstormsurge.com/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://www.uberstormsurge.com/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="http://www.uberstormsurge.com/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="http://www.uberstormsurge.com/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="http://www.uberstormsurge.com/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="http://www.uberstormsurge.com/apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="http://www.uberstormsurge.com/favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="http://www.uberstormsurge.com/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="http://www.uberstormsurge.com/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="http://www.uberstormsurge.com/favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="http://www.uberstormsurge.com/favicon-128.png" sizes="128x128" />
<meta name="application-name" content="Uber Storm Surge"/>
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="http://www.uberstormsurge.com/mstile-144x144.png" />
<meta name="msapplication-square70x70logo" content="http://www.uberstormsurge.com/mstile-70x70.png" />
<meta name="msapplication-square150x150logo" content="http://www.uberstormsurge.com/mstile-150x150.png" />
<meta name="msapplication-wide310x150logo" content="http://www.uberstormsurge.com/mstile-310x150.png" />
<meta name="msapplication-square310x310logo" content="http://www.uberstormsurge.com/mstile-310x310.png" />


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
function openFb() {
	var w = 600;
	var h = 271;
	var left = Math.round( (screen.width/2)-(w/2) );
	var top = Math.round( (screen.height/2)-(h/2) );
	window.open ('//facebook.com/sharer.php?u=uberstormsurge.com', 'fblikewindow', config='width='+w+', height='+h+', top='+top+', left='+left+', toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no');
	ga('send', 'social', 'facebook', 'like', 'http://facebook.com/lilyinthegrinder');
}

function openTweet() {
	var w = 550;
	var h = 260;
	var left = Math.round( (screen.width/2)-(w/2) );
	var top = Math.round( (screen.height/2)-(h/2) );
	window.open ('//twitter.com/intent/tweet?original_referer=http%3A%2F%2Fuberstormsurge.com%2F&related=mikemorgenstern&text=Uber%20Storm%20Surge%20tracks%20whether%20it%27s%20raining%20in%20SF%20through%20surge%20pricing%20%23lol%20(%40mikemorgenstern)&tw_p=tweetbutton&url=http%3A%2F%2Fuberstormsurge.com%2F', 'tweetwindow', config='width='+w+', height='+h+', top='+top+', left='+left+', toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no');
	ga('send', 'social', 'twitter', 'share', 'http://lilyinthegrinder.com');
}

</script>


<link rel="stylesheet" href="reset.css">
<link rel="stylesheet" href="style.css">

</head>
<body style="background-image: url('<?php echo $bg; ?>');"> 


<div id="canvas">

	<div id="toppart">
	<h1>Uber Storm Surge</h1>
	<h2>Is it raining in San Francisco? Let's check Uber.</h2>
	<h3>Live updating from the Mission through the official API</b><?php if ($surgevalue < 1.1) { ?>  <br>Update: Uber may be artificially keeping pricing low to avoid bad press.<br> That means VCs are paying for you to get around! <?php } ?>
	</div>
	
	<div id="surgecircle" style="background-color:<?php echo $color; ?>;">
		<div id="introtext">SURGE IS</div>
		<div id="surgevalue"><?php echo number_format($surgevalue,1); ?>x</div>
		<div id="outrotext"><?php echo $text; ?></div>
	</div>

<div id="bottompart">
	<div id="author">Created by <a href="http://everythingisfilm.com">Michael Morgenstern</a> (<a onclick="openTweet();">Tweet</a> | <a onclick="openFb();">Share on Fb</a>)</div>
	<div id="picsource">Image by <a href="https://www.flickr.com/photos/tabor-roeder/5569818223/" target="_blank">Phil Roeder</a>. </div>
</div>

</div>



<script>

function resizeElements() {

circlemargin =  $(window).height() - $('#toppart').outerHeight(true) - $('#bottompart').outerHeight(true) - $('#surgecircle').outerHeight(false);
			$('#surgecircle').css('margin-top', Math.round(  .7*circlemargin/2)  );
			$('#surgecircle').css('margin-bottom', Math.round(  1.3*circlemargin/2)  );
			
}

$(document).ready( function() { resizeElements() });
$(window).resize( function() { resizeElements() });


  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-7635805-3', 'auto');
  ga('send', 'pageview');

setTimeout(function(){
   window.location.reload(1);
}, 200000);

</script>




</body>
</html>