


<div class="colOne">
				
				<div class="aside left">
					
					<div class="block greyBlock">
						
					  <div class="innerblock"> 	
						<img width="160" alt="" src="img/<?php   echo $imgpath.'.jpg';?>"/>
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
					  
					
					
					<div class="block">
						<p class="referal_pop">Thank you, you have been refered by Mr. Lettings of Worthing</p>
					</div>
				       </div><!--[end] aside -->
				
				<div class="mainContent right">
					
					<div class="greyBlock">
						<h3>Quickly find the best possible quote for the service you are looking for</h3>
						     
						     <?php  echo $this->Form->create('Application',array('inputDefaults'=> array('div'=>false)));?>
						    
						     <?php	echo $this->Form->input('product_id'); ?> 
						     
						     <?php 	echo $this->Form->input('first_name'); ?> 
						     
						     <?php	echo $this->Form->input('last_name'); ?> 
						     
						     <?php 	echo $this->Form->input('phonenumber'); ?> 
						     
						     <?php	echo $this->Form->input('email'); ?> 
						 <fieldset>
						 </fieldset>		
					         <?php echo $this->Form->end(__('Submit'));?>
		
					</div>
					
				</div><!--[end] mainContent -->
				
			</div><!--[end] colOne -->
			
		</div>



