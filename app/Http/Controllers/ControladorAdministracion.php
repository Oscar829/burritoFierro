<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Controllers\Controller;
use App\Pedido;
use App\Ingrediente;
use App\Pedido__Comida;
use Session;
use Redirect;

/*Controlador encargado de contener los metodos referentes a las funciones del administrador*/
class ControladorAdministracion extends Controller
{

	
/*Método para retornar a la vista los pedidos pendientes, para que sean mostrados al chef*/
	public function retornarPedidos(){

		$listadoPedidosComidas = Pedido__Comida::all();

		foreach ($listadoPedidosComidas as $pedidoComida) {
			
			$idPedido = $pedidoComida->Pedido_idPedido;

			$pedido::find($idPedido);

			if ($pedido->estado_pedido == 'pendiente') {
				
				return view('inicioAdministracion', compact('pedido'));

			}

		}

	}


/*Método para editar un ingrediente del inventario, simplemente se actualizará la cantidad de dicho ingrediente existente en el inventario*/
	public function editarIngrediente($idIngrediente){

		$ingrediente = Ingrediente::find($idIngrediente);
		
		return view('editarIngrediente', compact('ingrediente'));
	}

/*Método para actualizar la cantidad de un ingrediente en el inventario*/
	public function actualizarIngrediente(Request $request,$idIngrediente){

		$ingrediente = Ingrediente::find($idIngrediente);
		$ingrediente -> fill($request->all());
		$ingrediente -> save();
		
		return Redirect::to('inicioAdministracion/retornarIngredientes');
		

	}

/*Método para retornar a la vista todos los ingredientes registrados en la base de datos, para que sean mostrados en la tabla de ingredientes*/
	public function retornarIngredientes(){

		$listadoIngredientes = Ingrediente::all();

		return view('inicioAdministracion', compact('listadoIngredientes'));

	}
	public function edit($ingrediente){
		dd('edit');
		//$ingrediente = Ingrediente::findOrFail($ingrediente);
		//$ingrediente = Ingrediente::find($ingrediente);
		//return view('editarIngrediente', compact('ingrediente'));


		$ingrediente = Ingrediente::find($idIngrediente);
		$ingrediente -> fill($request->all());
		$ingrediente -> save();

		return Redirect::to('inicioAdministracion');

	}

}
