<?


class AccessHelper extends Helper{
      var $helpers = array("Session");
      
      /**
       * A function to check if a user is logged in
       * @return bool true if the user is logged in 
       */
    
      
      function isLoggedIn(){
               APP::import('Component','Auth');
               $auth = new AuthComponent;
               $auth ->Session = $this->Session;
               $user = $auth->user();
               return !empty($user);
               
      }
    
}



?> 