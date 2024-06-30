<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Categoria;
use App\Models\User;

class profileController extends Controller
{
    //
    public function principal()
    {
        $producto = Profile::withTrashed()->paginate(20);
        return view('profiles.principal', ['prod' => $producto]);
    }

    public function crear()
    {
        $categorias=User::all();
        return view('profiles.crear', compact('categorias'));
    }

    public function mostrar($variable)
    {
        $producto=Profile::find($variable);

        $cat_id=$producto->user_id;

        $categoria=User::find($cat_id);
        


        // return view('profiles.mostrar', ['prod'=>$variable]);
        return view("profiles.mostrar", compact('producto','categoria'));
    }

    public function store(Request $request)
    {
        $pro=new Profile();
        $pro->cargo=$request->nombre;
        $pro->biografia=$request->precio;
        $pro->user_id=$request->categoria_id;


        // return $request->all();
        $pro->save();

        // return redirect()->route('producto.principal');
        return redirect()->route('producto.mostrar', $pro->id);

    }

    public function editar(Profile $producto){

        $cat_id=$producto->categoria_id;
        $categoria_actual=User::find($cat_id);
        $categorias=User::all();
        return view("profiles.editar", compact('producto','categoria_actual'));
        
    }

    public function update(Request $request, Profile $producto)
    {
        $producto->nombre=$request->nombre;
        $producto->precio=$request->precio;
        $producto->descripcion=$request->descripcion;
        $producto->categoria=$request->categoria;
        $producto->categoria_id=$request->categoria_id;


        // return $request->all();
        $producto->save();

        return redirect()->route('producto.mostrar', $producto->id);

    }

    public function borrar($id){
        $producto=Profile::withTrashed()->find($id);
        $producto->forceDelete();

        return redirect()->route('producto.principal');
    }

    public function desactivaprofiles($id){
        $producto=Profile::find($id);
        $producto->delete();

        return redirect()->route('producto.principal');
    }

    
    public function activaprofiles($id){
        $producto=Profile::withTrashed()->find($id);
        $producto->restore($id);

        return redirect()->route('producto.principal');
    }
}
