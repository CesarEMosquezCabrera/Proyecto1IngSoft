<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class categoriaController extends Controller
{
    public function principal()
    {
        $producto = Categoria::withTrashed()->paginate(20);
        return view('categorias.principal', ['prod' => $producto]);
    }
    public function mostrar($variable)
    {
        $producto=Categoria::find($variable);
        $cat_id=$producto->categoria_id;
        return view("categorias.mostrar", compact('producto'));
    }
    public function editar(Categoria $producto){
        return view("categorias.editar", compact('producto'));
    }
    public function update(Request $request, Categoria $producto)
    {
        $producto->nombre=$request->nombre;
        $producto->save();
        return redirect()->route('categorias.mostrar', $producto->id);
    }
    public function crear()
    {
        return view('categorias.crear');
    }
    public function store(Request $request)
    {
        $pro=new Categoria();
        $pro->nombre=$request->nombre;
        $pro->save();
        return redirect()->route('categorias.mostrar', $pro->id);

    }
    public function borrar($id){
        $producto=Categoria::withTrashed()->find($id);
        $producto->forceDelete();
        return redirect()->route('categorias.principal');
    }

    public function desactivacategoria($id){
        $producto=Categoria::find($id);
        $producto->delete();
        return redirect()->route('categorias.principal');
    }

    
    public function activacategoria($id){
        $producto=Categoria::withTrashed()->find($id);
        $producto->restore($id);
        return redirect()->route('categorias.principal');
    }
}
