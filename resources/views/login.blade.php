@extends('partials.header')
@section('titulo', 'Login')
@section('contenido')
<section class="d-flex align-items-center justify-content-center bg-light" id="main">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="card shadow-sm p-4">
          <div class="card-body">
            <h2 class="text-center mb-4">Login</h2>
            @if (isset($error))
              <div class="alert alert-danger" role="alert">
                {{ $error }}
              </div>
            @endif
            <form action="{{ route('login') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="user" class="form-label">Usuario</label>
                <input type="text" id="user" name="user" class="form-control" placeholder="admin123" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="******" required>
              </div>
              <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection