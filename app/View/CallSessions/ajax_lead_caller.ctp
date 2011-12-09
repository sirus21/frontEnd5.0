

<div class="statBlock">



<div class="statInnnerBlock">
<span class="mini-counts">


<?php
echo $this->Paginator->counter(array(
'format' => __('{:count}')
));
?> </span>
referrals
</div>
<div class="statInnerBlock">
<span class="mini-counts">


<?php    echo  $profit;  ?>




</span>
profit
</div>

</div>




<table cellpadding="0" cellspacing="0" id="hor-zebra">
<tr>
<th><?php echo $this->Paginator->sort('id');?></th>
<th><?php echo $this->Paginator->sort('created','Date');?></th>
<th><?php echo $this->Paginator->sort('camp_id','Product');?></th>
<th><?php echo $this->Paginator->sort('payout','Payout'); ?>
</tr>
<?php
$i = 0;
foreach ($callSessions as $callSession): ?>
<tr>
<td><?php echo h($callSession['CallSession']['id']); ?>&nbsp;</td>
<td><?php echo $this->Time->format('F jS, h:i A',$callSession['CallSession']['created'],-0) ?> </td>
<td><?php echo $callSession['Camp']['camp_long_name'] ?> </td>
<td><?php echo "&pound;".$callSession['Camp']['payout'] ?> </td>
</td>
</tr>
<?php endforeach; ?>
</table>
<p>
<?php
echo $this->Paginator->counter(array(
'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
));
?> </p>

<div class="paging">
<?php
echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
echo $this->Paginator->numbers(array('separator' => ''));
echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
?>
</div>
<?php