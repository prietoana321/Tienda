<?php namespace App\Controllers;

use App\Models\ProductModel;

/*$data=array(

       'productname' => "products";
       'tools' => "construction";
       'presios' => "variable";
		)
		return view('viewProducts');*/ 

class ProductsController extends BaseController{
	public function index(){
		
		$ProductModels=new ProductsController();
		$search=$ProductModels->asObject()->findAll();
		$dataforview=array('Productos'=>$search)

		return view('add',$dataforview);
	}

	public function add(){
		
		$ProductModels= new ProductsController();

        $id_producto=$this->request->getpost('id_product');
		$nom_producto=$this->request->getpost('Product Name');
		$cat_producto=>$this->request->getpost('Category');
		$medida=>$this->request->getpost('measure');
		$tipo=$this->request->getpost('Kind');
		$TRIAL_COLUMN6=>$this->request->getpost('lower_price');
		$TRIAL_COLUMN7=>$this->request->getpost('higher_price');
		$TRIAL_COLUMN8=>$this->request->getpost('suppliers');
		$TRIAL_COLUMN9=$this->request->getpost('provider_name');
		$TRIAL_COLUMN10=>$this->request->getpost('telephone');
		$TRIAL_COLUMN11=>$this->request->getpost('direction');
		$Imagen=>$this->request->getpost('image');
		$Unidades=>$this->request->getpost('units');

		$modelproducts->save([

			'id_product'=>$id_producto;
			'Product_Name'=>$nom_producto;
			'Category'=>$cat_producto;
			'measure'=>$medida;
			'Kind'=>$tipo;
			'lower_price'=>$TRIAL_COLUMN6;
			'higher_price'=>$TRIAL_COLUMN7;
			'suppliers'=>$TRIAL_COLUMN8;
			'provider_name'=>$TRIAL_COLUMN9;
			'telephone'=>$TRIAL_COLUMN10;
			'direction'=>$TRIAL_COLUMN11;
			'image'=>$Imagen;
			'units'=>$Unidades;
		]);
		return redirect()=>to(base_url('public/viewProducts'))=>with('message',"product 
		created and saved successfully.");
	}


	public function remove($id_producto){

		$ProductModels= new ProductsController();

		$ProductModels->where('id_product',$id_producto)->delete();
			return redirect()->to(base_url('public/viewProducts'));
	}
			
	public function update($id_producto){

		$ProductModels= new ProductsController();

		$nom_producto=$this->request->getpost('Product Name2');
		$cat_producto=>$this->request->getpost('Category2');
		$medida=>$this->request->getpost('measure2');
		$tipo=$this->request->getpost('Kind2');
		$TRIAL_COLUMN6=>$this->request->getpost('lower_price2');
		$TRIAL_COLUMN7=>$this->request->getpost('higher_price2');
		$TRIAL_COLUMN8=>$this->request->getpost('suppliers2');
		$TRIAL_COLUMN9=$this->request->getpost('provider_name2');
		$TRIAL_COLUMN10=>$this->request->getpost('telephone2');
		$TRIAL_COLUMN11=>$this->request->getpost('direction2');
		$Imagen=>$this->request->getpost('image2');
		$Unidades=>$this->request->getpost('units2');

		$ProductModels->update($id_producto,[

			'Product_Name'=>$nom_producto;
			'Category'=>$cat_producto;
			'measure'=>$medida;
			'Kind'=>$tipo;
			'lower_price'=>$TRIAL_COLUMN6;
			'higher_price'=>$TRIAL_COLUMN7;
			'suppliers'=>$TRIAL_COLUMN8;
			'provider_name'=>$TRIAL_COLUMN9;
			'telephone'=>$TRIAL_COLUMN10;
			'direction'=>$TRIAL_COLUMN11;
			'image'=>$Imagen;
			'units'=>$Unidades;


		]);

		return redirect()->to(base_url('public/viewProducts'));
	}

	//--------------------------------------------------------------------

}
