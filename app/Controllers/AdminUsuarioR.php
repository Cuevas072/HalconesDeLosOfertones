<?php namespace App\Controllers;
use App\Models\personasModel;
use App\Models\cuponesModel;
use App\Models\comsModel;

class AdminUsuarioR extends BaseController
{

	public function index()
	{
		$request = \Config\Services::request();
		$nombreU = $request->getPost('nusu');
		$corre = $request->getPost('email'); 
		$con = $request->getPost('password');

		$variableSuperDuperCoqueta = new personasModel($db); //Instanciar una variable de tipo Modelo
		if($variableIndice['usuarios'] = $variableSuperDuperCoqueta->where('nombreUsuario',$nombreU)->findAll())	
		{		
			return view('links').view('navUr').view('tabla',$variableIndice).view('carruseUr').view('productoUr');
			//echo($this->config->item('variable'));
		}
		else
		{
			if($nombreU == 'admin')
			{
				return view('links').view('navA').view('carruseA').view('productoA');
			}
			else
			{
				return view('links').view('navUr').view('tabla',$variableIndice).view('carruseUr').view('productoUr');
				
			}			
		}
		
	}

	public function busquedaC()
	{
		$variableSuperDuperCoqueta = new personasModel($db); //Instanciar una variable de tipo Modelo
		$variableIndice['usuarios'] = $variableSuperDuperCoqueta->where('nombreUsuario',)->findAll(); 
		return view('links').view('navUr').view('tabla',$variableIndice).view('tituloB').view('productoUr').view('productoUr');
	}

	public function ventaP()
	{
		$variableSuperDuperCoqueta = new personasModel($db); //Instanciar una variable de tipo Modelo
		$variableIndice['usuarios'] = $variableSuperDuperCoqueta->where('nombreUsuario',)->findAll(); 
		return view('links').view('navUr').view('tabla',$variableIndice).view('productoUrVc');
	}

	public function compartir()
	{
		$variableSuperDuperCoqueta = new personasModel($db); //Instanciar una variable de tipo Modelo
		$variableIndice['usuarios'] = $variableSuperDuperCoqueta->where('nombreUsuario',)->findAll(); 
		return view('links').view('navUr').view('tabla',$variableIndice).view('cajaComUr');
	}


	public function altaCup(){
		

		$requestTres = \Config\Services::request();
		$nombreP = $requestTres->getPost('nomp');
		$cate = $requestTres->getPost('cat');
		$precio = $requestTres->getPost('precio');
		$link = $requestTres->getPost('link');
		$desc = $requestTres->getPost('dec');
		$idCliente = $requestTres->getPost('idC');

		$x = new cuponesModel($db); //Instanciar una variable de tipo Modelo
		$data = [				
    		'nombreP'    => $nombreP,
    		'precio' => $precio,
    		'categoria' => $cate,
    		'link' => $link,
    		'des' => $desc,
    		'idUsuario'=> $idCliente  		    		
    	];

		$x->insert($data); //Mandamos data con el arreglo
		
		$variableSuperDuperCoqueta = new personasModel($db); //Instanciar una variable de tipo Modelo
		$variableIndice['usuarios'] = $variableSuperDuperCoqueta->where('id',$idCliente)->findAll();  
		return view('links').view('navUr').view('tabla',$variableIndice).view('carruseUr').view('productoUr');
		
	}

	public function altaCom(){
		

		$requestTres = \Config\Services::request();
		$idUsuario = $requestTres->getPost('idu');
		$com = $requestTres->getPost('comentario');
				
		$x = new comsModel($db); //Instanciar una variable de tipo Modelo
		$data = [				
    		'comentario'    => $com,    	
    		'idUsuario'=> $idUsuario 		    		
    	];

		$x->insert($data); //Mandamos data con el arreglo
		
		$variableSuperDuperCoqueta = new personasModel($db); //Instanciar una variable de tipo Modelo
		$variableIndice['usuarios'] = $variableSuperDuperCoqueta->where('id',$idUsuario)->findAll();  
		return view('links').view('navUr').view('tabla',$variableIndice).view('carruseUr').view('productoUr');
		
	}


	//--------------------------------------------------------------------
}