
<h1>  Welcome to the quality partner registration page, just fill out the form to get started </h1> 

<?php echo $this->Form->create('User',array('class' => 'register'));?>
	<fieldset>
		
	<?php
		echo $this->Form->input('email');
		echo $this->Form->input('email2',array('label'=>'Confirm Email'));
		echo $this->Form->input('password');
		echo $this->Form->input('password2',array('type' => 'password','label'=>'Confirm Password'));
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
	        echo $this->Form->input('company_name');
		echo $this->Form->input('contact_number');
	
		
	    
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>

<div class="boxOntheSide">
           <h3> Why you&#039;ll love QualityPartner.co.uk </h3> 
              <ul>
		 <li> Make more cash  </li>
		 <li> Make more cash  </li>
		 <li> Make more cash  </li>
		 
		 
	     </ul> 	

</div> 