<?php 
App::uses('AppController', 'Controller');

	class UsersController extends AppController {


		public function index() {
		
		$this->set('users', $this->User->find('all'));
		}
	
		public $helpers = array('Html','Form');
  
	  	public function beforeFilter() {
	    	parent::beforeFilter();
			
	        $this->Auth->allow('index', 'add','ver', 'login');
	        //$this->set('current_user', $this->Auth->user());
			
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

		public function edit($id = null) {

	    $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                __('The user could not be saved. Please, try again.')
            );
        } else {
            $this->request->data = $this->User->findById($id);
            unset($this->request->data['User']['password']);
        }
    }
		
		
		
		public function eliminar($id)
		{
			
			if(!$this->request->is('post'))
			{
				throw new methodNotAllowedException('INCORRECTO');
			}
			if($this->User->eliminar($id))
			{
				$this->Flash->success('El usuario con id:' . $id . 'ha sido eliminado.');
				$this->redirect(array('action' => 'index'));
			}
		}

/*		public function delete($id = null) {
        // Prior to 2.5 use
        // $this->request->onlyAllow('post');

        $this->request->allowMethod('post');

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }
*/
		
	}


?>