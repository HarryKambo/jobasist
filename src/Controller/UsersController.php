<?php
namespace App\Controller;
use Cake\Core\Configure;
use Cake\ORM\TableRegistry;
class UsersController extends AppController{
	public $helpers = [
    'Paginator' => ['templates' => 'paginator-templates']
];
	//Set paginate object of controller.
	public $paginate = [
	        'fields' => ['Jobs.id','Jobs.title', 'Jobs.description','Jobs.company','Jobs.advertised','Jobs.job_ref'],
	        'limit' => 5,
	        'order' => [
	            'Jobs.advertised' => 'asc'
	        ]
	    ];
	public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }
	
	public function index(){
		
		$this->viewBuilder()->layout('user');

	}
	public function dashboard(){
	   
		$this->viewbuilder()->layout('user');

	}
	public function addjob(){	   
	    $this->viewBuilder()->layout('user');
	    if($this->request->is('post')){
	       // pr($this->request->data());
	        //save data to database
	        $jobs = TableRegistry::get('Jobs');
	        $job = $jobs->newEntity();
	        $job = $jobs->patchEntity($job, $this->request->data);
	        if($jobs->save($job)){
	            $this->Flash->success(__('New job created!!'));
	        }
	        else{
	            $this->Flash->error(__('New Job could not be created!!'));
	        }
	       //  die("Hi");
	    }	    
	}
	public function joblist($id = null){			
		$jobs = TableRegistry::get('Jobs');
		$this->viewBuilder()->layout('user');
		$query = $jobs->find();
		/* Limit text on description column for every returned Job entity*/
		$job = $this->paginate($query);	
		$this->set('job', $job);
	}
	public function delete($id=null){	
		//if($this->request->is == 'ajax')
		$this->request->allowMethod(['post', 'delete']);
		$this->autoRender = false;
		$job = TableRegistry::get('Jobs');
		$query = $job->query();
		$query->delete(54)->where(['id' => 54])->execute();
		
		$data = array('content' => 'data saved',
			'error' => 'failure');
		$this->set(compact('data'));
    	$this->set('_serialize', 'data');
			
	}

	
	public function edit($id=null){
		if($id=null)
			;//redirect

	}
	public function email(){
		$this->viewBuilder()->layout('user');
	}

	
	
}
?>
