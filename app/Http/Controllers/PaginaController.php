<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function principal(){
        $productos = Producto::all();
        return view('index', compact('productos'));
    }
}
