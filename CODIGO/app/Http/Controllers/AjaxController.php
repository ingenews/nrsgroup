<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\Models\Usuarios as Usuarios;
use App\Models\Butacas as Butacas;

class AjaxController extends Controller
{
    
	public function delusuario (Request $request){
		$usuarios = new Usuarios;
		$usuario = $usuarios::find($request->id);
		$usuario->delete();
	}

	public function guardareserva (Request $request){
		$butacas=new Butacas;
		$butacas::whereIn('id', explode(",", $request->ids))
		->update(['estado' => '1', 'usuarios_id' => $request->id_usuario]);
		Log::channel('single')->info("Reservadas las butacas (".$request->ids.") para el usuario ID: ".$request->id_usuario);
	}

	public function delreserva (Request $request){
		$butacas = new Butacas;
		$butacas::where('id', "=" , $request->id)
		->update(['estado' => '0', 'usuarios_id' => null]);
	}

}
