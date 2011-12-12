<h1> Forgotton Your Password ? </h1>

<p> Please choose a new password </p> 

<fieldset>
		<legend> Enter you new password below </legend>
<?php

echo $this->Form->create('User', array('/resetpword'.$urlID.$urlCode));
echo $this->Form->input('password');
echo $this->Form->input('password2',array('type' => 'password','label'=>'Confirm Password'));



?>

</fieldset>
<?php echo $this->Form->end(__('Submit'));?>