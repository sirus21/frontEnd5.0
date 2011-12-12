<div class="camps form">
<?php echo $this->Form->create('Camp');?>
	<fieldset>
		<legend><?php echo __('Add Camp'); ?></legend>
	<?php
		echo $this->Form->input('merchant_name');
		echo $this->Form->input('camp_name');
		echo $this->Form->input('camp_description');
		echo $this->Form->input('payout');
		echo $this->Form->input('talk_time');
		echo $this->Form->input('forward_number');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Camps'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Business Hours'), array('controller' => 'business_hours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business Hour'), array('controller' => 'business_hours', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Call Sessions'), array('controller' => 'call_sessions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Call Session'), array('controller' => 'call_sessions', 'action' => 'add')); ?> </li>
	</ul>
</div>
