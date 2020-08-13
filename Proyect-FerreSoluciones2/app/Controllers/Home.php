<?php namespace App\Controllers;

use App\Models\clienteModel;

class Home extends BaseController
{
	public function index()
	{
		$clienteModel = new clienteModel();
		$busqueda =  $userModel->asObject()->findAll();
		$datosVista = array('cliente'=>$busqueda);

		return view('welcome_messaje', $datosVista);
	}
	
	public function add()
	{

		$clienteModel= new clienteModel();

        $Id_cliente= $this->request->getPost('Id_cliente');
		$cedula_cliente= $this->request->getPost('cedula_cliente');
		$nombre_cliente= $this->request->getPost('nombre_cliente');
		$apellidos_cliente= $this->request->getPost('apellidos_cliente');
		$nombre_usuario= $this->request->getPost('nombre_usuario');
		$TRIAL_COLUMN8= $this->request->getPost('TRIAL_COLUMN8');
		$TRIAL_COLUMN9= $this->request->getPost('TRIAL_COLUMN9');
		$TRIAL_COLUMN10= $this->request->getPost('TRIAL_COLUMN10');

		$clienteModel->save([

			'Id_cliente'=>$Id_cliente,
			'cedula_cliente'=>$cedula_cliente,
			'nombre_cliente'=>$nombre_cliente,
			'apellidos_cliente'=>$apellidos_cliente,
			'nombre_usuario'=>$nombre_usuario,
			'TRIAL_COLUMN8'=>$TRIAL_COLUMN8,
			'TRIAL_COLUMN9'=>$TRIAL_COLUMN9,
			'TRIAL_COLUMN10'=>$TRIAL_COLUMN10
			
		]);

		return redirect()->to(base_url('public/welcome_message'))->with('mensaje2', 'Registrado con exito');

	}

	public function eliminar($Id_cliente){

		$clienteModel = new clienteModel();
		$clienteModel->where('Id_cliente', $Id_cliente)->delete();
		return redirect()->to(base_url('public/welcome_message'));

	}

	public function modificar($Id_cliente){

		
		$clienteModel= new clienteModel();
		
		
		$Id_cliente= $this->request->getPost('Id_cliente2');
		$cedula_cliente= $this->request->getPost('cedula_cliente2');
		$nombre_cliente= $this->request->getPost('nombre_cliente2');
		$apellidos_cliente= $this->request->getPost('apellidos_cliente2');
		$nombre_usuario= $this->request->getPost('nombre_usuario2');
		$TRIAL_COLUMN8= $this->request->getPost('TRIAL_COLUMN82');
		$TRIAL_COLUMN9= $this->request->getPost('TRIAL_COLUMN92');
		$TRIAL_COLUMN10= $this->request->getPost('TRIAL_COLUMN102');




		$clienteModel->update($Id_cliente,[
			
			'Id_cliente'=>$Id_cliente,
			'cedula_cliente'=>$cedula_cliente,
			'nombre_cliente'=>$nombre_cliente,
			'apellidos_cliente'=>$apellidos_cliente,
			'nombre_usuario'=>$nombre_usuario,
			'TRIAL_COLUMN8'=>$TRIAL_COLUMN8,
			'TRIAL_COLUMN9'=>$TRIAL_COLUMN9,
			'TRIAL_COLUMN10'=>$TRIAL_COLUMN10
		]);
		
		return redirect()->to(base_url('public/welcome_message'));


	}


	//--------------------------------------------------------------------

}
