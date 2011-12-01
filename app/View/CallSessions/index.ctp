<?php
echo $this->Html->script('jquery'); // Include jQuery library
?>
 <?php $this->Paginator->options(array(     'update' => '#content',     'evalScripts' => true )); ?>

<script type="text/javascript">
		$(document).ready(function(){
		var loaded_messages = 0;
			$("#more_button").click(function(){
				
				alert("hello"); 
				
				
			
			        $.get("http://localhost/cakeWorkIn/CalLSessions/loadleads", function(data){
				
					$('#leads').html(data);
					$('#hor-zebra tr:even').addClass('even'); 
 
				});
			
			
			
			/*	loaded_messages += 10;
				$.get("twitter/get_messages/" + loaded_messages, function(data){
					$("#main_content").append(data);
 
				});
 
				if(loaded_messages >= num_messages - 10)
				{
					$("#more_button").hide();
					//alert('hide');
				}
				
				
			*/
			})
		})
</script>









<div class="callSessions index">
	 <p id="more_button"> more </p> 
	
	<h2><?php echo __('Leads');?></h2>
	<div>
	
	<div   class="grid_4" id="admin-left-menu">
		
	
	<ul class="section menu">
		<li><?php echo $this->Html->link(__('New Call Session'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Camps'), array('controller' => 'camps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Camp'), array('controller' => 'camps', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Calls'), array('controller' => 'calls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Call'), array('controller' => 'calls', 'action' => 'add')); ?> </li>
	</ul>
     </div>
	
	
	<div id="leads">
	<table cellpadding="0" cellspacing="0" id="hor-zebra">
		
	<tr>
	
	                 
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('created','Date');?></th>
			<th><?php echo $this->Paginator->sort('camp_id','Product');?></th>
		
	
	</tr>
	
	
	<?php
	$i = 0;
	foreach ($callSessions as $callSession): ?>
	<tr>
		<td><?php echo h($callSession['CallSession']['id']); ?>&nbsp;</td>
		<td><?php   echo $this->Time->format('F jS, h:i A',$callSession['CallSession']['created'],-0) ?> </td> 
		<td>
			<?php echo $this->Html->link($callSession['Camp']['camp_long_name'], array('controller' => 'camps', 'action' => 'view', $callSession['Camp']['id'])); ?>		
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

