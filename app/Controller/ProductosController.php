<?php

class ProductosController extends AppController
{

	public $helpers = array('Html', 'Form', 'Time');
	//public $components = array('Session');
	
	public function beforeFilter() {
	    	parent::beforeFilter();
			
	        $this->Auth->allow('');
	        //$this->set('current_user', $this->Auth->user());
			
	    }
	
	public function index()
	{
		$this->set('productos', $this->Producto->find('all'));
			
	}

/*	
	public function nuevo()
	{
		if($this->request->is('post'))
		{
			$this->Producto->create();
			if($this->Producto->save($this->request->data))
			{
				$this->Flash->success('El producto ha sido creado');
				return $this ->redirect(array('action'=> 'index'));
			}
			$this->Flash->error('No se puedo crear producto');
		}
		$producto= $this->Producto->Producto->find('list');
		$this->set('producto',$producto);
	}

*/
		public function nuevo() {
			if($this->request->is('post')) {
				$this->Producto->create();
				if($this->Producto->save($this->request->data)) {
					$this->Flash->success('EL producto ha sido añadido');
					 return $this->redirect(array('action'=>'index'));		
				}
				$this->Flash->error('EL producto no se ha podido añadir');	
				$this->redirect($this->referer());			
			}
		}
	
	
	public function ver($id= Null){
		
			if (!$id)
			{
				throw new NotFoundException('Datos Invalidos');
			}

			$producto= $this->Producto->findById($id);

			if(!$producto)
			{
				throw new NotFoundException('El producto no existe');
			}
			$this-> set('producto', $producto);
		}


	public function editar($id=null)
	{
		if(!$id)
		{
			throw new NotFoundException("Datos invalidos");
		}
		$producto= $this->Producto->findById($id);
		
		if(!$producto)
		{
			throw new NotFoundExeception("El producto no ha sido encontrado");
		}
		if($this->request->is(array('post','put')))
		{
			$this->Producto->id= $id;
			if($this->Producto->save($this->request->data))
			{
				$this->Flash->success('El producto ha sido modificado');
				return $this->redirect(array('action'=>'index'));
			}
			$this->Flash->error('El registro no pudo ser modificado');
		}
		if(!$this->request->data)
		{
			$this->request->data = $producto;
		}
	}

	/*
	public function editar($id = null) {

		    if (!$id) {
				$this->Session->setFlash('Introduce usuario');
				$this->redirect(array('action'=>'index'));
			}

			$user = $this->User->findById($id);
			if (!$user) {
				$this->Session->setFlash('ID Usuario invalido');
				$this->redirect(array('action'=>'index'));
			}

			if ($this->request->is('post') || $this->request->is('put')) {
				$this->User->id = $id;
				if ($this->User->save($this->request->data)) {
					$this->Session->setFlash(__('El usuario ha sido modificado'));
					$this->redirect(array('action' => 'index', $id));
				}else{
					$this->Session->setFlash(__('No se ha podido modificar el usuario.'));
				}
			}

			if (!$this->request->data) {
				$this->request->data = $user;
			}
        }
	*/
	public function eliminar($id)
	{
		if($this->request->is('get'))
		{
			throw new methodNotAllowedException('INCORRECTO');
		}
		if($this->Producto->delete($id))
		{
			$this->Flash->success('El producto con id' . $id . 'ha sido eliminado');
			$this->redirect(array('action'=>'index'));
		}
	}
	

}

?>