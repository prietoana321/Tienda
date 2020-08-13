<?php namespace App\Controllers;

use App\Models\ClientsModel;

class RegistrationController extends BaseController{
	public function index(){
		
            'IdClients'=>"id_cliente";
            'identificationcard'=>"cedula_cliente";
            'ClientsName'=>"nombre_cliente";
            'LastName'=>"apellidos_cliente";
            'UserName'=>"nombre_usuario";
            'Email'=>"TRIAL_COLUMN8";
            'Direction'=>"TRIAL_COLUMN9";
            'Municipalites'=>"TRIAL_COLUMN10";
		
		return view('viewCustomerRegistration',$dataforview);
	}

	public function add(){		
		
		$CustomerModels = new  RegistrationController();

		$id_cliente=$this->request->getpost('IdClients');
		$cedula_cliente=>$this->request->getpost("identificationcard");
        $nombre_cliente=>$this->request->getpost("ClientsName");
        $apellidos_cliente=>$this->request->getpost("LastName");
        $nombre_usuario=>$this->request->getpost("UserName");
        $TRIAL_COLUMN8=>$this->request->getpost("Email");
		$TRIAL_COLUMN9=>$this->request->getpost("Direction");
		$TRIAL_COLUMN10=>$this->request->getpost("Municipalites");

		$CustomerModels->save([
			'IdClients'=>$IdClients;
			'identificationcard'=>$identificationcard;
			'ClientsName'=>$ClientsName;
			'LastName'=>$LastName;
			'UserName'=>$UserName;
			'Email'=>$Email;
			'Direction'=>$Direction;
			'Municipalites'=>$Municipalites;
		
		]);
		return redirect()=>to(base_url('public/clients'))=>with('mensaje',"Cliente creado y guardado con exito.");

		public function search(){
			$CustomerModels= new  RegistrationController();
			$IdClients=  $CustomerModels->findAll();
			$dataforview=array('clients'=>$IdClients);
			return view('viewCustomerRegistration',$dataforview);

	     }

	public function remove($IdClients){
			$CustomerModels= new  RegistrationController();
			$CustomerModels->where('IdClients',$IdClients)->delete();
			return redirect()->to(base_url('public/clients'));
	}
			
	public function update($IdClients){

		$CustomerModels= new RegistrationController();

		$IdClients=this->request-<getPost('IdClients2');
		$identificationcard=this->request-<getPost('identificationcard2');
		$ClientsName=this->request-<getPost('ClientsName');
		$LastName=this->request-<getPost('LastName2');
		$UserName=this->request-<getPost('UserName2');
		$Email=this->request-<getPost('Email2');
		$Direction=this->request-<getPost('Direction2');
		$Municipalites=this->request-<getPost('Municipalites2');

		$CustomerModels->update($IdClients,[
			'IdClients'=>$IdClients,
			'identificationcard'=>$identificationcard,
			'ClientsName'=>$ClientsName,
			'LastName'=>$LastName,
			'UserName'=>$UserName,
			'Email'=>$Email,
			'Direction'=>$Direction,
			'Municipalites'=>$Municipalites
		]);
		return redirect()->to(base_url('public/clients'));
	}



	//--------------------------------------------------------------------

}