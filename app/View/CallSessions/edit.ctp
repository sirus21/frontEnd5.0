<div class="callSessions form">
<?php echo $this->Form->create('CallSession');?>
	<fieldset>
		<legend><?php echo __('Edit Call Session'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('caller_number');
		echo $this->Form->input('number_called');
		echo $this->Form->input('camp_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CallSession.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CallSession.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Call Sessions'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Camps'), array('controller' => 'camps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Camp'), array('controller' => 'camps', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Calls'), array('controller' => 'calls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Call'), array('controller' => 'calls', 'action' => 'add')); ?> </li>
	</ul>
</div>
