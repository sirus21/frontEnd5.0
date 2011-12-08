<?php
App::uses('AppController', 'Controller');
/**
 * CallSessions Controller
 *
 * @property CallSession $CallSession
 */
class CallSessionsController extends AppController {


/**
 * index method
 *
 * @return void
 */


var $paginate = array(
'limit' => 20,
'order' => array(
'CallSession.id' => 'desc'
)

);
var $components = array('RequestHandler');
var $helpers = array('Js' => array('Jquery'),'Time'); 


        public function before(){
		
		
		
	}

	public function index($timePeriod=null) {
		
		        // set up the session info for our filtering if it is empty		
                       $this->layout='front_end'; 
		       echo     Date("Y-m-d",strtotime("- 1 day"));
		        
		
		        
			
			
			
		  
		  
		  
		  
		     	
		    if(CakeSession::read('Config.startDate') == null)
		    
		    {
			 CakeSession::write('filter.startDate',Date("Y-m-d"));
		         CakeSession::write('filter.endDate',Date("Y-m-d"));
		         CakeSession::write('filter.leads',"");	   
		    }
		     	
		$this->set('username',$this->Auth->user('username')); 
		$this->set('callSessions', $this->paginate(array( 'CallSession.paid'=>'1','CallSession.user_id'=>$this->Auth->user('id'),
								                                   'CallSession.created >='=>CakeSession::read('filter.startDate'),
												/*  'CallSession.created <'=>CakeSession::read('filter.endDate')*/
							                                       	)
							                                )
			  );								 
											
		
	}


     public function ajaxLeadCaller($date=null) {
	     
	             
		        $timePeriod = array(
			                                        "today" =>         Date("Y-m-d"),
								"yesterday" =>  Date("Y-m-d",strtotime("- 1 day")),
								"2daysAgo" => Date("Y-m-d",strtotime("- 2 day")),
								"7daysAgo" => Date("Y-m-d",strtotime("- 7 day")),
								"14daysAgo" => Date("Y-m-d",strtotime("- 14 day")),
								"30daysAgo" => Date("Y-m-d",strtotime("- 30 day")),
								"90daysAgo" => Date("Y-m-d",strtotime("- 90 day")),
			); 
	
		        $this->layout='blank'; 
		        
	                if($date!=null){
				     
				     switch($date){
					     
					        case  "today":
							               CakeSession::write('filter.startDate',Date("Y-m-d"));
		                                                       CakeSession::write('filter.endDate',Date("Y-m-d"));
								       
						case   "yesterday":
							                CakeSession::write('filter.startDate',$timePeriod['yesterday']);
		                                                        CakeSession::write('filter.endDate',$timePeriod['yesterday']);
									break;
						
						case "2DaysAgo":
							               CakeSession::write('filter.startDate',$timePeriod['2daysAgo']);
		                                                       CakeSession::write('filter.endDate',$timePeriod['2daysAgo']);
									break;
						
						case "last7Days":
						                        CakeSession::write('filter.startDate',$timePeriod['7daysAgo']);
		                                                        CakeSession::write('filter.endDate',$timePeriod['today']);
									 break; 
						case "last14Days":
							                CakeSession::write('filter.startDate',$timePeriod['14daysAgo']);
		                                                        CakeSession::write('filter.endDate',$timePeriod['today']);
									 break; 
						case "last30Days":
							                 CakeSession::write('filter.startDate',$timePeriod['30daysAgo']);
		                                                         CakeSession::write('filter.endDate',$timePeriod['today']);
									 break; 	    
					        case "last90Days":
							                CakeSession::write('filter.startDate',$timePeriod['90daysAgo']);
		                                                         CakeSession::write('filter.endDate',$timePeriod['today']);
									 break; 
							      
				     }	// switch 	
		          }  // not null 
				
			
	               $this->set('callSessions', $this->paginate(array( 'CallSession.paid'=>'1','CallSession.user_id'=>$this->Auth->user('id'),
								                                   'CallSession.created >='=>CakeSession::read('filter.startDate'),
												/*  'CallSession.created <'=>CakeSession::read('filter.endDate')*/
							                                       	)
							                                )
			  );							
	
          }




/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		
		
		$this->CallSession->id = $id;
		if (!$this->CallSession->exists()) {
			throw new NotFoundException(__('Invalid call session'));
		}
		$this->set('callSession', $this->CallSession->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CallSession->create();
			if ($this->CallSession->save($this->request->data)) {
				$this->Session->setFlash(__('The call session has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The call session could not be saved. Please, try again.'));
			}
		}
		$camps = $this->CallSession->Camp->find('list');
		$this->set(compact('camps'));
		
		}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CallSession->id = $id;
		if (!$this->CallSession->exists()) {
			throw new NotFoundException(__('Invalid call session'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CallSession->save($this->request->data)) {
				$this->Session->setFlash(__('The call session has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The call session could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CallSession->read(null, $id);
		}
		$camps = $this->CallSession->Camp->find('list');
		$this->set(compact('camps'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->CallSession->id = $id;
		if (!$this->CallSession->exists()) {
			throw new NotFoundException(__('Invalid call session'));
		}
		if ($this->CallSession->delete()) {
			$this->Session->setFlash(__('Call session deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Call session was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
