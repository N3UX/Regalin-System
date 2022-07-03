@extends('layouts.admin')

@section('title', 'Configuraciones del Sistema')
@section('content-header', 'Configuraciones del Sistema')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('settings.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="app_name">Nombre de tu empresa:</label>
                    <input type="text" name="app_name" class="form-control @error('app_name') is-invalid @enderror" id="app_name"
                           placeholder="Ingresa un nombre" value="{{ old('app_name', config('settings.app_name')) }}">
                    @error('app_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <p ype="submit" class="btn btn-danger">Actualizar nombre</p>
               <!-- <button type="submit" class="btn btn-primary">Change Setting</button> -->
            </form>
        </div>
    </div>
@endsection
