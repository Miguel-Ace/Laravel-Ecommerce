<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Codigo;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\TipoProducto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class ProductoController
 * @package App\Http\Controllers
 */
class ProductoController extends Controller
{

    function __construct()
    {
        return $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::paginate();

        return view('producto.index', compact('productos'));
            // ->with('i', (request()->input('page', 1) - 1) * $productos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = new Producto();

        // $marcas = Marca::pluck('marca','id');
        // $categorias = Categoria::pluck('categoria','id');
        // $tipo_productos = TipoProducto::pluck('tipo_producto','id');
        // $codigos = Codigo::pluck('codigo','id');
        $marcas = Marca::all();
        $categorias = Categoria::all();
        $tipo_productos = TipoProducto::all();
        $codigos = Codigo::all();
        return view('producto.create', compact('producto','marcas','categorias','tipo_productos','codigos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'imagen' => 'required',
            'imagen_dos' => 'required',
            'imagen_tres' => 'required',
            'imagen_cuatro' => 'required',
            'nombre' => 'required | max:255',
            'descripcion' => 'required | max:1000',
            'id_marca' => 'required',
            'id_categoria' => 'required',
            'id_tipo_producto' => 'required',
            'id_codigo' => 'required',
            'precio' => 'required | min:1',
            'stock' => 'required | in:Existencia,Agotado',
        ]);

        $datos = $request->except('_token');
        if ($request->hasFile('imagen')) {
            $datos['imagen'] = $request->file('imagen')->store('uploads','public');
        }
        if ($request->hasFile('imagen_dos')) {
            $datos['imagen_dos'] = $request->file('imagen_dos')->store('uploads','public');
        }
        if ($request->hasFile('imagen_tres')) {
            $datos['imagen_tres'] = $request->file('imagen_tres')->store('uploads','public');
        }
        if ($request->hasFile('imagen_cuatro')) {
            $datos['imagen_cuatro'] = $request->file('imagen_cuatro')->store('uploads','public');
        }
        Producto::insert($datos);

        // request()->validate(Producto::$rules);

        // $producto = Producto::create($request->all());

        return redirect()->route('productos.index')
            ->with('success', 'Producto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);

        return view('producto.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        // $marcas = Marca::pluck('marca','id');
        // $categorias = Categoria::pluck('categoria','id');
        // $tipo_productos = TipoProducto::pluck('tipo_producto','id');
        // $codigos = Codigo::pluck('codigo','id');

        $marcas = Marca::all();
        $categorias = Categoria::all();
        $tipo_productos = TipoProducto::all();
        $codigos = Codigo::all();
        return view('producto.edit', compact('producto','marcas','categorias','tipo_productos','codigos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'imagen' => 'required',
            'imagen_dos' => 'required',
            'imagen_tres' => 'required',
            'imagen_cuatro' => 'required',
            'nombre' => 'required | max:255',
            'descripcion' => 'required | max:1000',
            'id_marca' => 'required',
            'id_categoria' => 'required',
            'id_tipo_producto' => 'required',
            'id_codigo' => 'required',
            'precio' => 'required | min:1',
            'stock' => 'required | in:Existencia,Agotado',
        ]);
        
        $datos = $request->except('_token','_method');
        if ($request->hasFile('imagen')) {
            $dato = Producto::findOrFail($id);
            Storage::delete('public/'.$dato->imagen);
            $datos['imagen'] = $request->file('imagen')->store('uploads','public');
        }
        if ($request->hasFile('imagen_dos')) {
            $dato = Producto::findOrFail($id);
            Storage::delete('public/'.$dato->imagen_dos);
            $datos['imagen_dos'] = $request->file('imagen_dos')->store('uploads','public');
        }
        if ($request->hasFile('imagen_tres')) {
            $dato = Producto::findOrFail($id);
            Storage::delete('public/'.$dato->imagen_tres);
            $datos['imagen_tres'] = $request->file('imagen_tres')->store('uploads','public');
        }
        if ($request->hasFile('imagen_cuatro')) {
            $dato = Producto::findOrFail($id);
            Storage::delete('public/'.$dato->imagen_cuatro);
            $datos['imagen_cuatro'] = $request->file('imagen_cuatro')->store('uploads','public');
        }
        Producto::where('id','=',$id)->update($datos);
        return redirect('productos');
        // request()->validate(Producto::$rules);

        // $producto->update($request->all());

        // return redirect()->route('productos.index')
        //     ->with('success', 'Producto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $producto = Producto::find($id)->delete();

        return redirect()->route('productos.index')
            ->with('success', 'Producto deleted successfully');
    }
}
