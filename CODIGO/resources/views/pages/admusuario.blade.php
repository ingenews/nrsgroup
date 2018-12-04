@extends('layouts.default')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-12 col-sm-12 text-center">
			<h1>ADMINISTRACIÓN DE USUARIOS</h1>
		</div>
	</div>
	
	<div class="w500 form">
		<form name="form" method="post">
			{!! csrf_field() !!}
			<input type="hidden" name="id" value="{{ (isset($infousr->id) ? $infousr->id : '') }}">
			<div class="row">
				<div class="col-12 col-sm-6">
					<p>Nombres</p>
					<input class="w-100" type="text" name="nombres" required value="{{ (isset($infousr->nombres) ? $infousr->nombres : '') }}">
				</div>
				<div class="col-12 col-sm-6">
					<p>Apellidos</p>
					<input class="w-100" type="text" name="apellidos" required value="{{ (isset($infousr->apellidos) ? $infousr->apellidos : '') }}">
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-sm-12">
					<p>Email</p>
					<input class="w-100" type="email" name="email" required value="{{ (isset($infousr->email) ? $infousr->email : '') }}">
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-sm-12 text-center">
					<input type="submit" value="GUARDAR">
				</div>
			</div>
		</form>
	</div>
</div>
@stop

