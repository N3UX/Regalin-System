@extends('layouts.auth')

@section('title', 'Punto de Venta - Regalin')
@section('css')

<style>
    .invalid-feedback {
        display: block
    }
</style>
@endsection

@section('content')
<body style="background-color: #F2F2F2" >
<div align="center"><img src="{{ asset('images/png.png') }}"  class=""  width="100" height="100" alt="Regalin">
</div><br>
<p class=" text-center" >Ingresa tus Credenciales</p>

<form action="{{ route('login') }}" method="post">
    @csrf
        
    <div class="form-group">

    <div class="input-group ">
        <span class="input-group-text" id="basic-addon1">@</span>
            <input type="email" name="email" aria-label="Username" aria-describedby="basic-addon1" class="form-control @error('email') is-invalid @enderror"
                placeholder="Ingresa tu Correo" value="{{ old('email') }}" required autocomplete="email" autofocus>
        </div>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>

        <div class="input-group ">
        <span class="input-group-text" id="basic-addon1">🔒︎</span>
            <input type="password" aria-label="Username" aria-describedby="basic-addon1" class="form-control @error('password') is-invalid @enderror" placeholder="Ingresa tu Contraseña"
                name="password" required autocomplete="current-password">
        </div>
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <br>

        <div class="row">
        <!-- /.col -->
        <div class="col-4">
            <button type="submit" class="btn btn-outline-white  btn-block" style="background-color: #77468C">Iniciar</button>
        </div>
        <!-- /.col -->
        </div>

    </div>

</form>
</body>
@endsection