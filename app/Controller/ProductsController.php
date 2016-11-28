<?php

class ProductsController extends AppController
{

	public $helpers = array('Html', 'Form', 'Time');
	public $components = array('Session');
	
	public function index()
	{
	this->set('productos', $this->Producto->find('all'));
	}

	public function nuevo()
	{
		if($this->request->is('post'))
		{
			$this->Producto->create();
			if($this->Producto->save($this->request->data))
			{
				$this->Session->setFlash('El producto ha sido creado', 'default', array('class'=>'success'));
				return $this ->redirect(array('action'=> 'index'));
			}
			this->Session-> setFlash('No se puedo crear mesa');
		}
		$users= $this->Producto->User->find('list');
		$this->set('users',$users);
	}
}

?>