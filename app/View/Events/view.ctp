<div class="events view">
<h2><?php  echo __('Event');?></h2>
	<dl>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($event['Event']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hashtag'); ?></dt>
		<dd>
			<?php echo h($event['Event']['hashtag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($event['Event']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($event['Event']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Event'), array('action' => 'edit', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Event'), array('action' => 'delete', $event['Event']['id']), null, __('Are you sure you want to delete # %s?', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conferences'), array('controller' => 'conferences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conference'), array('controller' => 'conferences', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Conferences');?></h3>
	<?php if (!empty($event['Conference'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Event Id'); ?></th>
		<th><?php echo __('Author Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Time'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($event['Conference'] as $conference): ?>
		<tr>
			<td><?php echo $conference['description'];?></td>
			<td><?php echo $conference['event_id'];?></td>
			<td><?php echo $conference['author_id'];?></td>
			<td><?php echo $conference['date'];?></td>
			<td><?php echo $conference['id'];?></td>
			<td><?php echo $conference['name'];?></td>
			<td><?php echo $conference['time'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'conferences', 'action' => 'view', $conference['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'conferences', 'action' => 'edit', $conference['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'conferences', 'action' => 'delete', $conference['id']), null, __('Are you sure you want to delete # %s?', $conference['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Conference'), array('controller' => 'conferences', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
