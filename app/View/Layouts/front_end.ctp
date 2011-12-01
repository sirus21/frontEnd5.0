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
		echo $this->Html->script(array('jquery-1.3.2.min.js', 'jquery-ui.js', 'jquery-fluid16.js'));
		echo $scripts_for_layout;
	?>
</head>

<body>

<!-- trigger element. a regular workable link -->



<div id="wrapper">

	<div id="wrap">	

	<div id="header">

		<div class="headerInner incenter">
			
			<div id="logo">
				<span title="CallCommission"><a href="http://www.callcommission.com/" title="CallCommission">Call Commissions</a></span>
				<p id="strapline"> The UK's First PayPerCall Affiliate Network </p>
			</div><!--[end] logo -->
			
			<div id="topNav">

			</div><!--[end] topNav -->

			
<!-- commented out login link
			<div id="userBar">
				<a href="/login/login-page.html" title="Login">Login</a>

			</div><!--[end] userBar -->

<!--modx personalised header below-->

<div id="userBar">

<span id="logged_in_status">Signed in: joeg (<a href="http://www.callcommission.com/login/login-page.html?service=logout">Sign out</a>)</span>
<span id="logged_in_status"><a href="http://www.callcommission.com/login/members-home-page.html">My Account</a></span>
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
       <li class="selected" id="menuHome"><a> Home </a></li>
       <li id="menuEdit"><a> Payment details </a></li> 
  </ul>





     </div>
				</div><!--[end] asideLeft -->
				
				<div id="asideRight">
					
				</div><!--[end] asideRight -->
				
				<div id="main">
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
	
	<li><a href="#" id="topMenueItem" class="top">Today</a>
	<ul class="subUL">
		<li><a id="today"        href="#">Today</a></li>
                <li><a id="yesterday"    href="#">Yesterday</a></li>
		<li><a id="2DaysAgo"      href="#">2 Days Ago</a></li>
		<li><a id="last7Days"     href="#">Last 7 Days</a></li>
		<li><a id="last14Days"   href="#">Last 14 Days</a></li>
		<li><a id="last30Days"   href="#">Last 30 Days</a></li>
		<li><a id="last90Days"   href="#">Last 90 Days</a></li>
	        <li><a id="custom" href="#">      Custom     </a></li>
	</ul>	
       </ul>
	</div> <!--[end] myMenuHolder -->   
    </div><!--[end] menuBlock-->   
                                        <div class="menuBlock">  	  
	
        <div class="myMenuHolder" >	
      
	
	
       </div> <!--[end] myMenuHolder --> 
      
    </div><!--[end] menuBlock-->   
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
						<ul>
							<li><a href="login/request-membership.html" title="">Join Us</a></li>
							<li><a href="/info/faq-for-affiliates.html" title="">FAQ for Affiliates</a></li>
							<li><a href="/info/faq-for-merchants.html" title="">FAQ for Merchants</a></li>
                                                        <li><a href="/info/billable-rules.html" title="">Billable Rules</a></li>
                                                        <li><a href="/info/supply-leads.html" title="">Supply Leads</a></li>
							<li><a href="/info/buying-leads.html" title="">Buying Leads</a></li>
                                                        <li><a href="/info/pay-per-call-uk.html" title="">Pay-Per-Call UK</a></li>
						</ul>
					</div>
					<div class="col">
						<ul>
							<li><a href="/info/about-us.html" title="">About Us</a></li>														                            
                                                        <li><a href="/info/contact-us.html" title="">Contact Us</a></li>
							
                                                        <li><a href="/info/support.html" title="">Support</a></li>

                                                        <li><a href="/info/feedback.html" title="">Feedback</a></li>
							<li><a href="/info/faq/" title="">FAQ</a></li>
                                                        <li><a href="/info/terms-and-conditions.html" title="">Terms and Conditions</a></li>
                                                        <li><a href="/info/privacy-policy.html" title="">Privacy Policy</a></li>
						</ul>
					</div>




					<div class="colLast">
						<ul>
							<li class="fb"><a href="http://www.linkedin.com/company/goodapple-media-ltd" target="_blank" title="Checkout GoodApple - CallCommission's parent company">Find us on <b>LinkedIn</b></a></a></li>
							<li class="twitter"><a href="http://twitter.com/#!/CallCommission" target="_blank" title="Go on, follow us!">Follow us on <b>Twitter</b></a></li>
					
                                        </div>   
                                            		
                                        <div id="mc_embed_signup">
						
<form action="http://goodapple.us2.list-manage1.com/subscribe/post?u=3c4840e8e0e22393f28bd84d9&amp;id=3f523bcbd3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
	<label for="mce-EMAIL">Subscribe to our mailing list</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
	<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">

</div>
</form>

						</ul>
					</div>
				</div>

			</div><!--[end] footerMenu -->			

	</div><!--[end] footerInner -->	







	</div><!--[end] footer -->

  <!-- clicky -->  
     
<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(66477786); }catch(e){}</script>


    <!-- end clicky --> 





<!-- hidden fields to hold our vars -->
         <!-- set up default as today --> 
<input type="hidden" id="interval" value="today"/>
         <!-- set up default as all --> 
<input type="hidden" id="leadTypes" value="all"/>
<input type="hidden" id="startDate" value=""/>
<input type="hidden" id="endDate" value=""/>


	

<!-- Just a dialog box --> 
<div id="dialog" title="Select Date Range">
<div id="message"></div>
	<form name="dateRange" id="dateRangeForm" action="index.cfm" method="post">
		
		<div id="startdate" class="dateHolder"><h3 class="dateH3">Start Date </h3>  </div>
		
		<div id="enddate" class="dateHolder"> <h3 class="dateH3">End Date </h3>  </div>
    </form>
</div> <!--[end] dialog box --> 

<!-- tool tips --> 

<!-- tooltip element -->



<div class="tooltip">

	<img src="http://static.flowplayer.org/img/title/eye.png" alt="Flying screens" 
		style="float:left;margin:0 15px 20px 0" />

	<table style="margin:0">
		<tr>
			<td class="label">File</td>
			<td>flowplayer-3.2.7.zip</td>
		</tr>
		<tr>
			<td class="label">Date</td>
			<td>2011-03-03</td>
		</tr>
		<tr>
			<td class="label">Size</td>
			<td>112 kB</td>
		</tr>
		<tr>
			<td class="label">OS</td>
			<td>all</td>
		</tr>		
	</table>

	<a href="/3.2/">What's new in 3.2</a>
</div>

<!-[end] tool tips --> 



	
</body>
</html>