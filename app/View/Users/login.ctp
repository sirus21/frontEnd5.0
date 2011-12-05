<?php
echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' =>'login')));
echo $this->Form->input('User.username',array('label'=>'Email'));
echo $this->Form->input('User.password');
echo $this->Form->end('Login');

?>
<p> hi there </p> 


 <span> <?php echo $this->Html->link(__('Register'), array('action' => 'register')); ?> </span>
 <span> <?php echo $this->Html->link(__('Forgotton Password'), array('action' => 'forgottonPassword')); ?> </span> 