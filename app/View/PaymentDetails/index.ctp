<div class="paymentDetails index">
	<h2><?php echo __('Payment Details');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			
			<th><?php echo $this->Paginator->sort('bank_name');?></th>
			<th><?php echo $this->Paginator->sort('account_name');?></th>
			<th><?php echo $this->Paginator->sort('bank_address1');?></th>
			<th><?php echo $this->Paginator->sort('bank_address2');?></th>
			<th><?php echo $this->Paginator->sort('town');?></th>
			<th><?php echo $this->Paginator->sort('post_code');?></th>
			<th><?php echo $this->Paginator->sort('vat_number');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($paymentDetails as $paymentDetail): ?>
	<tr>
		<td><?php echo h($paymentDetail['PaymentDetail']['id']); ?>&nbsp;</td>
		<td><?php echo h($paymentDetail['PaymentDetail']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($paymentDetail['User']['id'], array('controller' => 'users', 'action' => 'view', $paymentDetail['User']['id'])); ?>
		</td>
		<td><?php echo h($paymentDetail['PaymentDetail']['bank_name']); ?>&nbsp;</td>
		<td><?php echo h($paymentDetail['PaymentDetail']['account_name']); ?>&nbsp;</td>
		<td><?php echo h($paymentDetail['PaymentDetail']['bank_address1']); ?>&nbsp;</td>
		<td><?php echo h($paymentDetail['PaymentDetail']['bank_address2']); ?>&nbsp;</td>
		<td><?php echo h($paymentDetail['PaymentDetail']['town']); ?>&nbsp;</td>
		<td><?php echo h($paymentDetail['PaymentDetail']['post_code']); ?>&nbsp;</td>
		<td><?php echo h($paymentDetail['PaymentDetail']['vat_number']); ?>&nbsp;</td>
		<td><?php echo h($paymentDetail['PaymentDetail']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $paymentDetail['PaymentDetail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $paymentDetail['PaymentDetail']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $paymentDetail['PaymentDetail']['id']), null, __('Are you sure you want to delete # %s?', $paymentDetail['PaymentDetail']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Payment Detail'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
