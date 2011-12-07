   /* page menu elements */
   
   
   
     var topElements=["topMenuItem","topMenuItemLeads"];
     var not = -1;
     var is = 1; 
    
    $(document).ready(function(){  
    // fadeout flash messages on click  
    $('.close').click(function(){  
        
        $(this).parent().fadeOut();  
        return false;  
        });  
      
        // fade out good flash messages after 3 seconds  
        $('.flash_good').animate({opacity: 1.0}, 3000).fadeOut();
        
       // menues
         /**************************************************************************************************/
        /***************************************bind so we can click away from menues****************/
       /**************************************************************************************************/
        
        $(document).bind('mousedown',
		      
					   function(e)
					   {
					   
					          var clicked = $(e.target);		 
						 
						  if(clicked.is('.myMenu')   || clicked.parents().is('.myMenu') )   {
                                                       var attrid = clicked.attr("id");
                                             
                                             
                                                       // if its not a top element we now need to take action 
                                                      if( $.inArray(attrid,topElements) == not )                  
                                                      {
                                                      
                                                       
                                                                        var atrrhtml = $('#'+attrid).html();
                                                         // here is where we set up hidden vars for any future calls  
                                                          
                                                         
                                                         if(clicked.parents().is('#topmenu')){
                                                                   $("#topMenueItem").html(atrrhtml);
                                                                   $("#interval").val(attrid);
                                                         }
                                                         else{
                                                                        if(attrid==""){atrrhtml="All Leads";}
								    $("#topMenuItemLeads").html(atrrhtml);
                                                                    
								
								    $('#leadTypes').val(attrid); 
                                                         
                                                         }
                                                                         
                                                         
                                                           // hidden field trackers 
                                                          $("#startDate").val("");
                                                          $("#endDate").val("");
                                                      
                                                         // nested if in order to see what we have to do
                                                                   if(attrid == "custom")
                                                                  {
                                                                             $('#dialog').dialog('open');
                                                                  }
                                                                  else
                                                                  {
                                                                              dateAjaxCall(); 
                                                                  }
                                                                  
                                                                        exitMenu('.myMenu');   
                                                      }
						    }
						   
                                                  else {
						           
							       exitMenu('.myMenu'); 
					
							
						  }
						 
					   }
       ); // mouse down 	
        
      

    
    // diplay menue
    
    /************************************************************************************Menu controle **************************************************************************************/
      
      /*set sub menue */ 
        $('.myMenu').click(function(){
					   
	var state	=    $(this).find('ul').css('visibility'); 
	
	if(state=="hidden"){
	       $(this).find('ul').css('visibility','visible');
	}
	else
	{
	    $(this).find('ul').css('visibility','hidden');
	  
	}
	
					
        });
    
    
    
    
    
    
    
      
      // exit menue
      
      function exitMenu(menu){
                   $(menu).find('ul').css('visibility','hidden');
            
      }
        
    
    
      
    
    
    
    
    
    
    }); // document ready
    
    