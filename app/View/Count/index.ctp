<?php
	$scripts = array('jquery-1.6.2.min.js', 
		'jquery.countdown.js', 'jquery.countdown-es.js'); 
	
	echo $this->Html->script($scripts);
	echo $this->Html->css('app');
	echo $this->Html->css('jquery.countdown');

?>
<h2>Test Contador</h2>
<div id="countdown_p"></div>
<script type="text/javascript" charset="UTF-8"> 
	var limit = new Date(
		<?php echo $data["year"]; ?>,
		<?php echo $data["month"]-1; ?>,
		<?php echo $data["day"]; ?>,
		<?php echo $data["hour"]; ?>,
		<?php echo $data["min"]; ?>,
		<?php echo $data["sec"]; ?>
	); 
	//$("#countdown_p").countdown($.countdown.regional['es']);  
	$("#countdown_p").countdown({until: limit});
	alert(limit);
</script>
