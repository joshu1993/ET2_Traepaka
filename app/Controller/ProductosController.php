<?php

class ProductosController extends AppController
{

	public $helpers = array('Html', 'Form', 'Time');
	public $components = array('Session');
	
	public function index()
	{
	$this->set('productos', $this->Producto->find('all'));
	}

	public function nuevo()
	{
		if($this->request->is('post'))
		{
			$this->Producto->create();
			if($this->Producto->save($this->request->data))
			{
				$this->Flash->success('El producto ha sido creado'/*, 'default', array('class'=>'success')*/);
				return $this ->redirect(array('action'=> 'index'));
			}
			$this->Flash->error('No se puedo crear mesa');
		}
		$users= $this->Producto->User->find('list');
		$this->set('users',$users);
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
				$this->Flash->success('El prodcuto ha sifo modificado'/*, $element= 'default', $params = array('class'=>'success')*/);
				return $this->redirect(array('action'=>'index'));
			}
			$this->Flash->error('El registro no pudo ser modificado');
		}
		if(!$this->request->data)
		{
			$this->request->data = $producto;
		}
	}
	
	public function eliminar($id)
	{
		if($this->request->is('get'))
		{
			throw new methodNotAllowedException('INCORRECTO');
		}
		if($this->Producto->delete($id))
		{
			$this->Flash->success('El prodcuto ha sido eliminado'/*, $element= 'default', $params= array('class'=> 'success')*/);
			return $this->redirect(array('action'=>'index'));
		}
	}
}

?>