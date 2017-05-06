@extends('layouts.plantillaInicioAdministracion')

@section('pantallaNotificaciones')

	<h2>Espacio para la visualizaci&oacute;n de notificaciones</h2>
	</br>
	</br>
	<div class="contenedorNotificaciones">

				<table class="tablaNotificaciones">
					<thead>
						<th>Mensaje</th>
						<th>Ingrediente</th>
						<th>Cantidad</th>
					</thead>

					@foreach($listadoNotificaciones as $ingrediente)
						<tbody>
							<td>{{$ingrediente->nombre_ingrediente}}</td>
							<td>{{$ingrediente->cantidad}}</td>
							<td>
								<a href="editarIngrediente/{{$ingrediente->idIngrediente}}" class="btn btn-warning">Editar</a>
							</td>
						</tbody>
					@endforeach
						
				</table>

			</div>

@endsection