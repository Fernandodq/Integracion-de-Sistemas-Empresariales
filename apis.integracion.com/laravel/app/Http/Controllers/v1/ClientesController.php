<?php
 
namespace App\Http\Controllers\v1;
 
use App\Http\Controllers\Controller;
use App\Models\Cliente;
 
class ClientesController extends Controller
{
   public function getAll()
   {
    return Cliente::all();
   }
}