<div class="applications form">
<?php echo $this->Form->create('Application');?>
	<fieldset>
		<legend><?php echo __('Edit Application'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('product_id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('phonenumber');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Application.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Application.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Applications'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
