<?php

namespace App\Http\Controllers\v1;

use Illuminate\Routing\Controller;
use App\Models\v1\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    function getAll()
    {
        $response = new \stdclass();
        $cliente = Cliente::all();

        $response->success=true;
        $response->data = $cliente;
        return response()->json($response,200);
    }

    function getItem($id)
    {
        $response = new \stdclass();
        $cliente = Cliente::find($id);

        $response->success=true;
        $response->data = $cliente;
        return response()->json($response,200);
    }

    function store(Request $request)
    {
        $response = new \stdclass();
        $cliente = new Cliente();
        $cliente->ndocumento = $request->ndocumento;
        $cliente->tipodocumento = $request->tipodocumento;
        $cliente->razonsocial = $request->razonsocial;
        $cliente->direccion = $request->direccion;
        $cliente->save();

        $response->success=true;
        $response->data = $cliente;
        return response()->json($response,200);
    }

    function putUpdate(Request $request)
    {
        $response = new \stdclass();
        $cliente = Cliente::find($request->id);

        if($cliente)
        {
            $cliente->ndocumento = $request->ndocumento;
            $cliente->tipodocumento = $request->tipodocumento;
            $cliente->razonsocial = $request->razonsocial;
            $cliente->direccion = $request->direccion;
            $cliente->save();

            $response->data = $cliente;
            $response->success=true;
        }
        
        else 
        {
            $response->success=false;
            $response->error=["el cliente con el id ".$request->id. " no existe"];
        }
        
        
        return response()->json($response,($response->success?200:401));
    }

    function patchUpdate(Request $request)
    {
        $response = new \stdclass();
        $cliente = Cliente::find($request->id);

        if($cliente)
        {
            if($request->ndocumento)
            $cliente->ndocumento = $request->ndocumento;

            if($request->tipodocumento)
            $cliente->tipodocumento = $request->tipodocumento;

            if($request->razonsocial)
            $cliente->razonsocial = $request->razonsocial;

            if($request->direccion)
            $cliente->direccion = $request->direccion;

            $cliente->save();

            $response->data = $cliente;
            $response->success=true;
        }
        
        else 
        {
            $response->success=false;
            $response->error=["el cliente con el id ".$request->id. " no existe"];
        }
        
        
        return response()->json($response,($response->success?200:401));
    }

    function delete($id)
    {
        $response = new \stdClass();
        $cliente = Cliente::find($id);

        if($cliente)
        {
            $cliente->delete();
            $response->success=true;
        }
        else
        {
            $response->success=false;
            $response->error=["el cliente con el id ".$id." no existe"];
        }

        return response()->json($response,($response->success?200:401));
    }

}
