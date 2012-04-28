<?php
	$scripts = array('jquery-1.6.2.min.js', 
		'jquery.countdown.js', 'jquery.countdown-es.js'); 
	
	echo $this->Html->script($scripts);
	echo $this->Html->css('app');
	echo $this->Html->css('jquery.countdown');

?>
<h2>Test Contador</h2>
<div id="countdown"></div>
<script type="text/javascript" charset="UTF-8">
	var newYear = new Date(); 
	newYear = new Date(newYear.getFullYear() + 1, 1 - 1, 1); 
	//$('#countdown').countdown($.countdown.regional['es']);  
	$("#countdown").countdown({until: newYear});
	alert("xd");
</script>


