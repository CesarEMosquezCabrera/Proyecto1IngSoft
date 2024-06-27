<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class roleController extends Controller
{
    public function principal()
    {
        $producto = Role::withTrashed()->paginate(20);
        return view('roles.principal', ['prod' => $producto]);
    }
    public function mostrar($variable)
    {
        $producto=Role::find($variable);
        $cat_id=$producto->categoria_id;
        return view("roles.mostrar", compact('producto'));
    }
    public function editar(Role $producto){

        $cat_id=$producto->categoria_id;
        return view("roles.editar", compact('producto'));
        
    }
    public function update(Request $request, Role $producto)
    {
        $producto->nombre=$request->nombre;
        $producto->save();
        return redirect()->route('roles.mostrar', $producto->id);
    }
    public function crear()
    {
        return view('roles.crear');
    }
    public function store(Request $request)
    {
        $pro=new Role();
        $pro->nombre=$request->nombre;
        $pro->save();
        return redirect()->route('roles.mostrar', $pro->id);

    }
    public function borrar($id){
        $producto=Role::withTrashed()->find($id);
        $producto->forceDelete();
        return redirect()->route('roles.principal');
    }

    public function desactivaproducto($id){
        $producto=Role::find($id);
        $producto->delete();
        return redirect()->route('roles.principal');
    }

    
    public function activaproducto($id){
        $producto=Role::withTrashed()->find($id);
        $producto->restore($id);
        return redirect()->route('roles.principal');
    }
}
