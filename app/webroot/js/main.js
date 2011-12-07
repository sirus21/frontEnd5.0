   
    $(document).ready(function(){  
    // fadeout flash messages on click  
    $('.close').click(function(){  
        
        $(this).parent().fadeOut();  
        return false;  
        });  
      
        // fade out good flash messages after 3 seconds  
        $('.flash_good').animate({opacity: 1.0}, 3000).fadeOut();  
    });  