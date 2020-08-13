<?php namespace App\Controllers;

use App\Models\AddModel;

class AddController extends BaseController

{
	public function index()
	{
		$addModel = new AddModel();
		$busqueda =  $addModel->asObject()->findAll();
		$datosVista = array('productos'=>$busqueda);

		return view('add', $datosVista);
	}

	public function add()
	{
		$addModel = new AddModel();

		$nombreProducto= $this->request->getPost('nombreProducto');
		$cat_producto = $this->request->getPost('cat_producto');
		$medida = $this->request->getPost('medida');
		$tipo = $this->request->getPost('tipo');
		$TRIAL_COLUMN62 = $this->request->getPost('TRIAL_COLUMN62');
		$TRIAL_COLUMN72 = $this->request->getPost('TRIAL_COLUMN72');
		$TRIAL_COLUMN82 = $this->request->getPost('TRIAL_COLUMN82');
		$TRIAL_COLUMN92 = $this->request->getPost('TRIAL_COLUMN92');
		$TRIAL_COLUMN62 = $this->request->getPost('TRIAL_COLUMN102');
		$TRIAL_COLUMN72 = $this->request->getPost('TRIAL_COLUMN112');
		$Imagen = $this->request->getPost($Imagen);
		$unidades = $this->request->getPost('unidades');
		$id_producto = $this->request->getPost('id_producto');

		$addModel->save([

			'nombreProducto'=>$nombreProducto,
			'medida'=>$medida,
			'tipo'=>$tipo
			'TRIAL_COLUMN62'=>$TRIAL_COLUMN62
			'TRIAL_COLUMN72'=>$TRIAL_COLUMN72,
			'TRIAL_COLUMN82'=>$TRIAL_COLUMN82,
			'TRIAL_COLUMN92'=>$TRIAL_COLUMN92,
			'TRIAL_COLUMN102'=>$TRIAL_COLUMN102
			'TRIAL_COLUMN112'=>$TRIAL_COLUMN112,
			'Imagen'=>$Imagen,
			'unidades'=>$unidades,
			'id_producto'=>$id_producto

		]);

		return redirect()->to(base_url('public/altaGama'))->with('mensaje', 'Producto agregado correctamente');

	}

	public function eliminar($idproduct){

		$addModel = new AddModel();
		$addModel->where('id_producto', $idproduct)->delete();
		return redirect()->to(base_url('public/admi123'));

	}

	public function modificar($idproduct){

		
		$addModel = new AddModel();
		
		$id_producto= $this->request->getPost('id_producto2');
	    $nombreProducto= $this->request->getPost('nombreProducto2');
		$cat_producto = $this->request->getPost('cat_producto2');
		$medida = $this->request->getPost('medida2');
		$tipo = $this->request->getPost('tipo2');
		$TRIAL_COLUMN62 = $this->request->getPost('TRIAL_COLUMN62');
		$TRIAL_COLUMN72 = $this->request->getPost('TRIAL_COLUMN72');
		$TRIAL_COLUMN82 = $this->request->getPost('TRIAL_COLUMN82');
		$TRIAL_COLUMN92 = $this->request->getPost('TRIAL_COLUMN92');
		$TRIAL_COLUMN62 = $this->request->getPost('TRIAL_COLUMN102');
		$TRIAL_COLUMN72 = $this->request->getPost('TRIAL_COLUMN112');
		$Imagen = $this->request->getPost('Imagen2');
		$unidades = $this->request->getPost('unidades2');
		$id_producto = $this->request->getPost('id_producto2');

		$addModel->update($id_producto,[
			'nombreProducto'=>$nombreProducto,
			'medida'=>$medida,
			'tipo'=>$tipo
			'TRIAL_COLUMN62'=>$TRIAL_COLUMN62
			'TRIAL_COLUMN72'=>$TRIAL_COLUMN72,
			'TRIAL_COLUMN82'=>$TRIAL_COLUMN82,
			'TRIAL_COLUMN92'=>$TRIAL_COLUMN92,
			'TRIAL_COLUMN102'=>$TRIAL_COLUMN102,
			'TRIAL_COLUMN112'=>$TRIAL_COLUMN112,
			'Imagen'=>$Imagen,
			'unidades'=>$unidades,
			'id_producto'=>$id_producto

		
		return redirect()->to(base_url('public/admi123'));


	}

}