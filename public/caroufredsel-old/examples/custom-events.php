<?php	$description = 'Examples on how to use the custom events on the carouFredSel-plugin. With the custom events, the carousel can be controlled externally.';	$keywords = 'custom, events, examples, pause, play, next, prev, slideTo, functions, methods';	$title = 'Using the custom events - Examples';		$script_foo1 = '$("#foo1").carouFredSel({	auto	: false,	scroll	: {		duration : 0.5	}}).find("li").click(function() {	var deviation = parseInt( $("#foo1_deviation").val() );	$("#foo1").trigger("slideTo", [$(this), deviation]);}).css("cursor", "pointer");';	$script_foo2 = '$("#foo2").carouFredSel({	auto	: {		button			: "#foo2_play"	},	scroll	: {		duration		: 1000,		timeoutDuration	: 2000	}}).trigger("pause");';	$scripts = '		<script type="text/javascript" language="javascript">			$(function() {				'.$script_foo1.$script_foo2.'			});		</script>';	include_once '../functies/layout_pre.php';?>				<h1>Using the custom events</h1>				<p>For every carousel, a series of custom events is available. Please see the <a href="../custom-events.php">custom events-page</a> for a complete overview of all the custom events.</p>				<br />				<p class="no_marg"><strong>Click on an item</strong> to scroll the carousel to that item using the <code>slideTo</code> event. Optionally, set a <code>deviation</code>:</p>				<select id="foo1_deviation" name="deviation" size="1">					<optgroup label="Stop the carousel to the left of the clicked item:">						<option value="-5">-5 (carousel scrolls 5 items to the left of the clicked item)</option>						<option value="-4">-4 (carousel scrolls 4 items to the left of the clicked item)</option>						<option value="-3">-3 (carousel scrolls 3 items to the left of the clicked item)</option>						<option value="-2">-2 (carousel scrolls 2 items to the left of the clicked item)</option>						<option value="-1">-1 (carousel scrolls 1 item  to the left of the clicked item)</option>					</optgroup>					<option value="0" class="first last" selected="selected">0 (carousel scrolls to the clicked item)</option>					<optgroup label="Stop the carousel to the right of the clicked item:">						<option value="1">1 (carousel scrolls 1 item  to the right of the clicked item)</option>						<option value="2">2 (carousel scrolls 2 items to the right of the clicked item)</option>						<option value="3">3 (carousel scrolls 3 items to the right of the clicked item)</option>						<option value="4">4 (carousel scrolls 4 items to the right of the clicked item)</option>						<option value="5">5 (carousel scrolls 5 items to the right of the clicked item)</option>					</optgroup>				</select><?php	$E_script 	= $script_foo1;	$E_element	= 'ul';	include 'scripts/list_carousel.php';		if ( $showAds )	{		echo '				<div class="adsense_center_728">' . $adsense_balk . '				</div>';	}?>				<br />				<br />				<p class="no_marg"><strong>Activate the carousel</strong> by clicking the &quot;play&quot; button.</p><?php	$E_script = $script_foo2;	include 'scripts/image_carousel.php';	if ( $showAds )	{		echo '				<div class="adsense_center_728">' . $adsense_balk . '				</div>';	}?>				<br /><?php	include 'index.php';	include_once '../functies/layout_post.php';?>