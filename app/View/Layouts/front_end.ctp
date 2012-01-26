<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $title_for_layout; ?></title>
	<?php
		echo $this->Html->meta('icon');
		//echo $this->Html->css('cake.generic');
		  echo $this->Html->css(array('reset','style','chart'));
		//echo '<!--[if IE 6]>'.$this->Html->css('ie6').'<![endif]-->';
		//echo '<!--[if IE 7]>'.$this->Html->css('ie').'<![endif]-->';
		echo $this->Html->script(array('jquery-1.3.2.min.js', 'jquery-ui.js', 'jquery-fluid16.js','main'));
		echo $scripts_for_layout;
	?>
</head>

<body>

<!-- trigger element. a regular workable link -->



<div id="wrapper">
		
	      
	<div id="wrap">
		
          <div class="flash_good">
	 
	<div class="innnerContent"> Thanks for registering,please check your inbox to learn how to log in </div> 
	
       </div>
	  
	  
	  

	<div id="header">

		<div class="headerInner incenter">
			
			<div id="logo">
				<span title="CallCommission"><a href="http://www.callcommission.com/" title="CallCommission">Call Commissions</a></span>
				<p id="strapline">  </p>
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
	

    


       <ul class="sideTabs">
       <li class="selected" id="menuHome" onclick="www.google.co.uk"><?php echo  $this->Html->link(__('Home'), array('controller' => 'CallSessions',  'action' => 'index')); ?></li>
       <li id="menuEdit"><?php echo  $this->Html->link(__('Payment Details'), array('controller' => 'PaymentDetails',  'action' => 'edit')); ?> </li> 
  </ul>





     </div>
				</div><!--[end] asideLeft -->
				
				<div id="asideRight">
					
				</div><!--[end] asideRight -->
				
				<div id="main">
	
	 <?php   if($this->params['controller'] == "CallSessions")
    
    {
		
    ?> 
	
	 <div class="menuBlock">  	  
	
        <div class="myMenuHolder">	
      
	
       </div> <!--[end] myMenuHolder --> 




      
        <div class="myMenuHolder">
		

       <ul class="myMenu" id="bottommenu">
	                            
	<li><a href="#" id="topMenuItemLeads" class="top">All Leads</a>
	
	<ul class="subUL">
		<li><a id=""  href="#">     All Leads</a></li>
                <li><a id="PMI" href="#">  PMI</a></li>
		<li><a id="LI"  href="#">  LI</a></li>
		
	</ul>	
       </ul>
	
       </div> <!--[end] myMenuHolder --> 
     

      
       <div class="myMenuHolder">		
        <ul class="myMenu" id="topmenu">
	
	<li><a href="#" id="topMenuItem" class="top"><?php
	

	
	
	if (CakeSession::valid()) { echo  CakeSession::read("filter.cleandate");}   ?></a>
	
	<ul class="subUL">
		<li><a id="today"   href="#"> Today  </a></li>
                <li><a id="yesterday"   href="#">Yesterday</a></li>
		<li><a id="2DaysAgo"  href="#">2 Days Ago</a></li>
		<li><a id="last7Days" href="#">Last 7 Days</a></li>
		<li><a id="last14Days"  href="#">Last 14 Days</a></li>
		<li><a id="last30Days"  href="#">Last 30 Days</a></li>
		<li><a id="last90Days"  href="#">Last 90 Days</a></li>
	         <!-- <li><a id="custom" href="#">      Custom     </a></li> --> 
	</ul>	
       
	</ul>
	
       </div> <!--[end] myMenuHolder -->   
    
       
	</div><!--[end] menuBlock-->   
                                        <div class="menuBlock">  	  
	
        <div class="myMenuHolder" >	
      
	
	
       </div> <!--[end] myMenuHolder --> 
      
    </div><!--[end] menuBlock-->   
    
    
    
    
    <div class="mainInner" id="mainContent">

    <?php  } ?> 						
						
						
						
						
					

        
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
             <?php echo $this->element('sql_dump'); ?>
	</div><!--[end] footerInner -->	



    



	</div><!--[end] footer -->







	
</body>
</html>
<?php echo $js->writeBuffer(); ?>