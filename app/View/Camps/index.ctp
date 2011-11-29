<div class="camps index">
	<h2><?php echo __('Camps');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('merchant_name');?></th>
			<th><?php echo $this->Paginator->sort('camp_name');?></th>
			<th><?php echo $this->Paginator->sort('camp_description');?></th>
			<th><?php echo $this->Paginator->sort('payout');?></th>
			<th><?php echo $this->Paginator->sort('talk_time');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('forward_number');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($camps as $camp): ?>
	<tr>
		<td><?php echo h($camp['Camp']['id']); ?>&nbsp;</td>
		<td><?php echo h($camp['Camp']['merchant_name']); ?>&nbsp;</td>
		<td><?php echo h($camp['Camp']['camp_name']); ?>&nbsp;</td>
		<td><?php echo h($camp['Camp']['camp_description']); ?>&nbsp;</td>
		<td><?php echo h($camp['Camp']['payout']); ?>&nbsp;</td>
		<td><?php echo h($camp['Camp']['talk_time']); ?>&nbsp;</td>
		<td><?php echo h($camp['Camp']['created']); ?>&nbsp;</td>
		<td><?php echo h($camp['Camp']['modified']); ?>&nbsp;</td>
		<td><?php echo h($camp['Camp']['forward_number']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $camp['Camp']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $camp['Camp']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $camp['Camp']['id']), null, __('Are you sure you want to delete # %s?', $camp['Camp']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Camp'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Business Hours'), array('controller' => 'business_hours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business Hour'), array('controller' => 'business_hours', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Call Sessions'), array('controller' => 'call_sessions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Call Session'), array('controller' => 'call_sessions', 'action' => 'add')); ?> </li>
	</ul>
</div>
