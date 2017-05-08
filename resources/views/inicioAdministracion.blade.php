<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>

	{!!Html::style('/css/estilosInicioAdministracion.css')!!}
	{!!Html::style('/css/fontello.css')!!}
	{!!Html::style('/css/stylesheet.css')!!}



	<style>
		@font-face {font-family:"JI Chimichanga";src:url("/font/JI_Chimichanga.eot?") format("eot"),url("/font/JI_Chimichanga.woff") format("woff"),url("/font/JI_Chimichanga.ttf") format("truetype"),url("/font/JI_Chimichanga.svg#JIChimichanga") format("svg");font-weight:normal;font-style:normal;}

		h1, h2, h3{
			font-family: "JI Chimichanga", Arial;
		}
		table {
		    border-collapse: collapse;
		    width: 100%;
		}

		th, td {
		    text-align: left;
		    padding: 8px;
		}

		tr:nth-child(even){background-color: #dbdbdb;}
		tr:nth-child(odd){background-color: #c8c7b6;}

		th {
		    background-color: #fe227c;
		    color: black;
		}
	</style>

</head>
<body>
	<header>
		<div class="contenedor">
			<h1 class="icon-comida">El Burrito Fierro</h1>
			<input type="checkbox" id="menu-bar">
			<label class="icon-menu" for="menu-bar"></label>
			<!--Menú de opciones disponibles para el administrador-->
			<nav class="menu">
				<a href="#pantallaPedidosS" onclick="clicPantallaPedidos()">Pedidos</a>
				<a href="#pantallaInventarioS" onclick="clicPantallaInventario()">Inventario</a>
				<a href="#pantallaReportesS" onclick="clicPantallaReportes()">Reportes</a>
				<a href="#pantallaNotificacionesS" onclick="clicPantallaNotificaciones()">Notificaciones</a>
				<a href="/cierreSesion" onclick="clicSalir()">Salir</a>
			</nav>
		</div>
	</header>

	<main>

		<!--Sección que contiene la pantalla que muestra los pedidos-->	
		<section id="pantallaPedidosS", class="pantallaPedidos">
			
			<div id="general"> 
				<div id="mesa1">
					<label id="mesa">Mesa 1</label>
					<table style="text-align: left;">
						<thead>
							<th>Comida</th>
							<th>Cantidad</th>
						</thead>
						<tbody>
							@foreach($pedidoComidaM1 as $pedido)
							<tr>
								<td>
									{{$pedido['nombre_comida']}}
								</td>
								<td>
									{{$pedido['cantidad_comida']}}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					<table style="text-align: left;">
						<thead>
							<th>Bebida</th>
							<th>Cantidad</th>
						</thead>
						<tbody>
							@foreach($pedidoBebidaM1 as $pedido)
							<tr>
								<td>
									{{$pedido['nombre_bebida']}}
								</td>
								<td>
									{{$pedido['cantidad_bebida']}}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					
					@if($pedidoComidaM1 <> null || $pedidoBebidaM1 <> null)
						<table style="text-align: left;">
						<thead>
							<th>Valor de la factura:</th>
						</thead>	
							<tbody>
								<tr>
									<td>
										{{$precioPedidoMesa1}}
									</td>
								</tr>
							</tbody>			
					</table>
					<a href="terminarPedido/{{1}}" class="btn btn-warning", style="color: white;">Terminar pedido</a>
					@endif
				</div>
				<div id="mesa2">
					<label id="mesa">Mesa 2</label>
					<table style="text-align: left;">
						<thead>
							<th>Comida</th>
							<th>Cantidad</th>
						</thead>
						<tbody>
							@foreach($pedidoComidaM2 as $pedido)
							<tr>
								<td>
									{{$pedido['nombre_comida']}}
								</td>
								<td>
									{{$pedido['cantidad_comida']}}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					<table style="text-align: left;">
						<thead>
							<th>Bebida</th>
							<th>Cantidad</th>
						</thead>
						<tbody>
							@foreach($pedidoBebidaM2 as $pedido)
							<tr>
								<td>
									{{$pedido['nombre_bebida']}}
								</td>
								<td>
									{{$pedido['cantidad_bebida']}}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					@if($pedidoComidaM2 <> null || $pedidoBebidaM2 <> null)
					<table style="text-align: left;">
						<thead>
							<th>Valor de la factura:</th>
						</thead>	
							<tbody>
								<tr>
									<td>
										{{$precioPedidoMesa2}}
									</td>
								</tr>
							</tbody>			
					</table>
					<a href="terminarPedido/{{2}}" class="btn btn-warning", style="color: white;">Terminar pedido</a>
					@endif
				</div>
				<div id="mesa3">
					<label id="mesa">Mesa 3</label>
					<table style="text-align: left;">
						<thead>
							<th>Comida</th>
							<th>Cantidad</th>
						</thead>
						<tbody>
							@foreach($pedidoComidaM3 as $pedido)
							<tr>
								<td>
									{{$pedido['nombre_comida']}}
								</td>
								<td>
									{{$pedido['cantidad_comida']}}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					<table style="text-align: left;">
						<thead>
							<th>Bebida</th>
							<th>Cantidad</th>
						</thead>
						<tbody>
							@foreach($pedidoBebidaM3 as $pedido)
							<tr>
								<td>
									{{$pedido['nombre_bebida']}}
								</td>
								<td>
									{{$pedido['cantidad_bebida']}}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					@if($pedidoComidaM3 <> null || $pedidoBebidaM3 <> null)
					<table style="text-align: left;">
						<thead>
							<th>Valor de la factura:</th>
						</thead>	
							<tbody>
								<tr>
									<td>
										{{$precioPedidoMesa3}}
									</td>
								</tr>
							</tbody>			
					</table>
					<a href="terminarPedido/{{3}}" class="btn btn-warning", style="color: white;">Terminar pedido</a>
					@endif
				</div>
				<div id="mesa4">
					<label id="mesa">Mesa 4</label>
					<table style="text-align: left;">
						<thead>
							<th>Comida</th>
							<th>Cantidad</th>
						</thead>
						<tbody>
							@foreach($pedidoComidaM4 as $pedido)
							<tr>
								<td>
									{{$pedido['nombre_comida']}}
								</td>
								<td>
									{{$pedido['cantidad_comida']}}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					<table style="text-align: left;">
						<thead>
							<th>Bebida</th>
							<th>Cantidad</th>
						</thead>
						<tbody>
							@foreach($pedidoBebidaM4 as $pedido)
							<tr>
								<td>
									{{$pedido['nombre_bebida']}}
								</td>
								<td>
									{{$pedido['cantidad_bebida']}}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					@if($pedidoComidaM4 <> null || $pedidoBebidaM4 <> null)
					<table style="text-align: left;">
						<thead>
							<th>Valor de la factura:</th>
						</thead>	
							<tbody>
								<tr>
									<td>
										{{$precioPedidoMesa4}}
									</td>
								</tr>
							</tbody>			
					</table>
					<a href="terminarPedido/{{4}}" class="btn btn-warning", style="color: white;">Terminar pedido</a>
					@endif
				</div>
				<div id="mesa5">
					<label id="mesa">Mesa 5</label>
					<table style="text-align: left;">
						<thead>
							<th>Comida</th>
							<th>Cantidad</th>
						</thead>
						<tbody>
							@foreach($pedidoComidaM5 as $pedido)
							<tr>
								<td>
									{{$pedido['nombre_comida']}}
								</td>
								<td>
									{{$pedido['cantidad_comida']}}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					<table style="text-align: left;">
						<thead>
							<th>Bebida</th>
							<th>Cantidad</th>
						</thead>
						<tbody>
							@foreach($pedidoBebidaM5 as $pedido)
							<tr>
								<td>
									{{$pedido['nombre_bebida']}}
								</td>
								<td>
									{{$pedido['cantidad_bebida']}}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					@if($pedidoComidaM5 <> null || $pedidoBebidaM5 <> null)
					<table style="text-align: left;">
						<thead>
							<th>Valor de la factura:</th>
						</thead>	
							<tbody>
								<tr>
									<td>
										{{$precioPedidoMesa5}}
									</td>
								</tr>
							</tbody>			
					</table>
						<a href="terminarPedido/{{5}}" class="btn btn-warning", style="color: white;">Terminar pedido</a>
					@endif
				</div>
				<div id="mesa6">
					<label id="mesa">Mesa 6</label>
					<table style="text-align: left;">
						<thead>
							<th>Comida</th>
							<th>Cantidad</th>
						</thead>
						<tbody>
							@foreach($pedidoComidaM6 as $pedido)
							<tr>
								<td>
									{{$pedido['nombre_comida']}}
								</td>
								<td>
									{{$pedido['cantidad_comida']}}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					<table style="text-align: left;">
						<thead>
							<th>Bebida</th>
							<th>Cantidad</th>
						</thead>
						<tbody>
							@foreach($pedidoBebidaM6 as $pedido)
							<tr>
								<td>
									{{$pedido['nombre_bebida']}}
								</td>
								<td>
									{{$pedido['cantidad_bebida']}}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					@if($pedidoComidaM6 <> null || $pedidoBebidaM6 <> null)
						<table style="text-align: left;">
							<thead>
								<th>Valor de la factura:</th>
							</thead>	
								<tbody>
									<tr>
										<td>
											{{$precioPedidoMesa6}}
										</td>
									</tr>
								</tbody>			
						</table>
						<a href="terminarPedido/{{6}}" class="btn btn-warning", style="color: white;">Terminar pedido</a>
					@endif
				</div>
				<div id="mesa7">
						<label id="mesa">Barra</label>
						
						<table style="text-align: left;">
							<thead>
								<th>Comida</th>
								<th>Cantidad</th>
							</thead>
							<tbody>
								@foreach($pedidoComidaM7 as $pedido)
								<tr>
									<td>
										{{$pedido['nombre_comida']}}
									</td>
									<td>
										{{$pedido['cantidad_comida']}}
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						<table style="text-align: left;">
							<thead>
								<th>Bebida</th>
								<th>Cantidad</th>
							</thead>
							<tbody>
								@foreach($pedidoBebidaM7 as $pedido)
								<tr>
									<td>
										{{$pedido['nombre_bebida']}}
									</td>
									<td>
										{{$pedido['cantidad_bebida']}}
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						@if($pedidoComidaM7 <> null || $pedidoBebidaM7 <> null)
							<table style="text-align: left;">
							<thead>
								<th>Valor de la factura:</th>
							</thead>	
								<tbody>
									<tr>
										<td>
											{{$precioPedidoMesa7}}
										</td>
									</tr>
								</tbody>			
							</table>
							<a href="terminarPedido/{{7}}" class="btn btn-warning", style="color: white;">Terminar pedido</a>
						@endif
				</div>
			</div>
		</section>
		
		

		<!--Sección que contiene la pantalla de manejo de inventario-->
		<center><section id="pantallaInventarioS", class="pantallaInventario">
			
			<div id="contenedorOpcionesInventario">
				</br>
				</br>
				<center><h1>Espacio para el seguimiento y gesti&oacute;n de inventario</h1></center>
				</br>

				<table class="tablaIngredientes">
					<thead>
						<th>Ingrediente</th>
						<th>Cantidad</th>
						<th>Opci&oacute;n</th>
					</thead>

					<tbody>
						@foreach($listadoIngredientes as $ingrediente)
							<tr>
								<td>{{$ingrediente->nombre_ingrediente}}</td>
								<td>{{$ingrediente->cantidad}}</td>
								<td>
									<a href="editarIngrediente/{{$ingrediente->idIngrediente}}" class="btn btn-warning">Editar</a>
								</td>
							</tr>						
						@endforeach
					</tbody>
						
				</table>

			</div>

		</section></center>


		<center><section id="pantallaReportesS", class="pantallaReportes">

		<div id="contenedorReportes">
			</br>
			</br>
			<center><h1>Espacio para la informaci&oacute;n de los Reportes</h1></center>

				{!!Form::open(['route'=>'inicioAdministracion.retornarIngredientes.generarReporte', 'method'=>'POST'])!!}
					
					<table class="tablaReportes">
						<thead>
							<th>Reportes</th>
						</thead>
						<tbody>
							@foreach($listadoReportes as $reporte)
								
								<tr>
									<td>{{$reporte}}</td>
								</tr>
								
							@endforeach
						</tbody>
					</table>
					{!!Form::submit('Actualizar reportes')!!}
					
				{!!Form::close()!!}
			</div>	
		</section>

		<section id="pantallaNotificacionesS", class="pantallaNotificaciones">
			<div id="contenedorNotificaciones">
			</br>
				</br>
				<center><h2>Espacio para ver notificaciones</h2></center>

				{!!Form::open(['route'=>'inicioAdministracion.retornarIngredientes.verNotificaciones', 'method'=>'POST'])!!}
					
					<table class="tablaNotificaciones">
						<thead>
							<th>Notificaciones</th>
						</thead>
						<tbody>
							@foreach($listadoNotificaciones as $notificacion)
								<tr>
									<td>{{$notificacion}}</td>
								</tr>
							@endforeach
						</tbody>	
					</table>
					{!!Form::submit('Actualizar Notificaciones')!!}
					
				{!!Form::close()!!}	
				</div>		
		</section></center>

	</main>

</body>
</html>
