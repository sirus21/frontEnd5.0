<div class="businessHours view">
<h2><?php  echo __('Business Hour');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($businessHour['BusinessHour']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Camp'); ?></dt>
		<dd>
			<?php echo $this->Html->link($businessHour['Camp']['id'], array('controller' => 'camps', 'action' => 'view', $businessHour['Camp']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Day'); ?></dt>
		<dd>
			<?php echo h($businessHour['BusinessHour']['day']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Open Time'); ?></dt>
		<dd>
			<?php echo h($businessHour['BusinessHour']['open_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Close Time'); ?></dt>
		<dd>
			<?php echo h($businessHour['BusinessHour']['close_time']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Business Hour'), array('action' => 'edit', $businessHour['BusinessHour']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Business Hour'), array('action' => 'delete', $businessHour['BusinessHour']['id']), null, __('Are you sure you want to delete # %s?', $businessHour['BusinessHour']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Business Hours'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business Hour'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Camps'), array('controller' => 'camps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Camp'), array('controller' => 'camps', 'action' => 'add')); ?> </li>
	</ul>
</div>
