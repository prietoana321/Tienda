<?php namespace App\Controllers;

use App\Models\userModel;

class userController extends BaseController
{
	public function index()
	{
		$userModel = new userModel();
		$busqueda =  $userModel->asObject()->findAll();
		$datosVista = array('usuarios'=>$busqueda);

		return view('signin', $datosVista);
	}
	
	public function add()
	{

		$userModel = new userModel();

		$Id_usuario= $this->request->getPost('Id_usuario');
		$nombre= $this->request->getPost('nombre');
		$nombreususario= $this->request->getPost('nombreususario');
		$correo = $this->request->getPost('correo');
		$contraseña= $this->request->getPost('contraseña');

		$userModel->save([

			'Id_usuario'=>$Id_usuario,
			'nombre'=>$nombre,
			'nombreususario'=>$nombreususario
			'Id_usuario'=>$correo,
			'nombre'=>$contraseña
			
		]);

		return redirect()->to(base_url('public/usuarios'))->with('mensaje2', 'Registrado con exito');

	}

	public function eliminar($Id_usuario){

		$userModel = new userModel();
		$userModel->where('Id_usuario', $Id_usuario)->delete();
		return redirect()->to(base_url('public/usuarios'));

	}

	public function modificar($Id_usuario){

		
		$userModel = new userModel();
		
		
		$nombre= $this->request->getPost('nombre2');
		$nombreususario= $this->request->getPost('nombreususario2');
		$correo = $this->request->getPost('correo2');
		$contraseña= $this->request->getPost('contraseña2');



		$userModel->update($Id_usuario,[
			
			'nombre'=>$nombre,
			'nombreususario'=>$nombreususario
			'Id_usuario'=>$correo,
			'nombre'=>$contraseña
		]);
		
		return redirect()->to(base_url('public/usuarios'));


	}

}
