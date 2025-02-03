@extends('partials.header')
@section('titulo', 'Login')
@section('contenido')
<section id="main">
  <div class=" relative items-center w-full h-full flex justify-center flex-column px-5 py-12 mx-auto md:px-12 lg:px-20 max-w-7xl">
    <div class="w-full max-w-md mx-auto md:max-w-sm md:px-0 md:w-96 sm:px-4">
      <div class="flex flex-col">
        <div>
          <h2 class="text-4xl text-black">Login</h2>
          @if (isset($error))
            {{ $error }}
          @endif
        </div>
      </div>
      <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mt-4 space-y-6">
          <div class="col-span-full">
            <label class="block mb-3 text-sm font-medium text-gray-600"> Usuario   </label>
            <input type="text" placeholder="admin123" name="user" class="block w-full px-6 py-3 text-black bg-white border border-gray-200 rounded-full appearance-none placeholder:text-gray-400 focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm">
          </div>
          <div class="col-span-full">
            <label class="block mb-3 text-sm font-medium text-gray-600"> Confirm passord   </label>
            <input type="password" placeholder="******" name="password" class="block w-full px-6 py-3 text-black bg-white border border-gray-200 rounded-full appearance-none placeholder:text-gray-400 focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm">
          </div>

          <div class="col-span-full">
            <button type="submit" class="items-center justify-center w-full px-6 py-2.5 text-center text-white duration-200 bg-black border-2 border-black rounded-full nline-flex hover:bg-transparent hover:border-black hover:text-black focus:outline-none focus-visible:outline-black text-sm focus-visible:ring-black">Iniciar sesión</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection
