@extends('layouts.default')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-12 col-sm-12 text-center">
			<h1>ADMINISTRACIÓN DE USUARIOS</h1>
		</div>
	</div>
	
	<div class="row">
		<div class="col-12 text-right">
			<a href="/admusuario" class="boton float-right">NUEVO USUARIO</a>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<table class="w-100">
					<tr>
						<th>Nombres</th>
						<th>Apellidos</th>
						<th class="d-none d-sm-block">Email</th>
						<th></th>
					</tr>
				@foreach($usuarios as $usuario)
					<tr>
                    	<td>{{ $usuario->nombres }}</td>
                    	<td>{{ $usuario->apellidos }}</td>
                    	<td class="d-none d-sm-block">{{ $usuario->email }}</td>
                    	<td>
                    		<a href="/admusuario?id_usuario={{ $usuario->id }}"><i class="fa fa-pencil"></i></a>
                    		<a href="#" class="dltUsuario" id_usuario="{{ $usuario->id }}"><i class="fa fa-trash-o"></i></a>
                    	</td>
                    </tr>
				@endforeach
			</table>
		</div>
	</div>
</div>
@stop

