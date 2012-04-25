<?php echo $this->Html->script(array('jquery-1.6.2.min.js', 'app.js')); ?>
<?php echo $this->Html->css('app'); ?>
<h2>Test Twitter</h2>
<div id="twitter_time"></div>
<script type="text/javascript" charset="UTF-8">
	$(document).ready(function(){
		get_post();
		setInterval(get_post, 10000);
	});
</script>


