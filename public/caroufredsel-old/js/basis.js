﻿$(function() {//	transparant schadow containers	$('.transparent').each(function() {		var $t = $(this).before('<div class="transparent_top" />').after('<div />'),			$p = $t.prev(),			$b = $t.next();		if ($t.hasClass('p1'))		$p.addClass('p1');		if ($t.hasClass('p2')) 		$p.addClass('p2');		if ($t.hasClass('robot'))	$b.addClass('transparent_schoolboard');		else						$b.addClass('transparent_bottom');	});//	background height	var $pla = $('#placeholder'),		$hea = $('#header'),		$foo = $('#footer');	$(window).bind('resize.a', function() {		var min = $('body').height() - $hea.outerHeight(true) - $foo.outerHeight(true);			$pla.css('height', 'auto');		if ($pla.outerHeight(true) < min) {			$pla.height(min);		}	}).trigger('resize.a');//	redirect download-button	if (window.location.href.indexOf('download.php') == -1) {		$('#header h3 a').click(function() {			setTimeout(function() {				window.location.href = siteroot + 'download.php';			}, 1500);		});	}//	fixed header	var $wd = $(window),		$bd = $('body'),		$bh = ($.browser.webkit) ? $('body') : $('html');		$wd.bind('scroll.b', function() {		var st = $bh.scrollTop(),			fn = (st > 255) ? 'addClass' : 'removeClass';				$bd[fn]( 'fixed' );	}).trigger('scroll.b');});