<div class="authors view">
<h2><?php  echo __('Author');?></h2>
	<dl>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($author['Author']['country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($author['Author']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($author['Author']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profession'); ?></dt>
		<dd>
			<?php echo h($author['Author']['profession']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Twitter'); ?></dt>
		<dd>
			<?php echo h($author['Author']['twitter']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Author'), array('action' => 'edit', $author['Author']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Author'), array('action' => 'delete', $author['Author']['id']), null, __('Are you sure you want to delete # %s?', $author['Author']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Authors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Author'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conferences'), array('controller' => 'conferences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conference'), array('controller' => 'conferences', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Conferences');?></h3>
	<?php if (!empty($author['Conference'])):?>
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
		foreach ($author['Conference'] as $conference): ?>
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
