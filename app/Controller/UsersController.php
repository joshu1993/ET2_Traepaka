<?php 

	class UsersController extends AppController {


		public function index() {
		
		$this->set('users', $this->User->find('all'));
		}
	
		public $helpers = array('Html','Form');
  
	  	public function beforeFilter() {
	    	parent::beforeFilter();
			
	        $this->Auth->allow('index', 'add');
	        $this->set('current_user', $this->Auth->user());
			
	    }
		
	
		public function ver($id= Null){
		
			if (!$id)
			{
				throw new NotFoundException('Datos Invalidos');
			}

			$user= $this->User->findById($id);

			if(!$user)
			{
				throw new NotFoundException('El Usuario no existe');
			}
			$this-> set('user', $user);
		}
		
		
		/*

		public function login() {
			if($this->request->is('post')) {
				if($this->Auth->login()) {
					return $this->redirect($this->Auth->redirectUrl());
				}
				$this->Flash->error('¡Usuario y/o contraseña incorrectos!');
			}
			$this->redirect($this->referer());

		}

		public function logout() {
			$this->Session->destroy();
			$this->Flash->warning('Se ha cerrado la sesión.');		
			return $this->redirect($this->Auth->logout());
		}

		*/
		public function add() {
			if($this->request->is('post')) {
				$this->User->create();
				if($this->User->save($this->request->data)) {
					$this->Flash->success('EL usuario ha sido creado');
					 return $this->redirect(array('action'=>'index'));		
				}
				$this->Flash->error('EL usuario no se ha podido crear');	
				$this->redirect($this->referer());			
			}
		}
		
		public function eliminar($id)
		{
			if($this->request->is('get'))
			{
				throw new methodNotAllowedException('INCORRECTO');
			}
			if($this->User->eliminar($id))
			{
				$this->Flash->success('El usuario ha sido eliminado');
				return $this->redirect(array('action'=>'index'));
			}
		}
	}


?>