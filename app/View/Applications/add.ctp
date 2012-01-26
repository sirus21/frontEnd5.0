


<div class="colOne">
				
				<div class="aside left">
					
										  
					 <div class="block greyBlock">
						<h4>Our Service</h4>
						<p>Quality Partner helps you find a great quote on services we think you might need.</p>
						
						<ul>
							<li>Free  no-obligation quote</li>
							<li>Local services</li>
							<li>Vetted companies</li>
							<li>Save time and money</li>
						</ul>
						
						<p>Quality Partner was set-up to help you find great companies that you can trust. We try to work with local companies but sometimes this can't be done so we put you in contact with high quality national companies who serve your area.
</p>
				 
				
				
					</div> 
					  
					
					
					
				       </div><!--[end] aside -->
				
				<div class="mainContent right">
					
					<div class="greyBlock">
						<h3>Just fill out the form and get a quick quote </h3>
						     
						     <?php  echo $this->Form->create('Application',array('inputDefaults'=> array('div'=>true)));?>
						     <?php	echo $this->Form->input('first_name'); ?> 
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



