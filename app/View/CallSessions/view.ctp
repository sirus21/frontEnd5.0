h<div class="callSessions view">
<h2><?php  echo __('Call Session');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($callSession['CallSession']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($callSession['CallSession']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Caller Number'); ?></dt>
		<dd>
			<?php echo h($callSession['CallSession']['caller_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number Called'); ?></dt>
		<dd>
			<?php echo h($callSession['CallSession']['number_called']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Camp'); ?></dt>
		<dd>
			<?php echo $this->Html->link($callSession['Camp']['id'], array('controller' => 'camps', 'action' => 'view', $callSession['Camp']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Call Session'), array('action' => 'edit', $callSession['CallSession']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Call Session'), array('action' => 'delete', $callSession['CallSession']['id']), null, __('Are you sure you want to delete # %s?', $callSession['CallSession']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Call Sessions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Call Session'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Camps'), array('controller' => 'camps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Camp'), array('controller' => 'camps', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Calls'), array('controller' => 'calls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Call'), array('controller' => 'calls', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Calls');?></h3>
	<?php if (!empty($callSession['Call'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Caller Phone Number'); ?></th>
		<th><?php echo __('Call Start Time'); ?></th>
		<th><?php echo __('Convo Start Time'); ?></th>
		<th><?php echo __('Call End Time'); ?></th>
		<th><?php echo __('Number Called'); ?></th>
		<th><?php echo __('Tropo Sesh'); ?></th>
		<th><?php echo __('Button Pressed'); ?></th>
		<th><?php echo __('Call Session Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($callSession['Call'] as $call): ?>
		<tr>
			<td><?php echo $call['id'];?></td>
			<td><?php echo $call['caller_phone_number'];?></td>
			<td><?php echo $call['call_start_time'];?></td>
			<td><?php echo $call['convo_start_time'];?></td>
			<td><?php echo $call['call_end_time'];?></td>
			<td><?php echo $call['number_called'];?></td>
			<td><?php echo $call['tropo_sesh'];?></td>
			<td><?php echo $call['button_pressed'];?></td>
			<td><?php echo $call['call_session_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'calls', 'action' => 'view', $call['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'calls', 'action' => 'edit', $call['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'calls', 'action' => 'delete', $call['id']), null, __('Are you sure you want to delete # %s?', $call['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Call'), array('controller' => 'calls', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
