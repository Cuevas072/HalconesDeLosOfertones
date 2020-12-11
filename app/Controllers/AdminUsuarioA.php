<?php namespace App\Controllers;

use App\Models\personasModel;
use App\Models\cuponesModel;
use App\Models\comsModel;
class AdminUsuarioA extends BaseController
{
	public function index()
	{
		return view('links').view('navA').view('carruseA').view('productoA');
	}

	public function busquedaC()
	{
		return view('links').view('navA').view('tituloB').view('productoA').view('productoA');
	}

	public function ventaP()
	{
		return view('links').view('navA').view('productoAvc');
	}

	public function compartir()
	{
		return view('links').view('navA').view('compartirA');
	}

	public function quitar()
	{
		return view('links').view('navA').view('quitarP');
	}

	public function navegador()
	{
		return view('links').view('navA').view('navegarAdmin');
	}

	public function consulta()
	{				
		$variableSuperCoqueta = new personasModel($db); //Instanciar una variable de tipo Modelo
		$variableIndice['usuarios'] = $variableSuperCoqueta->findAll(); //Lo tiene la vista
		return view('links').view('navA').view('vistaUsers',$variableIndice);

	}



	public function x()
	{ 
		return view('links').view('navA').view('formBu');
	}

	public function busquedaE()
	{				
		$request = \Config\Services::request();
		$variable = $request->getPost('id');
		$variableSuperDuperCoqueta = new personasModel($db); //Instanciar una variable de tipo Modelo
		$variableIndice['usuarios'] = $variableSuperDuperCoqueta->where('id',$variable)->findAll(); 
		return view('links').view('navA').view('vistaUsers',$variableIndice);

	}

	public function formBe()
	{ 
		return view('links').view('navA').view('formBe');
	}

	public function eliminar()
	{				
		$request = \Config\Services::request();
		$variableSuperDuperCoqueta = new personasModel($db); //Instanciar una variable de tipo Modelo
		$variable = $request->getPost('id');
		$variableSuperDuperCoqueta->where('id',$variable)->delete(); 		
		$variableIndice['usuarios'] = $variableSuperDuperCoqueta->withDeleted()->findAll(); 
		return view('links').view('navA').view('vistaUsers',$variableIndice);	
	}


	public function formAu()
	{ 
		return view('links').view('navA').view('formulActualizarUsuarios');
	}

	public function actualizar()
	{				
		$request = \Config\Services::request();
		$variableCoqueta = new personasModel($db); //Instanciar una variable de tipo Modelo

		$id = $request->getPost('id');
		$correo = $request->getPost('email');
		$nombre = $request->getPost('nombre');
		$apellidoP = $request->getPost('ap');
		$apellidoM = $request->getPost('am');
		$nombreU = $request->getPost('nu');
		$telefono = $request->getPost('telefono');	
		$password = $request->getPost('password');	

		
		$data = [	
    		'email'    => $correo,
    		'nombre' => $nombre,
    		'apellidoPaterno' => $apellidoP,
    		'apellidoMaterno' => $apellidoM,
    		'nombreUsuario' => $nombreU,
    		'contrasenia' => $password,     		
    		'telefono' => $telefono  
    		
    	];

		$variableCoqueta->update($id,$data); 

		$variableSuperCoqueta = new personasModel($db); //Instanciar una variable de tipo Modelo
		$variableIndice['usuarios'] = $variableSuperCoqueta->findAll(); //Lo tiene la vista
		return view('links').view('navA').view('carruseA').view('productoA');		
	}

	public function agregarCom()
	{				
		$requestTres = \Config\Services::request();
		$nombreP = $requestTres->getPost('nompp');
		$cate = $requestTres->getPost('catt');
		$precio = $requestTres->getPost('precioo');
		$link = $requestTres->getPost('linkk');
		$desc = $requestTres->getPost('decc');
		$idCliente = $requestTres->getPost('idCc');

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
		return view('links').view('navA').view('carruseA').view('productoA');		
	}

	public function consultaGC()
	{				
		$variableSuperCoqueta = new cuponesModel($db); //Instanciar una variable de tipo Modelo
		$variableIndiceD['cupon'] = $variableSuperCoqueta->findAll(); //Lo tiene la vista
		return view('links').view('navA').view('vistaCupones',$variableIndiceD);

	}
	
	public function formBEC()
	{ 
		return view('links').view('navA').view('formBec');
	}

