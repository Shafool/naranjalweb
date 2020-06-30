@extends('admin.plantilla')

@section('titulo') Panel de control - Crear Reserva
@endsection

@section('informacion')
<h1 class="my-2">Nueva Reserva</h1>
<p>En esta seccion puedes registrar las Reservas de tus Servicios</p>
@endsection

@section('contenido')
<h2 class="my-5">Crea una reserva</h2>

@if(session('mensaje'))
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
@endif

@error('nombre')<div class="alert alert-danger">El nombre es obligatorio</div> @enderror
@error('precio')<div class="alert alert-danger">El precio es obligatorio</div> @enderror
@error('categoria_id')<div class="alert alert-danger">Escojer una categoria es obligatorio</div> @enderror
@error('activacion')<div class="alert alert-danger">La activacion es obligatoria</div> @enderror

<div class="col">       
    <div class="seccion row py-3 px-3 mb-5">

        <!-- Cambiar el nombre de la categoria -->
        <form action="{{ route('adminProductoCrear') }}" method="POST" class="col" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group row">
                <input class="form-control mr-sm-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0">Buscar</button>

                <label class="col-2" for="nombre">Nombre</label>
                <input value="{{ old('nombre') }}" name="nombre" id="nombre" type="text" class="form-control col" placeholder="Escribe un nombre aqui">
            </div>
            <div class="form-group row">
                <label class="col-2" for="precio">Precio</label>
                <input value="{{ old('precio') }}" name="precio" id="precio" type="text" class="form-control col-2" placeholder="Aqui va el precio">
            </div>
            <div class="form-group row">
                <label class="col-2" for="categoria">Categoria</label>             
                <select name="categoria_id" id="categoria_id" class="form-control col-2">
                    @foreach($categorias as $c)
                    <option {{ ($c->id == $catSelecc) ? "selected" : "" }} value="{{ $c->id }}">{{ $c->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group row">
                <label class="col-2" for="descripcion">Descripcion</label>
                <textarea name="descripcion" id="descripcion" class="form-control col" rows="3">{{ old('descripcion') }}</textarea>
            </div>
            <div class="form-group row">
                <label class="col-2" for="foto">Foto</label>
                <div class="container col">                 
                    <div class="row">
                        <input value="{{ old('foto') }}" name="foto" id="foto" type="file" class="row">
                    </div>
                </div>
                
            </div>
            <fieldset class="form-group">
                <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Activacion del producto</legend>
                <div class="col-sm-10">

                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="activado" id="activado" value="1" checked>
                    <label class="form-check-label" for="gridRadios1">Activado</label>
                    </div>

                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="activado" id="activado" value="0">
                    <label class="form-check-label" for="gridRadios2">Desactivado</label>
                    </div>

                </div>
                </div>
            </fieldset>
            <button type="submit" class="btn btn-success px-4">Guardar Cambios</button>
        </form>
    </div>

</div>
@endsection
