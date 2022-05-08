@extends('layouts.app')

@section('titulo')
    registrate en devstagram
@endsection


@section('contenido')
<div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-white p-6 rounded-md shadow-xl">
    <div class="max-w-md w-full space-y-8">
      <div>
        <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
        {{-- <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Sign in to your account</h2> --}}
        {{-- <p class="mt-2 text-center text-sm text-gray-600">
          Or
          <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> start your 14-day free trial </a>
        </p> --}}
      </div>
      <form class="mt-8 space-y-6" action="{{ route('register') }}" method="POST" novalidate>
        @csrf
        <div class="rounded-md shadow-sm -space-y-px">
          <div>
            <label for="name" class=" text-gray-500 m-2 block">Nombre</label>
            <input id="name" name="name" type="text"  class="appearance-none relative block w-full px-3 py-2 border placeholder-gray-500 text-gray-900  rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('name') border-red-500 @enderror " value="{{ old('name') }}" placeholder="Nombre">

            @error('name')
            <br>
              <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                  <span class="font-medium">Alerta!</span> {{$message}}
              </div>
            @enderror
          </div>

          <div>
            <label for="username" class=" text-gray-500 m-2 block">Username</label>
            <input id="username" name="username" type="text"   class="appearance-none relative block w-full px-3 py-2 border  placeholder-gray-500 text-gray-900  rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('username') border-red-500 @enderror" value="{{ old('username') }}" placeholder="Usuario">
            @error('username')
            <br>
              <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                  <span class="font-medium">Alerta!</span> {{$message}}
              </div>
            @enderror
          </div>
          <div>
            <label for="email" class=" text-gray-500 m-2 block">Email address</label>
            <input id="email" name="email" type="email" autocomplete="email"  class="appearance-none relative block w-full px-3 py-2 border placeholder-gray-500 text-gray-900  rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('email') border-red-500 @enderror" value="{{ old('email') }}" placeholder="Email de registro">

            @error('email')
            <br>
              <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                  <span class="font-medium">Alerta!</span> {{$message}}
              </div>
            @enderror
          </div>
          <div>
            <label for="password" class="text-gray-500 m-2 block">Password</label>
            <input id="password" name="password" type="password"  class="appearance-none relative block w-full px-3 py-2 border placeholder-gray-500 text-gray-900  rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('password') border-red-500 @enderror"  placeholder="Password de registro">
            @error('password')
            <br>
              <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                  <span class="font-medium">Alerta!</span> {{$message}}
              </div>
            @enderror
          </div>
          <div>
            <label for="password_confirmation" class="text-gray-500 m-2 block">Repetir password</label>
            <input id="password_confirmation" name="password_confirmation" type="password"  class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Confirmar password">
          </div>

        </div>
  
        <div>
            <input type="submit" value="Crear cuenta" class="group cursor-pointer transition-colors relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          
        </div>
      </form>
    </div>
  </div>
@endsection