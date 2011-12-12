<h1>Please choose a new password  </h1>


<?php



echo $this->Form->create('User', array('action'=>'/resetpword'.$urlID.$code,'class' => 'register login'));
echo $this->Form->input('password');
echo $this->Form->input('password2',array('type' => 'password','label'=>'Confirm Password'));


?>

</fieldset>
<?php echo $this->Form->end(__('Submit'));?>