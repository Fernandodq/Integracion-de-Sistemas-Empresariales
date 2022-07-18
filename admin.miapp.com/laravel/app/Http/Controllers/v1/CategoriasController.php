<?php

namespace App\Http\Controllers\v1;

use Illuminate\Routing\Controller;
use App\Models\v1\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    function getAll()
    {
        $response = new \stdclass();
        $categoria = Categoria::all();

        $response->success=true;
        $response->data = $categoria;
        return response()->json($response,200);
    }

    function getItem($id)
    {
        $response = new \stdclass();
        $categoria = Categoria::find($id);

        $response->success=true;
        $response->data = $categoria;
        return response()->json($response,200);
    }

    function store(Request $request)
    {
        $response = new \stdclass();
        $categoria = new Categoria();
        $categoria->codigo = $request->codigo;
        $categoria->descripcion = $request->descripcion;
        $categoria->save();

        $response->success=true;
        $response->data = $categoria;
        return response()->json($response,200);
    }

    function putUpdate(Request $request)
    {
        $response = new \stdclass();
        $categoria = Categoria::find($request->id);

        if($categoria)
        {
            $categoria->codigo = $request->codigo;
            $categoria->descripcion = $request->descripcion;
            $categoria->save();

            $response->data = $categoria;
            $response->success=true;
        }
        
        else 
        {
            $response->success=false;
            $response->error=["la Categoria con el id ".$request->id. " no existe"];
        }
        
        
        return response()->json($response,($response->success?200:401));
    }

    function patchUpdate(Request $request)
    {
        $response = new \stdclass();
        $categoria = Categoria::find($request->id);

        if($categoria)
        {
            if($request->codigo)
            $categoria->codigo = $request->codigo;

            if($request->descripcion)
            $categoria->descripcion = $request->descripcion;

            $categoria->save();

            $response->data = $categoria;
            $response->success=true;
        }
        
        else 
        {
            $response->success=false;
            $response->error=["la Categoria con el id ".$request->id. " no existe"];
        }
        
        
        return response()->json($response,($response->success?200:401));
    }

    function delete($id)
    {
        $response = new \stdClass();
        $categoria = Categoria::find($id);

        if($categoria)
        {
            $categoria->delete();
            $response->success=true;
        }
        else
        {
            $response->success=false;
            $response->error=["la Categoria con el id ".$id." no existe"];
        }

        return response()->json($response,($response->success?200:401));
    }

}
