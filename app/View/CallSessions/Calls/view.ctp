<div class="calls view">
<h2><?php  echo __('Call');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($call['Call']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Caller Phone Number'); ?></dt>
		<dd>
			<?php echo h($call['Call']['caller_phone_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Call Start Time'); ?></dt>
		<dd>
			<?php echo h($call['Call']['call_start_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Convo Start Time'); ?></dt>
		<dd>
			<?php echo h($call['Call']['convo_start_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Call End Time'); ?></dt>
		<dd>
			<?php echo h($call['Call']['call_end_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number Called'); ?></dt>
		<dd>
			<?php echo h($call['Call']['number_called']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tropo Sesh'); ?></dt>
		<dd>
			<?php echo h($call['Call']['tropo_sesh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Button Pressed'); ?></dt>
		<dd>
			<?php echo h($call['Call']['button_pressed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Call Session'); ?></dt>
		<dd>
			<?php echo $this->Html->link($call['CallSession']['id'], array('controller' => 'call_sessions', 'action' => 'view', $call['CallSession']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Call'), array('action' => 'edit', $call['Call']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Call'), array('action' => 'delete', $call['Call']['id']), null, __('Are you sure you want to delete # %s?', $call['Call']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Calls'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Call'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Call Sessions'), array('controller' => 'call_sessions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Call Session'), array('controller' => 'call_sessions', 'action' => 'add')); ?> </li>
	</ul>
</div>
