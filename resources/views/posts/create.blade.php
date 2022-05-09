@extends('layouts.app')

@section('titulo')
    Crea nueva publicacion
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" /> 
@endpush


@section('contenido')

    <div class=" md:flex md:items-center">
        <div class=" md:w-1/2 px-10">
            <form id="dropzone" class=" dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center" action="{{ route('imagenes.store')}}" method="POST" >
                @csrf
            </form>
         </div>
        <div class=" md:w-1/2 px-10 bg-white p-6 rounded-lg shadow-xl mt-10 md:mt-0">

            <form class="mt-8 space-y-6" action="{{ Route('posts.store') }}" method="POST" enctype="multipart/form-data" novalidate>
                @csrf
                <div class=" mb-5">
                    <div class="rounded-md shadow-sm -space-y-px">
                        <div>
                          <label for="titulo" class=" text-gray-500 m-2 block">Titulo</label>
                          <input id="titulo" name="titulo" type="text"  class="appearance-none relative block w-full px-3 py-2 border placeholder-gray-500 text-gray-900  rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('titulo') border-red-500 @enderror "  placeholder="Titulo de la publicacion">
              
                          @error('titulo')
                          <br>
                            <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                                <span class="font-medium">Alerta!</span> {{$message}}
                            </div>
                          @enderror      
              </div>
                </div>

         <div class=" mb-5">

                <div class="rounded-md shadow-sm -space-y-px">
                  <div>
                    <label for="descripcion" class=" text-gray-500 m-2 block">Descripcion</label>
                    <textarea id="descripcion" name="descripcion" type="text"  class=" border p-3 w-full placeholder-gray-500 text-gray-900  rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('descripcion') border-red-500 @enderror "  placeholder="Titulo de la publicacion" >{{ old('descripcion') }}</textarea>
        
                    @error('descripcion')
                    <br>
                      <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                          <span class="font-medium">Alerta!</span> {{$message}}
                      </div>
                    @enderror   
                </div>

                <div>
                    <div class="mb-5">
                        <input type="hidden" name="imagen" value="{{ old('imagen') }}">
                        @error('imagen')
                        <br>
                          <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                              <span class="font-medium">Alerta!</span> {{$message}}
                          </div>
                        @enderror  
                    </div>
                    <br>
                    <input type="submit" value="Publicar" class="cursor-pointer transition-colors relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  
                </div>
                    
                </form>
        </div>
    </div>    
@endsection