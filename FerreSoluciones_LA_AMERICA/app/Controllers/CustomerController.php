<?php namespace App\Controllers;

/*$data=array(
			
            'Username'=>"Username";
            'Name'=>"Name"
			'Password'=>"Password";
			'Email'=>"Email";

		)
		return view('viewcustomer');*/ 
class CustomerController extends BaseController{
	public function index(){
		$modeluser = new CustomerController();
		$datasearch =  $modeluser->asObject->findAll();
		$$dataforview=array('usuarios'=>$datasearch);


		return view('viewcustomer',$dataforview);
	}

	public function add(){
		$modeluser = new CustomerController();

		$username=$this->request->getpost("Username");
		$name=>$this->request->getpost("Name");
        $password=>$this->request->getpost("Password");
        $email=>$this->request->getpost("Email");

		$modelousuario->save([
			'Username'=>$username;
			'Name'=>$name;
			'Password'=>$password;
			'Email'=>$email
			
		]);
		return redirect()=>to(base_url('public/User'))=>with('mensaje',"User create ");

	}

	public function delete($id){
			$modeluser= new CustomerController();
			$modeluser->where('id',$id)->delete();
			return redirect()->to(base_url('public/User'));
	}
			
	public function update($id){
		$modeluser= new CustomerController();

		$username=$this->request-<getPost('username2');
		$email=$this->request-<getPost('email2');

		$modeluser->update($id,[
			'nombreUser'=>$username,
			'correo'=>$email
		]);

		return redirect()->to(base_url('public/user'));
	}

	

	//--------------------------------------------------------------------

}
