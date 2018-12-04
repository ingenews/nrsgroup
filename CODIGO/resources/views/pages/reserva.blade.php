@extends('layouts.default')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-12 col-sm-12 text-center">
			<h1>RESERVAS</h1>
		</div>

	</div>
	
	<div class="w800 form">
		<form name="form" method="post">
			{!! csrf_field() !!}
			<input type="hidden" name="id" value="{{ (isset($infousr->id) ? $infousr->id : '') }}">
			<div class="row">
				<div class="col-12 col-sm-12">
					<p>Usuario</p>
					<select class="w-100" name="id" id="id_usuario">
						<option value="">Seleccione un usuario</option>
						@foreach($usuarios as $usuario)
							@php
								$selected="";
							@endphp
							@if (isset($id_usuario))
								@if ($id_usuario == $usuario->id)
									@php
										$selected="selected";
									@endphp
								@endif
							@endif
							<option value="{{ $usuario->id }}" {{ $selected }}>{{ $usuario->nombres." ".$usuario->apellidos.", ".$usuario->email }}</option>
						@endforeach
					</select>
				</div>
			</div>
			@if (isset($id_usuario))
				<div class="row">
					<div class="col-12 col-sm-12">
						<p>Reservas de este usuario</p>
					</div>
					@if (isset($reservas))
						@foreach($reservas as $reserva)
						<div class="col-12 col-sm-12">
							<div class="row">
								<div class="col-12 col-sm-3">
									Reserva No.: {{ $reserva->id }}
								</div>
								<div class="col-12 col-sm-3">
									Butaca No.: {{ $reserva->fila."-".$reserva->columna }}
								</div>
								<div class="col-12 col-sm-3">
									<a href="#" class="elimres" id_res="{{ $reserva->id }}">Eliminar Reserva</a>
								</div>
							</div>
						</div>
						@endforeach
					@endif
				</div>

				<div class="row">
					<div class="col-12 col-sm-12">
						<p>Butacas (de clic en la butaca que desea reservar)</p>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-sm-12 text-center">
						<div class="row">
							@php
								$antFila="";
							@endphp
							@foreach($butacas as $butaca)	
								@if ($antFila!=$butaca->fila && $antFila!="")
									</div>
									<div class="row">
								@endif
								<div class="col butaca estado{{ $butaca->estado }}" id="{{ $butaca->id }}">{{ $butaca->fila."-".$butaca->columna }}</div>
								@php
									$antFila=$butaca->fila;
								@endphp
							@endforeach
						
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-sm-12 text-center">
							<input type="button" class="guardaReserva" value="GUARDAR">
						</div>
					</div>
				</div>
			@endif
		</form>
	</div>
</div>
@stop

