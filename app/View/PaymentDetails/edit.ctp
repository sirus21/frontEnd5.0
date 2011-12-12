<script type="text/javascript">

      $(document).ready(function(){  
   
               $("#menuHome").removeClass("selected");
	       $("#menuEdit").addClass("selected");
    
      })

</script>


<?php echo $this->Form->create('PaymentDetail',array('class'=>'register login'));?>
	
	
	<h1> Hit save to edit your payment details </h1> 
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
<?php echo $this->Form->end(__('Save'));?>

