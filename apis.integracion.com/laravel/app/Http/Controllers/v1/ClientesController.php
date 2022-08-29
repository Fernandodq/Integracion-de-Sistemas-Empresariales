<?php
 
namespace App\Http\Controllers\v1;
 
use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;
 
class ClientesController extends Controller
{
   public function getAll()
   {
    $response = new \stdClass();
    $clientes =  Cliente::all();

    $response->success=true;
    $response->data=$clientes;

    return response()->json($response,200);
   }

   public function getItem($id)
   {
    $response = new \stdClass();
    $cliente = Cliente::find($id);

    $response->success=true;
    $response->data=$cliente;

    return response()->json($response,200);
   }

   public function save(Request $request)
   {
    $response = new \stdClass();

    $cliente = new Cliente();
    $cliente->save();

    $response->success=true;
    $response->data=$cliente;

    return response()->json($response,200);
   }

}