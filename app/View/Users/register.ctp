<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend> Register </legend>
	<?php
		echo $this->Form->input('email');
		echo $this->Form->input('email2',array('label'=>'Confirm Email'));
		echo $this->Form->input('password');
		echo $this->Form->input('password2',array('type' => 'password','label'=>'Confirm Password'));
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
	        echo $this->Form->input('company_name');
		echo $this->Form->input('group_id'); 
               echo $this->Form->input('contact_number');
	
		
	    
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
