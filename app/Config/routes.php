<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
        
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
        Router::connect('/example', array('controller' => 'applications', 'action' => 'add','example'));
        Router::connect('/contact', array('controller' => 'contacts', 'action' => 'add'));
       
        /*partners */
         Router::connect('/examplepartner', array('controller' => 'pages', 'action' => 'display','examplepartner'));
         Router::connect('/examplepartner2', array('controller' => 'pages', 'action' => 'display','examplepartner2')); 
         Router::connect('/psandb', array('controller' => 'pages', 'action' => 'display','psandb'));
         Router::connect('/stjames', array('controller' => 'pages', 'action' => 'display','stjames'));
         Router::connect('/bv', array('controller' => 'pages', 'action' => 'display','bv'));
         Router::connect('/company', array('controller' => 'pages', 'action' => 'display','company'));
         Router::connect('/estateagent', array('controller' => 'pages', 'action' => 'display','estateagent'));
         Router::connect('/lettingagent', array('controller' => 'pages', 'action' => 'display','lettingagent'));

      /* partners - street marketing */ 
      /*letting agents */   
        
        /*lower*/ 
        Router::connect('/parks', array('controller' => 'pages', 'action' => 'display','parks'));
        Router::connect('/harringtons', array('controller' => 'pages', 'action' => 'display','harringtons'));
        Router::connect('/justlets', array('controller' => 'pages', 'action' => 'display','justlets'));
        Router::connect('/01property', array('controller' => 'pages', 'action' => 'display','01property'));
        Router::connect('/lanes', array('controller' => 'pages', 'action' => 'display','lanes'));
        Router::connect('/qlets', array('controller' => 'pages', 'action' => 'display','qlets'));
         Router::connect('/spencerleigh', array('controller' => 'pages', 'action' => 'display','spencerleigh'));
         Router::connect('/homelets', array('controller' => 'pages', 'action' => 'display','homelets'));
         Router::connect('/khalil', array('controller' => 'pages', 'action' => 'display','khalil'));
         Router::connect('/propertymoves', array('controller' => 'pages', 'action' => 'display','propertymoves'));
         
         /*upper*/
        Router::connect('/Parks', array('controller' => 'pages', 'action' => 'display','parks'));
        Router::connect('/Harringtons', array('controller' => 'pages', 'action' => 'display','harringtons'));
        Router::connect('/Justlets', array('controller' => 'pages', 'action' => 'display','justlets'));
        Router::connect('/01property', array('controller' => 'pages', 'action' => 'display','01property'));
        Router::connect('/Lanes', array('controller' => 'pages', 'action' => 'display','lanes'));
        Router::connect('/Qlets', array('controller' => 'pages', 'action' => 'display','qlets'));
         Router::connect('/Spencerleigh', array('controller' => 'pages', 'action' => 'display','spencerleigh'));
         Router::connect('/Homelets', array('controller' => 'pages', 'action' => 'display','homelets'));
         Router::connect('/Khalil', array('controller' => 'pages', 'action' => 'display','khalil'));
         Router::connect('/Propertymoves', array('controller' => 'pages', 'action' => 'display','propertymoves'));
         
    /* estate agents */  
       
            Router::connect('/alderton', array('controller' => 'pages', 'action' => 'display','alderton'));							
            Router::connect('/austingray', array('controller' => 'pages', 'action' => 'display','austingray'));							
            Router::connect('/avard', array('controller' => 'pages', 'action' => 'display','avard'));							
            Router::connect('/baagency', array('controller' => 'pages', 'action' => 'display','baagency'));							
            Router::connect('/beaumonts', array('controller' => 'pages', 'action' => 'display','beaumonts'));							
            Router::connect('/bonetts', array('controller' => 'pages', 'action' => 'display','bonetts'));							
            Router::connect('/callaways', array('controller' => 'pages', 'action' => 'display','callaways'));							
            Router::connect('/david', array('controller' => 'pages', 'action' => 'display','david'));							
            Router::connect('/ellis', array('controller' => 'pages', 'action' => 'display','ellis'));							
            Router::connect('/goldinlemcke', array('controller' => 'pages', 'action' => 'display','goldinlemcke'));							
            Router::connect('/gravesjenkins', array('controller' => 'pages', 'action' => 'display','gravesjenkins'));							
            Router::connect('/halls', array('controller' => 'pages', 'action' => 'display','halls'));							
            Router::connect('/hilton', array('controller' => 'pages', 'action' => 'display','hilton'));							
            Router::connect('/kendrick', array('controller' => 'pages', 'action' => 'display','kendrick'));							
            Router::connect('/keylocations', array('controller' => 'pages', 'action' => 'display','keylocations'));							
            Router::connect('/maslen', array('controller' => 'pages', 'action' => 'display','maslen'));							
            Router::connect('/massey', array('controller' => 'pages', 'action' => 'display','massey'));							
            Router::connect('/michaeljoseph', array('controller' => 'pages', 'action' => 'display','michaeljoseph'));							
            Router::connect('/sutherland', array('controller' => 'pages', 'action' => 'display','sutherland'));							
            Router::connect('/palms', array('controller' => 'pages', 'action' => 'display','palms'));							
            Router::connect('/tanat', array('controller' => 'pages', 'action' => 'display','tanat'));							
            Router::connect('/uden', array('controller' => 'pages', 'action' => 'display','uden'));							
            Router::connect('/wheelers', array('controller' => 'pages', 'action' => 'display','wheelers'));							
            Router::connect('/gkwhites', array('controller' => 'pages', 'action' => 'display','gkwhites'));							
            Router::connect('/wilkins', array('controller' => 'pages', 'action' => 'display','wilkins'));							
            Router::connect('/wilkinsons', array('controller' => 'pages', 'action' => 'display','wilkinsons'));
            
            
            /* Upper */ 
            Router::connect('/Alderton', array('controller' => 'pages', 'action' => 'display','alderton'));							
            Router::connect('/Austingray', array('controller' => 'pages', 'action' => 'display','austingray'));							
            Router::connect('/Avard', array('controller' => 'pages', 'action' => 'display','avard'));							
            Router::connect('/Baagency', array('controller' => 'pages', 'action' => 'display','baagency'));							
            Router::connect('/Beaumonts', array('controller' => 'pages', 'action' => 'display','beaumonts'));							
            Router::connect('/Bonetts', array('controller' => 'pages', 'action' => 'display','bonetts'));							
            Router::connect('/Callaways', array('controller' => 'pages', 'action' => 'display','callaways'));							
            Router::connect('/David', array('controller' => 'pages', 'action' => 'display','david'));							
            Router::connect('/Ellis', array('controller' => 'pages', 'action' => 'display','ellis'));							
            Router::connect('/Goldinlemcke', array('controller' => 'pages', 'action' => 'display','goldinlemcke'));							
            Router::connect('/Gravesjenkins', array('controller' => 'pages', 'action' => 'display','gravesjenkins'));							
            Router::connect('/Halls', array('controller' => 'pages', 'action' => 'display','halls'));							
            Router::connect('/Hilton', array('controller' => 'pages', 'action' => 'display','hilton'));							
            Router::connect('/Kendrick', array('controller' => 'pages', 'action' => 'display','kendrick'));							
            Router::connect('/Keylocations', array('controller' => 'pages', 'action' => 'display','keylocations'));							
            Router::connect('/Maslen', array('controller' => 'pages', 'action' => 'display','maslen'));							
            Router::connect('/Massey', array('controller' => 'pages', 'action' => 'display','massey'));							
            Router::connect('/Michaeljoseph', array('controller' => 'pages', 'action' => 'display','michaeljoseph'));							
            Router::connect('/Sutherland', array('controller' => 'pages', 'action' => 'display','sutherland'));							
            Router::connect('/Palms', array('controller' => 'pages', 'action' => 'display','palms'));							
            Router::connect('/Tanat', array('controller' => 'pages', 'action' => 'display','tanat'));							
            Router::connect('/Uden', array('controller' => 'pages', 'action' => 'display','uden'));							
            Router::connect('/Wheelers', array('controller' => 'pages', 'action' => 'display','wheelers'));							
            Router::connect('/Gkwhites', array('controller' => 'pages', 'action' => 'display','gkwhites'));							
            Router::connect('/Wilkins', array('controller' => 'pages', 'action' => 'display','wilkins'));							
            Router::connect('/Wilkinsons', array('controller' => 'pages', 'action' => 'display','wilkinsons'));		







        

        
      /*static pages */  
        Router::connect('/howitworks', array('controller' => 'pages', 'action' => 'display','howitworks'));
        Router::connect('/whyitworks', array('controller' => 'pages', 'action' => 'display','whyitworks'));
        Router::connect('/vetting', array('controller' => 'pages', 'action' => 'display','vetting'));
        Router::connect('/terms', array('controller' => 'pages', 'action' => 'display','terms'));
        Router::connect('/privacy', array('controller' => 'pages', 'action' => 'display','privacy'));
        Router::connect('/disclaimer', array('controller' => 'pages', 'action' => 'display','disclaimer'));
        Router::connect('/services', array('controller' => 'pages', 'action' => 'display','services'));
        Router::connect('/aboutus', array('controller' => 'pages', 'action' => 'display','aboutus'));

   



/**
 * Load all plugin routes.  See the CakePlugin documentation on 
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';



/**
 * New  inserts
 * 
 * /
 *
 * 