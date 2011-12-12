<div class="camps view">
<h2><?php  echo __('Camp');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($camp['Camp']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Merchant Name'); ?></dt>
		<dd>
			<?php echo h($camp['Camp']['merchant_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Camp Name'); ?></dt>
		<dd>
			<?php echo h($camp['Camp']['camp_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Camp Description'); ?></dt>
		<dd>
			<?php echo h($camp['Camp']['camp_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payout'); ?></dt>
		<dd>
			<?php echo h($camp['Camp']['payout']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Talk Time'); ?></dt>
		<dd>
			<?php echo h($camp['Camp']['talk_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($camp['Camp']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($camp['Camp']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Forward Number'); ?></dt>
		<dd>
			<?php echo h($camp['Camp']['forward_number']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Camp'), array('action' => 'edit', $camp['Camp']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Camp'), array('action' => 'delete', $camp['Camp']['id']), null, __('Are you sure you want to delete # %s?', $camp['Camp']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Camps'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Camp'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Business Hours'), array('controller' => 'business_hours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business Hour'), array('controller' => 'business_hours', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Call Sessions'), array('controller' => 'call_sessions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Call Session'), array('controller' => 'call_sessions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Business Hours');?></h3>
	<?php if (!empty($camp['BusinessHour'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Camp Id'); ?></th>
		<th><?php echo __('Day'); ?></th>
		<th><?php echo __('Open Time'); ?></th>
		<th><?php echo __('Close Time'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($camp['BusinessHour'] as $businessHour): ?>
		<tr>
			<td><?php echo $businessHour['id'];?></td>
			<td><?php echo $businessHour['camp_id'];?></td>
			<td><?php echo $businessHour['day'];?></td>
			<td><?php echo $businessHour['open_time'];?></td>
			<td><?php echo $businessHour['close_time'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'business_hours', 'action' => 'view', $businessHour['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'business_hours', 'action' => 'edit', $businessHour['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'business_hours', 'action' => 'delete', $businessHour['id']), null, __('Are you sure you want to delete # %s?', $businessHour['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Business Hour'), array('controller' => 'business_hours', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Call Sessions');?></h3>
	<?php if (!empty($camp['CallSession'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Caller Number'); ?></th>
		<th><?php echo __('Number Called'); ?></th>
		<th><?php echo __('Camp Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($camp['CallSession'] as $callSession): ?>
		<tr>
			<td><?php echo $callSession['id'];?></td>
			<td><?php echo $callSession['created'];?></td>
			<td><?php echo $callSession['caller_number'];?></td>
			<td><?php echo $callSession['number_called'];?></td>
			<td><?php echo $callSession['camp_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'call_sessions', 'action' => 'view', $callSession['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'call_sessions', 'action' => 'edit', $callSession['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'call_sessions', 'action' => 'delete', $callSession['id']), null, __('Are you sure you want to delete # %s?', $callSession['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Call Session'), array('controller' => 'call_sessions', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
