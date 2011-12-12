<div class="paymentDetails form">
<?php echo $this->Form->create('PaymentDetail');?>
	<fieldset>
		<legend><?php echo __('Please Edit  Your Payment Detail'); ?></legend>
	<?php
		
		echo $this->Form->input('bank_name');
		echo $this->Form->input('account_name');
		echo $this->Form->input('bank_address1');
		echo $this->Form->input('bank_address2');
		echo $this->Form->input('town');
		echo $this->Form->input('post_code');
		echo $this->Form->input('vat_number');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>

