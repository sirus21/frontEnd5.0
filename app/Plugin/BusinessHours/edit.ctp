<div class="businessHours form">
<?php echo $this->Form->create('BusinessHour');?>
	<fieldset>
		<legend><?php echo __('Edit Business Hour'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('camp_id');
		echo $this->Form->input('day');
		echo $this->Form->input('open_time');
		echo $this->Form->input('close_time');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('BusinessHour.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('BusinessHour.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Business Hours'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Camps'), array('controller' => 'camps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Camp'), array('controller' => 'camps', 'action' => 'add')); ?> </li>
	</ul>
</div>
