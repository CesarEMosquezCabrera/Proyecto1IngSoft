{{-- @extends('layout.plantilla')

@section('titulo','mostrar')

@section('contenido') --}}

{{-- <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Los datos del producto son:</h1>
    </div>
</header>  --}}
<!-- component -->
<x-app-layout>
<div class="container size-11/12 m-auto">
  <div>
      <div class="px-4 sm:px-0">
        <h3 class="text-base font-semibold leading-7 text-gray-900">Este es el producto: {{$producto->id}}</h3>
        <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Detalles</p>
      </div>
      <div class="mt-6 border-t border-gray-100">
        <dl class="divide-y divide-gray-100">
          <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-sm font-medium leading-6 text-gray-900">Nombre</dt>
            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$producto->nombre}}</dd>
          </div>
          <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-sm font-medium leading-6 text-gray-900">Precio</dt>
            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$producto->precio}}</dd>
          </div>
          <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-sm font-medium leading-6 text-gray-900">Descripcion</dt>
            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$producto->descripcion}}</dd>
          </div>
          <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-sm font-medium leading-6 text-gray-900">Categoria</dt>
            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$producto->categoria}}</dd>
          </div>
          <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-sm font-medium leading-6 text-gray-900">Categoria de la tabla</dt>
            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$producto->categoria_id}} - {{$producto->nombre}}</dd>
          </div>
        </dl>
      </div>
  </div>
  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded"><a href="{{route('producto.principal')}}">Volver</a></button>
  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded"><a href="{{route('producto.editar',$producto->id)}}">Editar</a></button>
  </div>
  
  {{-- <h1>"El ID del producto es: " {{$producto->id}}</h1>
  <br>
  
  <p><strong>Nombre: </strong>{{$producto->nombre}}</p>
  <p><strong>Precio: </strong>{{$producto->precio}}</p>
  <p><strong>Descripcion </strong>{{$producto->descripcion}}</p>
  <p><strong>Categoria: </strong>{{$producto->categoria}}</p>
  
  <br> --}}
  

<div class="container m-auto size-11/12">


{{-- <div>

  <div class="">
    <dl class="">
      <div class="">
        <dt class="">ID:</dt>
        <dd class="">{{$producto->id}}</dd>
      </div>
      <div class="">
        <dt class="">Nombre:</dt>
        <dd class="">{{$producto->nombre}}</dd>
      </div>
      <div class="">
        <dt class="">Precio:</dt>
        <dd class="">{{$producto->precio}}</dd>
      </div>
      <div class="">
        <dt class="">Descripción:</dt>
        <dd class="">{{$producto->descripcion}}</dd>
      </div>
      <div class="">
        <dt class="">Categoria:</dt>
        <dd class="">{{$producto->categoria}} - {{$categoria->nombre}}</dd>
      </div>

    </dl>
  </div>
</div>


<br>
    <button class=""><a href="{{route('producto.principal') }}">Volver</a></button>  

<button class=""><a href="{{route('producto.editar', $producto)}}">Editar</a></button>  
 
<button class=""><a href="{{route('producto.crear') }}">Nuevo registro</a></button>

    <div class="container m-auto size-11/12">
 --}}

        
{{-- @endsection --}}
    </x-app-layout>