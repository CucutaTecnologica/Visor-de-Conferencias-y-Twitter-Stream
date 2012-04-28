<div class="conferences form">
<?php echo $this->Form->create('Conference');?>
	<fieldset>
		<legend><?php echo __('Edit Conference'); ?></legend>
	<?php
		echo $this->Form->input('description');
		echo $this->Form->input('event_id');
		echo $this->Form->input('author_id');
		echo $this->Form->input('date');
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('time');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Conference.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Conference.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Conferences'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Authors'), array('controller' => 'authors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Author'), array('controller' => 'authors', 'action' => 'add')); ?> </li>
	</ul>
</div>
