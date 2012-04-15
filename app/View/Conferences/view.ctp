<div class="conferences view">
<h2><?php  echo __('Conference');?></h2>
	<dl>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($conference['Conference']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event'); ?></dt>
		<dd>
			<?php echo $this->Html->link($conference['Event']['name'], array('controller' => 'events', 'action' => 'view', $conference['Event']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Author'); ?></dt>
		<dd>
			<?php echo $this->Html->link($conference['Author']['name'], array('controller' => 'authors', 'action' => 'view', $conference['Author']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($conference['Conference']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($conference['Conference']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($conference['Conference']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time'); ?></dt>
		<dd>
			<?php echo h($conference['Conference']['time']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Conference'), array('action' => 'edit', $conference['Conference']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Conference'), array('action' => 'delete', $conference['Conference']['id']), null, __('Are you sure you want to delete # %s?', $conference['Conference']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Conferences'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conference'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Authors'), array('controller' => 'authors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Author'), array('controller' => 'authors', 'action' => 'add')); ?> </li>
	</ul>
</div>
