
        <table cellpadding="0" cellspacing="0">
		
	<tr>
	
	                 
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('caller_number');?></th>
			<th><?php echo $this->Paginator->sort('number_called');?></th>
			<th><?php echo $this->Paginator->sort('camp_id');?></th>
		
	
	</tr>
	
	
	<?php
	$i = 0;
	foreach ($callSessions as $callSession): ?>
	<tr>
		<td><?php echo h($callSession['CallSession']['id']); ?>&nbsp;</td>
		<td><?php echo h($callSession['CallSession']['created']); ?>&nbsp;</td>
		<td><?php echo h($callSession['CallSession']['caller_number']); ?>&nbsp;</td>
		<td><?php echo h($callSession['CallSession']['number_called']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($callSession['Camp']['id'], array('controller' => 'camps', 'action' => 'view', $callSession['Camp']['id'])); ?>		
		</td>
		<td>
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

<?php
//echo $this->Js->writeBuffer(); // Write cached scripts