	public function busquedaEC()
	{				
		$request = \Config\Services::request();
		$variable = $request->getPost('idBus');
		$variableSuperDuperCoqueta = new cuponesModel($db); //Instanciar una variable de tipo Modelo
		$variableIndice['cupon'] = $variableSuperDuperCoqueta->where('id',$variable)->findAll(); 
		return view('links').view('navA').view('vistaCupones',$variableIndice);

	}

	public function viaC()
	{
		return view('links').view('navA').view('actCupones');
	}
	public function actualizarCup()
	{			
		
		$requestTres = \Config\Services::request();
		$x = new cuponesModel($db); 

		$nombreP = $requestTres->getPost('nompp');
		$cate = $requestTres->getPost('catt');
		$precio = $requestTres->getPost('precioo');
		$link = $requestTres->getPost('linkk');
		$desc = $requestTres->getPost('desc');
		$idCliente = $requestTres->getPost('idU');
		$idProducto = $requestTres->getPost('idP');

		
		$data = [	
    		'nombreP'    => $nombreP,
    		'precio' => $precio,
    		'categoria' => $cate,
    		'link' => $link,
    		'des' => $link,
    		'idUsuario' => $idCliente  		    		
    	];

    	$x->update($idProducto,$data); 

		$variableSuperCoqueta = new cuponesModel($db); //Instanciar una variable de tipo Modelo
		$variableIndice['cupon'] = $variableSuperCoqueta->findAll(); //Lo tiene la vista
		return view('links').view('navA').view('vistaCupones',$variableIndice);

	}

	public function formEC()
	{ 
		return view('links').view('navA').view('formECup');
	}


	public function eliminarCupon()
	{				
		$request = \Config\Services::request();
		$variableSuperDuperCoqueta = new cuponesModel($db); //Instanciar una variable de tipo Modelo
		$variable = $request->getPost('idEli');
		$variableSuperDuperCoqueta->where('id',$variable)->delete(); 		
		$variableIndice['cupon'] = $variableSuperDuperCoqueta->withDeleted()->findAll(); 
		return view('links').view('navA').view('vistaCupones',$variableIndice);	
	}


	public function agregarComentarioF()
	{ 
		return view('links').view('navA').view('agregarComU');
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
		
		return view('links').view('navA').view('carruseA').view('productoA');
		
	}


	public function consultaGComentarios()
	{				
		$variableSuperCoqueta = new comsModel($db); //Instanciar una variable de tipo Modelo
		$variableIndiceD['comentario'] = $variableSuperCoqueta->findAll(); //Lo tiene la vista
		return view('links').view('navA').view('vistaComentarios',$variableIndiceD);

	}
	

	public function formEComen()
	{ 
		return view('links').view('navA').view('busquedaCom');
	}

	public function busC()
	{ 
		$request = \Config\Services::request();
		$variable = $request->getPost('idBus');
		$variableSuperDuperCoqueta = new comsModel($db); //Instanciar una variable de tipo Modelo
		$variableIndice['comentario'] = $variableSuperDuperCoqueta->where('id',$variable)->findAll(); 
		return view('links').view('navA').view('vistaComentarios',$variableIndice);
	}
	public function actF()
	{
		return view('links').view('navA').view('editarCom');
	}

	public function actualizarComentarios()
	{			
	
		$requestTres = \Config\Services::request();
		$idComentario = $requestTres->getPost('idC');
		$com = $requestTres->getPost('comentario');
				
		$x = new comsModel($db); //Instanciar una variable de tipo Modelo
		$data = [				
    		'comentario'    => $com
    	];

    	$x->update($idComentario,$data); 
		$variableSuperCoqueta = new comsModel($db); //Instanciar una variable de tipo Modelo
		$variableIndiceD['comentario'] = $variableSuperCoqueta->findAll(); //Lo tiene la vista
		return view('links').view('navA').view('vistaComentarios',$variableIndiceD);
	}

	public function formEComentario()
	{ 
		return view('links').view('navA').view('formularioEliCom');
	}


	public function eliminarComentario()
	{				
		$request = \Config\Services::request();
		$variableSuperDuperCoqueta = new comsModel($db); //Instanciar una variable de tipo Modelo
		$variable = $request->getPost('idEli');

		$variableSuperDuperCoqueta->where('id',$variable)->delete(); 		
		$variableIndice['comentario'] = $variableSuperDuperCoqueta->withDeleted()->findAll(); 
		return view('links').view('navA').view('vistaComentarios',$variableIndice);	
	}
	
}