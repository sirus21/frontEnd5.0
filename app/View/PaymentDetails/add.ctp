
<?php echo $this->Form->create('PaymentDetail',array('class'=>'register login'));?>
	<h1> Add Payment Details </h1> 
	
	<?php
	
		echo $this->Form->input('bank_name');
		echo $this->Form->input('account_name');
		echo $this->Form->input('bank_address1');
		echo $this->Form->input('bank_address2');
		echo $this->Form->input('town');
		echo $this->Form->input('post_code');
		echo $this->Form->input('vat_number');
	?>
	
<?php echo $this->Form->end(__('Submit'));?>
</div>
