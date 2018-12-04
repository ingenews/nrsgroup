<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios as Usuarios;
use App\Models\Butacas as Butacas;

class IndexController extends Controller
{

	public function index(){
    	return view('pages.index');
    }

    public function reservas(Request $request){
    	$usuarios=new Usuarios;
    	$butacas=new Butacas;
        if ($request->has('id_usuario')) {
           return view('pages.reserva')->with("usuarios", $usuarios::all())->with("butacas", $butacas::all())->with("reservas", $usuarios::find($request->id_usuario)->reservas)->with("id_usuario", $request->id_usuario); 
        }
        else
    	   return view('pages.reserva')->with("usuarios", $usuarios::all())->with("butacas", $butacas::all());
    }

    public function admusuario(Request $request){
    	if($request->has('id_usuario')){
    		$usuarios=new Usuarios;
    		return view('pages.admusuario')->with("infousr", $usuarios::find($request->id_usuario));
    	}else
    		return view('pages.admusuario');
    }

    public function usuarios(){
    	$usuarios=new Usuarios;
    	return view('pages.usuarios')->with("usuarios", $usuarios::all());
    }

    public function postusuario(Request $request){
    	$usuarios = new Usuarios;
    	if ($request->id=="")
	    	$usuarios->create($request->except('_token','id'));
	    else{
	    	$usuario = $usuarios::find($request->id);
	    	$usuario->nombres = $request->nombres;
	    	$usuario->apellidos = $request->apellidos;
	    	$usuario->email = $request->email;
	    	$usuario->save();
		}
	    return redirect('usuarios');
    }

}
