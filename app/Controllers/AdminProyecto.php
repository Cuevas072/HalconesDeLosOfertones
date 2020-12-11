<?php namespace App\Controllers;

use App\Models\personasModel;

class AdminProyecto extends BaseController
{
	public function index()
	{
		return view('links').view('navUnr').view('carruseUnr').view('productoUnr').view('comentarios').view('cajaComUnr');
	}

	public function validarUsuario()
	{
		return view('links').view('navUnr').view('validarU');
	}

	public function cuenta()
	{
		return view('links').view('navUnr').view('crearC');
	}

	public function busquedaC()
	{
		return view('links').view('navUnr').view('tituloB').view('productoUnr').view('comentarios').view('cajaComUnr').view('productoUnr').view('comentarios').view('cajaComUnr');
	}

	public function ventaP()
	{
		return view('links').view('navUnr').view('productoUnrVc').view('comentarios').view('cajaComUnr');
	}

	public function alta(){
		$request = \Config\Services::request();
		$correo = $request->getPost('email');
		$nombre = $request->getPost('nombre');
		$apellidoP = $request->getPost('ap');
		$apellidoM = $request->getPost('am');
		$nombreU = $request->getPost('nu');
		$telefono = $request->getPost('telefono');	
		$password = $request->getPost('password');	

		
		$variableCoqueta = new personasModel($db); //Instanciar una variable de tipo Modelo
		$data = [				
    		'email'    => $correo,
    		'nombre' => $nombre,
    		'apellidoPaterno' => $apellidoP,
    		'apellidoMaterno' => $apellidoM,
    		'nombreUsuario' => $nombreU,
    		'contrasenia' => $password,     		
    		'telefono' => $telefono  
    		
    	];

		$variableCoqueta->insert($data); //Mandamos data con el arreglo
		return view('links').view('navUnr').view('carruseUnr').view('productoUnr').view('comentarios').view('cajaComUnr');

	}

	public function iniciarS()
	{
		$requestD = \Config\Services::request();
		$nu = $requestD->getPost('nusu');
		$variableSuperDuperCoqueta = new personasModel($db); //Instanciar una variable de tipo Modelo
		$variableIndice['usuarios'] = $variableSuperDuperCoqueta->where('nombreUsuario',$nu)->findAll(); 
		return view('links').view('navUr').view('tabla',$variableIndice);
	}
	//--------------------------------------------------------------------
}