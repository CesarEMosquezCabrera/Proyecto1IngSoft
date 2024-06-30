<x-app-layout>
{{-- @extends('layout.plantilla')

@section('titulo', 'crear')

@section('contenido') --}}

    <!-- component -->
<!-- Code on GiHub: https://github.com/vitalikda/form-floating-labels-tailwindcss -->
<style>
    .-z-1 {
      z-index: -1;
    }
  
    .origin-0 {
      transform-origin: 0%;
    }
  
    input:focus ~ label,
    input:not(:placeholder-shown) ~ label,
    textarea:focus ~ label,
    textarea:not(:placeholder-shown) ~ label,
    select:focus ~ label,
    select:not([value='']):valid ~ label {
      /* @apply transform; scale-75; -translate-y-6; */
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate))
        skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
      --tw-scale-x: 0.75;
      --tw-scale-y: 0.75;
      --tw-translate-y: -1.5rem;
    }
  
    input:focus ~ label,
    select:focus ~ label {
      /* @apply text-black; left-0; */
      --tw-text-opacity: 1;
      color: rgba(0, 0, 0, var(--tw-text-opacity));
      left: 0px;
    }
  </style>
  
  <div class="min-h-screen bg-gray-100 p-0 sm:p-12">
    <div class="mx-auto max-w-md px-6 py-12 bg-white border-0 shadow-lg sm:rounded-3xl">
      <h1 class="text-2xl font-bold mb-8">Inserte Nuevo Perfil</h1>
      <form id="form" action="{{route('profiles.store')}}" method="POST">
        @csrf

        <div class="relative z-0 w-full mb-5">
          <input type="text" name="nombre" placeholder=" " required class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"/>
          <label for="nombre" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Inserte cargo</label>
          {{-- <span class="text-sm text-red-600 hidden" id="error">El nombre es requerido</span> --}}
        </div>
  
        <div class="relative z-0 w-full mb-5">
          <input
            type="text"
            name="precio"
            placeholder=" "
            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          />
          <label for="precio" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Inserte biografia</label>
          {{-- <span class="text-sm text-red-600 hidden" id="error">El precio es requerido</span> --}}
        </div>

          <div class="relative z-0 w-full mb-5">
            <label class="absolute duration-300 top-3 -z-1 origin-0 text-black-500">Inserte ID de usuario
              <select name="categoria_id" class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200">
                {{-- <option value="">Categorias Tabla</option> --}}
                @foreach($categorias as $cat)
                  <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
              </select>
            </label>
            <br>
            <br>
            <br>
            <br>
            
          </div>
  
        {{-- <div class="relative z-0 w-full mb-5">
          <select
            name="select"
            value=""
            onclick="this.setAttribute('value', this.value);"
            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          >
            <option value="" selected disabled hidden></option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
            <option value="4">Option 4</option>
            <option value="5">Option 5</option>
          </select>
          <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Select an option</label>
          <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
        </div> --}}
  
        {{-- <div class="relative z-0 w-full mb-5">
          <input
            type="number"
            name="money"
            placeholder=" "
            class="pt-3 pb-2 pl-5 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          />
          <div class="absolute top-0 left-0 mt-3 ml-1 text-gray-400">$</div>
          <label for="money" class="absolute duration-300 top-3 left-5 -z-1 origin-0 text-gray-500">Amount</label>
          <span class="text-sm text-red-600 hidden" id="error">Amount is required</span>
        </div> --}}
  
        {{-- <button id="button" type="button" class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-pink-500 hover:bg-pink-600 hover:shadow-lg focus:outline-none">Insertar</button> --}}
        <button id="button" type="submit" class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-pink-500 hover:bg-pink-600 hover:shadow-lg focus:outline-none">Insertar</button>
      </form>
        <button type="button" class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-pink-500 hover:bg-pink-600 hover:shadow-lg focus:outline-none"><a href="{{route('profiles.principal')}}">Volver</a></button>
    </div>
  </div>
  
  <script>
    'use strict'
  
    document.getElementById('button').addEventListener('click', toggleError)
    const errMessages = document.querySelectorAll('#error')
  
    function toggleError() {
      // Show error message
      errMessages.forEach((el) => {
        el.classList.toggle('hidden')
      })
  
      // Highlight input and label with red
      const allBorders = document.querySelectorAll('.border-gray-200')
      const allTexts = document.querySelectorAll('.text-gray-500')
      allBorders.forEach((el) => {
        el.classList.toggle('border-red-600')
      })
      allTexts.forEach((el) => {
        el.classList.toggle('text-red-600')
      })
    }
  </script>



    {{-- <form action="{{route('producto.store')}}" method="POST">
        @csrf
        <label>
            nombre del producto:
            <br>
            <input type="text" name="nombre">
        </label>
        <br><label>
            precio:
            <br>
            <input type="text" name="precio">
        </label>
        <br>
        <br><label>
            descripcion:
            <br>
            <input type="text" name="descripcion">
        </label>
        <br>
        <br><label>
            categoria:
            <br>
            <input type="text" name="categoria">
        </label>

        <button type="submit"> Guardar</button>

    </form> --}}



{{-- @endsection --}}
  </x-app-layout>
