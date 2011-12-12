<div class="calls form">
<?php echo $this->Form->create('Call');?>
	<fieldset>
		<legend><?php echo __('Add Call'); ?></legend>
	<?php
		echo $this->Form->input('caller_phone_number');
		echo $this->Form->input('call_start_time');
		echo $this->Form->input('convo_start_time');
		echo $this->Form->input('call_end_time');
		echo $this->Form->input('number_called');
		echo $this->Form->input('tropo_sesh');
		echo $this->Form->input('button_pressed');
		echo $this->Form->input('call_session_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Calls'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Call Sessions'), array('controller' => 'call_sessions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Call Session'), array('controller' => 'call_sessions', 'action' => 'add')); ?> </li>
	</ul>
</div>
