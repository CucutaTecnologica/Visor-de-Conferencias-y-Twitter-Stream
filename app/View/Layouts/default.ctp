<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		//Jquery UI
		echo $this->Html->css("admin");
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<div class="navbar">
			  <div class="navbar-inner">
			    <div class="container">
			    	<?php echo $this->Html->image("logo_ico.png", array("class"=>"brand", 'url'=>array('controller'=>'polls', 'action'=>'index')));?>
				     <ul class="nav pull-right">
				     	<?php
				     	if($islogged){
				     		if($isadmin){
				     			echo $this->Element("admin_menu");	
				     		}else{
				     			echo $this->Element("user_menu");
				     		}
				     	}else{
				     		"aca";
				     	}
				     	?>				     	
					</ul>
			    </div>
			  </div>
			</div>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			Robinson Organizational  <?php echo date("Y")?> - All rights reserved
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>