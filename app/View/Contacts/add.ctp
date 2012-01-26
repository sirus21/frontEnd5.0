
<div class="colOne">
				
				<div class="aside left">
					
					<div class="block greyBlock">
						
					  <div class="innerblock"> 	
					     
                                                <p> Unit 2 The Action Rooms </p>
                                                <p> 28 Gloucester Street</p> 
                                                <p> Brighton </p> 
                                                <p> BN1 4EW </p>
                                                <p> 01273 677656 </p> 
                                                
					  </div> 	
								
					</div>
					  
				
					
					
					
		 </div><!--[end] aside -->
				
				<div class="mainContent right">
					
					<div class="greyBlock">
						<h3>If you are interested in any aspect of our service please get in touch, fill out the form to email us:</h3>
						    
                                            
                                                     
						     <?php  echo $this->Form->create('Contact',array('inputDefaults'=> array('div'=>true)));?>
						     <?php	echo $this->Form->input('first_name'); ?> 
						     <?php	echo $this->Form->input('last_name'); ?>
                                                     <?php	echo $this->Form->input('company_name'); ?>
                                                     <?php	echo $this->Form->input('contact_number'); ?>
                                                     <?php	echo $this->Form->input('email'); ?>
                                                     <?php
                                                             $options = array('type' => 'textarea', 'escape' => false);
                                                             echo $this->Form->input('message',$options); ?> 
					
					
						     
						     
						  
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
			
