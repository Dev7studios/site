<?php	$description = 'Examples for continuous scrolling carousels using the jquery carouFredSel-plugin.';	$keywords = 'continuous, scrolling, sliding, continuously, endlessly, carousel, example, jquery';	$title = 'Intermediate carousels - Examples';	$script_foo1 = '$("#foo1").carouFredSel({	auto	: {		items 			: 5,		duration		: 7500,		easing			: "linear",		timeoutDuration	: 0,		pauseOnHover	: "immediate"	}});';		$script_foo2 = '$("#foo2").carouFredSel({	auto	: {		items 			: 1,		duration		: 1500,		easing			: "linear",		timeoutDuration	: 0	}}).trigger("pause");$("#foo2_prev").hover(function() {	$("#foo2").trigger("configuration", ["direction", "right"]);	$("#foo2").trigger("play");}, function() {	$("#foo2").trigger("pause");}).click(function() {	return false;});$("#foo2_next").hover(function() {	$("#foo2").trigger("configuration", ["direction", "left"]);	$("#foo2").trigger("play");}, function() {	$("#foo2").trigger("pause");}).click(function() {	return false;});';	$scripts = '		<script type="text/javascript" language="javascript">			$(function() {				'.$script_foo1.$script_foo2.'				$("#foo2 .slide div").show();			});		</script>';	include_once '../functies/layout_pre.php';?>				<h1 style="display:none;">Continuously scrolling carousels</h1>				<br />				<h3 id="_continuously_auto">Scrolling continuously automatic</h3>				<ul class="no_marg">				 	<li>Use the &quot;linear&quot; easing for the transition.</li>				 	<li>Pause the carousel &quot;immediate&quot; onMouseOver.</li>				</ul><?php	$E_script = $script_foo1;	include 'scripts/image_carousel.php';	if ( $showAds )	{		echo '				<div class="adsense_center_728">' . $adsense_balk . '				</div>';	}?>				<br />				<br />				<h3 id="_continuously_scrolling">Continuously scrolling with buttons</h3>				<ul class="no_marg">				 	<li>Create a carousel and pause it.</li>				 	<li>Set the direction onMouseOver the buttons and play the carousel.</li>				 	<li>Pause the carousel onMouseOut the buttons.</li>				</ul><?php	$E_script = $script_foo2;	$E_prevnext = true;	include 'scripts/image_carousel.php';		if ( $showAds )	{		echo '				<div class="adsense_center_728">' . $adsense_balk . '				</div>';	}?>				<br /><?php	include 'index.php';	include_once '../functies/layout_post.php';?>