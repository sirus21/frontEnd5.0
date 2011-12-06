<?php header('Content-Type: text/html; charset=utf-8');  ?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php    echo $this->Html->charset('utf-8');      // echo $this->Html->charset(); ?>
	<title><?php echo $title_for_layout; ?></title>
	<?php
		echo $this->Html->meta('icon');
		//echo $this->Html->css('cake.generic');
		  echo $this->Html->css(array('reset','style'));
		//echo '<!--[if IE 6]>'.$this->Html->css('ie6').'<![endif]-->';
		//echo '<!--[if IE 7]>'.$this->Html->css('ie').'<![endif]-->';
		echo $this->Html->script(array('jquery-1.3.2.min.js', 'jquery-ui.js', 'jquery-fluid16.js'));
		echo $scripts_for_layout;
	?>
</head>

<body>

<!-- trigger element. a regular workable link -->



<div id="wrapper">
      			
	        <?php echo $this->Session->flash(); ?>	
	<div id="wrap">	

	<div id="header">

		<div class="headerInner incenter">
			
			<div id="logo">
				<span title="CallCommission"><a href="/" title="Quality Partner">Call Commissions</a></span>
				 <!-- <p id="strapline"> The UK's First PayPerCall Affiliate Network </p> --> 
			</div><!--[end] logo -->
			
			<div id="topNav">

			</div><!--[end] topNav -->

			
<!-- commented out login link
			<div id="userBar">
				<a href="/login/login-page.html" title="Login">Login</a>

			</div><!--[end] userBar -->
			
			
			
			
			
			

<!--modx personalised header below-->

<div id="userBar">

<span id="logged_in_status"> <?php  if(!empty($username)){
	                                                                echo $username."   ";  echo $this->Html->link(__('Sign Out'), array('controller' => 'users', 'action' => 'logout'));
}?>
</div>
	

<!--modx personalised header above ends-->
		
		</div><!--[end] headerInner -->
	
                </div><!--[end] header -->
	



	
	<div id="content">
		
		
		<div class="contentInner">
			<div class="incenter">
				
				<div id="asideLeft">
					<div class="asideLeftInner">
	

    


     





     </div>
				</div><!--[end] asideLeft -->
				
				<div id="asideRight">
					
				</div><!--[end] asideRight -->
				
				<div id="main_not_logged_in">
			
                                       <div class="mainInner" id="mainContent">
		
						
						
						
						
					

        
  	<?php echo $content_for_layout; ?>	
   

  
   
     


  
            
           
  
       
    </table>
      
      
      	<?php //ho $content_for_layout; ?>				
						
       <input type="hidden"  id="moneyPaid" value="90" />       
       

						
						
						
						
						
						
						
						
						
					</div>
				</div><!--[end] main -->
				
				
			</div>
		</div><!--[end] contentInner -->
	</div><!--[end] content -->
	
	</div><!--[end] wrap -->

</div><!--[end] wrapper -->



<div id="footer">
		<div class="footerInner">
		
			
			<div id="footerMenu">
				<div class="incenter">
					<div class="col">
						
					</div>
					<div class="col">
						<ul>
							
						</ul>
					</div>




				
						



						</ul>
					</div>
				</div>

			</div><!--[end] footerMenu -->			

	</div><!--[end] footerInner -->	







	</div><!--[end] footer -->







	
</body>
</html>