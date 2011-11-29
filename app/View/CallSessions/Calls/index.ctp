<div class="calls index">
	<h2><?php echo __('Calls');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('caller_phone_number');?></th>
			<th><?php echo $this->Paginator->sort('call_start_time');?></th>
			<th><?php echo $this->Paginator->sort('convo_start_time');?></th>
			<th><?php echo $this->Paginator->sort('call_end_time');?></th>
			<th><?php echo $this->Paginator->sort('number_called');?></th>
			<th><?php echo $this->Paginator->sort('tropo_sesh');?></th>
			<th><?php echo $this->Paginator->sort('button_pressed');?></th>
			<th><?php echo $this->Paginator->sort('call_session_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($calls as $call): ?>
	<tr>
		<td><?php echo h($call['Call']['id']); ?>&nbsp;</td>
		<td><?php echo h($call['Call']['caller_phone_number']); ?>&nbsp;</td>
		<td><?php echo h($call['Call']['call_start_time']); ?>&nbsp;</td>
		<td><?php echo h($call['Call']['convo_start_time']); ?>&nbsp;</td>
		<td><?php echo h($call['Call']['call_end_time']); ?>&nbsp;</td>
		<td><?php echo h($call['Call']['number_called']); ?>&nbsp;</td>
		<td><?php echo h($call['Call']['tropo_sesh']); ?>&nbsp;</td>
		<td><?php echo h($call['Call']['button_pressed']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($call['CallSession']['id'], array('controller' => 'call_sessions', 'action' => 'view', $call['CallSession']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $call['Call']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $call['Call']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $call['Call']['id']), null, __('Are you sure you want to delete # %s?', $call['Call']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Call'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Call Sessions'), array('controller' => 'call_sessions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Call Session'), array('controller' => 'call_sessions', 'action' => 'add')); ?> </li>
	</ul>
</div>
