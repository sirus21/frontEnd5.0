


<div class="colOne">
				
				<div class="aside left">
					
					<div class="block greyBlock">
						
					  <div class="innerblock"> 	
						<img width="160" alt="" src="img/<?php   echo $partner.'.jpg';?>"/>
					  </div> 	
								
					</div>
					  
					 <div class="block greyBlock">
						<h4>Quality Partner</h4>
						<p>QualityPartner is the next evolution of
							affinity partnerships.</p>
						
						<ul>
							<li>Make significant extra profits</li>
							<li>Offer complimentary services</li>
							<li>Fully transparent and trackable</li>
							<li>Leverage your existing customers</li>
						</ul>
				
				
					</div> 
					  
					
					
					
				       </div><!--[end] aside -->
				
				<div class="mainContent right">
					
					<div class="greyBlock">
						<h3>Quickly find the best possible quote for the service you are looking for</h3>
						     
						     <?php  echo $this->Form->create('Application',array('inputDefaults'=> array('div'=>true)));?>
						     <?php//	echo// $this->Form->input('product_id'); ?> 
						     <?php 	echo $this->Form->input('first_name'); ?> 
						     <?php	echo $this->Form->input('last_name'); ?> 
						     <?php echo $this->Form->input('address_line_one'); ?>
						     <?php echo $this->Form->input('post_code'); ?> 
						     <?php 	echo $this->Form->input('phonenumber',array('label'=>'Phone Number')); ?>
				                     <?php	echo $this->Form->input('email'); ?>
						     
						     
						     <?php echo $this->Form->input('partner',array('type'=>'hidden','value'=>$partner)); ?>
						     <?php echo $this->Form->input('product_id',array('type'=>'hidden','value'=>$productid)); ?>  
						 <fieldset>
						 </fieldset>		
					         
						 <?php
						      $options  =  array(
							
							'label' => 'Go',
							'name' => 'Go' ,
							'div' => array(
								'class' => 'submit-button' 
							)
							
						      ); 
						 ?> 
						 
						 <?php echo $this->Form->end($options);?>
		
					</div>
					
				</div><!--[end] mainContent -->
				
			</div><!--[end] colOne -->
			<div  class="textblock"><p>   This sevice is provided for free by QualityPartner.co.uk.We have searched high and low to find high quality companies that combine excellent
			 customer service and great prices. For more information about the service please visit </p> </div>
		</div>



