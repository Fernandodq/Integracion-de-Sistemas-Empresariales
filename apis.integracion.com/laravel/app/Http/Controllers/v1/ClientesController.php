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
    $cliente->tipo = $request->tipo;
    $cliente->tipo_documento = $request->tipo_documento;
    $cliente->numero_documento = $request->numero_documento;
    $cliente->apellido_paterno = $request->apellido_paterno;
    $cliente->apellido_materno = $request->apellido_materno;
    $cliente->nombres = $request->nombres;
    $cliente->direccion = $request->direccion;
    $cliente->ubigeo = $request->ubigeo;
    $cliente->save();

    $response->success=true;
    $response->data=$cliente;

    return response()->json($response,200);
   }

}