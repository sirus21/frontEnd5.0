
<h1>  Log in and see how much money your business has generated  </h1> 
<?php



echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' =>'login'),'class' =>'register login'));
echo $this->Form->input('User.username',array('label'=>'Email'));
echo $this->Form->input('User.password');

?> 
 

 
<?php
echo $this->Form->end('Login');

?>
<div class="baseFormLink">
     
      <span> <?php echo $this->Html->link(__('Register'), array('action' => 'register') )?> </span>
      <span> <?php echo $this->Html->link(__('Forgotton Password'), array('action' => 'forgottonPassword')) ?> </span>
 

</div>
 
 
 