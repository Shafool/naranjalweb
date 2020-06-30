@extends('admin.plantilla')

@section('titulo') Panel de control - Editar Producto
@endsection

@section('informacion')
<h1 class="my-2">Editar Producto</h1>
<p>En esta seccion puedes editar el producto seleccionado</p>
@endsection

@section('contenido')
<h2 class="my-5">{{ $producto->nombre }}</h2>
        
<div class="col">       
    <div class="seccion row py-3 px-3 mb-5">

        <!-- Cambiar el nombre de la categoria -->
        <form action="{{ route('adminProductoActualizar', $producto->id) }}" method="POST" class="col" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input name="id" type="text" hidden value="{{ $producto->id }}"/>
            <div class="form-group row">
                <label class="col-2" for="nombre">Nombre</label>
                <input name="nombre" value="{{ $producto->nombre }}" id="nombre" type="text" class="form-control col" placeholder="Escribe un nombre aqui">
            </div>
            <div class="form-group row">
                <label class="col-2" for="precio">Precio</label>
                <input name="precio"value="{{ $producto->precio }}" id="precio" type="text" class="form-control col-2" placeholder="Aqui va el precio">
            </div>
            <div class="form-group row">
                <label class="col-2" for="categoria">Categoria</label>             
                <select name="categoria_id" id="categoria_id" class="form-control col-2">
                    @foreach($categorias as $c)
                    <option {{ ($c == $producto->categoria) ? "selected" : "" }} value="{{ $c->id }}">{{ $c->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group row">
                <label class="col-2" for="descripcion">Descripcion</label>
                <textarea name="descripcion" id="descripcion" class="form-control col" rows="3">{{ $producto->descripcion }}</textarea>
            </div>
            <div class="form-group row">
                <label class="col-2" for="fotoNueva">Foto</label>
                <div class="col">
                    @foreach($producto->fotos as $f)
                    <input id="borrarFoto{{ $f->id }}" name="borrarFoto" type="text" value="0" hidden>
                    <input name="idFoto" type="text" value="{{ $f->id }}" hidden>
                    <div class="row mb-3 fotoProducto" id="foto{{ $f->id }}">
                        <div onclick="eliminarFoto({{ $f->id }})" class="btnEliminarFoto burbuja alert-danger p-1 px-2">Eliminar Foto</div>
                        <img src="{{ asset('storage/imagenes/sitio/productos/' . $f->nombre) }}" alt="$f->nombre" height="160px">
                    </div>
                    @endforeach
                    <input name="fotoNueva" id="fotoNueva" type="file" class="row">
                </div>
                
            </div>
            <fieldset class="form-group">
                <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Activacion del producto</legend>
                <div class="col-sm-10">

                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="activado" id="gridRadios1" value="1" {{ ($producto->activado == 1) ? "checked" : "" }}>
                    <label class="form-check-label" for="gridRadios1">Activado</label>
                    </div>

                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="activado" id="gridRadios2" value="0" {{ ($producto->activado == 0) ? "checked" : "" }}>
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

@section('scripts')
<script>
    const delButtons = document.getElementsByClassName('btnEliminarFoto');
    const fotos = document.getElementsByClassName('fotoProducto');
    var fotoContainer;

    function eliminarFoto(fotoId){
        // Elminamos el thumbnail
        fotoContainer = document.getElementById("foto" + fotoId);
        fotoContainer.style.display = "none";

        // Preparamos el campo que eliminará la foto en la BD
        borrarFotoInput = document.getElementById("borrarFoto" + fotoId);
        borrarFotoInput.value = 1;
        console.log(borrarFotoInput.value)
    }

</script>
@endsection

