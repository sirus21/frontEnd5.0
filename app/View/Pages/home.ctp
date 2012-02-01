            <div class="colOneTwo left">
		

</script>
			<img src="img/speech-mark-left.png"  class="openspeech"/> 
			<p>Quality Partner allows businesses to make money by recommending high quality companies to their customers.</p>
			<img src="img/speech-mark-right.png" class="closespeech" />
			<img src="img/home_page_tile3.jpg" class="lowerImage"/>
			
		</div><!--[end] col 1/2 left -->
		
			<div class="colOneTwo right">
				<div class="greyBox">
					<div class="boxInner">
						<h3 class="cufon-minion">Are you a business owner?</h3>
						<ul>
							<li>Make extra money</li>

							<li>Help customers find great complementary services</li>
							<li>Fully transparent and trackable</li>
							<li>100% free to use</li>
						</ul>
						
						<a href="/contact" title="Register" class="ylButton clearfix"><span>Register </span></a>
					</div> <!--[end] box inner --> 
 				</div><!--[end] greyBox -->
				

			</div><!--[end] col 1/2 right -->
			
			<!-- <div class="twitterLast">
				<h3><strong>Quality_Partner</strong> QualityPartner.co.uk</h3>
				<p class="cufon-caslon">Calling Estate Agent owners in Brighton.... Do you want to make more money? <a href="#" title="">bit.ly/nhutYH</a> - 6 Dec</p>
			</div> -->

			
			<div class="colOne">
				<div class="post">
					<h2>February 2012 Pilot </h2>
					<p>We will be running a trial with Brighton based estate agents and letting agents in February 2012. If you would like to take part please click on &quot;Register&quot;, and we will get in touch.</p>
					<p> For the test we will provide an A4 sheet that estate agents and letting agents include in their moving pack which is given to home buyers and renters. If a customer calls up a complementary service then each estate agent will be paid a commission.</p>		
				</div>
                            
			<div id="Twitter" class="cornerRadius6">
                        <div class="cornerRadius4 twitterCont">
                            		
					
					
					 
					 <div class="cornerRadius6 inner">
					
					
					   <?php
		                   // get 2 latest twits
				   
			          $twits = array_slice($twits, 0,2); 
				  foreach($twits as $key){
			               	    	            
				            echo  '<div class="tweet">';
					    echo  "<a href=\"https://twitter.com/qualitypartner_\"> <h3>QualityPartner_</h3></a>";
				             /*tidy stuff up */ 
					     
				             $key['title']  = preg_replace('/QualityPartner_:/','',$key['title']);
				            // format urls
					     $key['title'] = preg_replace("/(http:\/\/)(.*?)\/([\w\.\/\&\=\?\-\,\:\;\#\_\~\%\+]*)/", "<a href=\"\\0\">\\0</a>", $key['title'] ); 
				    	 
				              
					     $time = $this->Time->niceShort($key['pubDate'],1);
					     
					     // strip month to make it nice 
					       $time =  preg_replace('/,[ \t]*[0-9]{2}:[0-9]{2}/',"",$time);
					   
					         
					    
					    
					    
					    
					    
                                              echo   "<p class=\"cufon-caslon\"> $key[title] - <span> $time </span></p>";			       
				              echo  " </div>  <!-[end] tweet -->";   
				  }
			
			
				  
			    ?> 
					 
					
					 
					 
					 </div> 	
			
                                </div>
			</div>
		</div>