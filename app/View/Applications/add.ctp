


<div class="colOne">
				
				<div id="pageTitle">
					<h2>Life insurance Quote</h2>
				</div>
					
				<div class="aside left">
					
					<div class="block greyBlock">
					
					    
					
				
					
					
						<form id="referalForm">
							<fieldset>
								<label for="ref_code">Please enter your referal code</label>
								<input type="text" value="" placeholder="XXX" name="ref_code" id="ref_code" class="text" />
								<input type="hidden" name="form_submitted" value="submitted" />
								<input type="image" name="go" src="images/btn_go.png" class="go" id="go_btn" />
							</fieldset>
						</form>
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



