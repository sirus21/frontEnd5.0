<h1> Forgotton Your Password ? </h1>

<p> Don’t worry, we’ll have you up and running in minutes. Just enter your email address below: </p> 


<?php
echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' =>'forgottonPassword')));
echo $this->Form->input('User.username',array('label'=>'Email'));
echo $this->Form->end('Send');
?>