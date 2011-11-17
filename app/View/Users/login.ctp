<?php
echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' =>'login')));
echo $this->Form->input('User.username',array('label'=>'Email'));
echo $this->Form->input('User.password');
echo $this->Form->end('Login');
?> 