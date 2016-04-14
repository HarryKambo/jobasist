<?php
/* Jobs controller provides REST interface to get applied job listing.*/
namespace App\Controller;
class JobsController extends AppController{
    public function initialize(){
        Parent::initialize();
        $this->loadComponent('RequestHandler');
    }
    
    public function index(){       
        $jobs = $this->Jobs->find('all');
        $this->set(array(
            'jobs' => $jobs,
            '_serialize' => array('jobs')));    
     
   }
   public function view($id){
        $job = $this->Jobs->get($id);
        $this->set(['job' => $job,
                    '_serialize' => ['job']
                   ]);
   }
}

?>
