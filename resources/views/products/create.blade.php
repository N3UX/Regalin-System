@extends('layouts.admin')

@section('title', 'Registrar Producto')
@section('content-header', 'Registrar Producto')

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                    placeholder="Ingresa el nombre" value="{{ old('name') }}">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                    id="description" placeholder="Ingresa una descripción">{{ old('description') }}</textarea>
                @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="Imagen">Imagen</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="image">
                    <label class="custom-file-label" for="image">Selecciona una imagen</label>
                </div>
                @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong></strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="barcode">Codigo de Barras</label>
                <input type="text" name="barcode" class="form-control @error('barcode') is-invalid @enderror"
                    id="barcode" placeholder="Ingresa el codigo de barras" value="{{ old('barcode') }}">
                @error('barcode')
                <span class="invalid-feedback" role="alert">
                    <strong></strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="price">Precio</label>
                <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="price"
                    placeholder="Ingresa el precio del producto" value="{{ old('price') }}">
                @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong></strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="quantity">Cantidad</label>
                <input type="text" name="quantity" class="form-control @error('quantity') is-invalid @enderror"
                    id="quantity" placeholder="Ingresa la cantidad disponible del producto" value="{{ old('quantity', 1) }}">
                @error('quantity')
                <span class="invalid-feedback" role="alert">
                    <strong></strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="status">Estado</label>
                <select name="status" class="form-control @error('status') is-invalid @enderror" id="status">
                    <option value="1" {{ old('status') === 1 ? 'selected' : ''}}>Activo</option>
                    <option value="0" {{ old('status') === 0 ? 'selected' : ''}}>Inactivo</option>
                </select>
                @error('status')
                <span class="invalid-feedback" role="alert">
                    <strong></strong>
                </span>
                @enderror
            </div>
                <p class="btn btn-primary" >Registrar Producto</p>

        </form>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script>
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>
@endsection