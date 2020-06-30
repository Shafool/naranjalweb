@extends('admin.plantilla')

@section('titulo') Panel de control - Carta
@endsection

@section('informacion')
<h1 class="my-2">Carta</h1>
<p>En esta seccion puedes ver, editar, eliminar o desactivar los productos disponibles</p>
@endsection

@section('contenido')
    <h2 class="my-5">Listado de Categorías</h2>
    @if(session('mensaje'))
        <div class="alert alert-success">
            {{ session('mensaje') }}
        </div>
    @endif

        <!-- Para cada categoria -->
        @foreach($categorias as $c)        
        <div class="seccion row pb-3 px-3 mb-5">

            <!-- Cambiar el nombre de la categoria -->
            <div class="container">
            <form action="{{ route('adminCategoriaActualizar', $c) }}" class="container row" method="POST">
                @csrf
                <input name="id" type="text" value="{{ $c }}" hidden>
                <div class="col-6 mb-3">
                    <div class="row">
                        <input type="text" class="col subsubtitulo form-control my-3 py-0" value="{{ $c->nombre }}"></input>
                    </div>
                    <div class="row">
                        <textarea id="descripcion" class="form-control col" rows="3">{{ $c->descripcion }}</textarea>
                    </div>
                </div>
                <div class="col-3 mb-3">
                    <div class="row mt-3 ml-3">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="activado" id="gridRadios1" value="1" {{ ($c->activado == 1) ? "checked" : "" }}>
                        <label class="form-check-label" for="gridRadios1">Activado</label>
                        </div>

                        <div class="form-check ml-2">
                        <input class="form-check-input" type="radio" name="activado" id="gridRadios2" value="0" {{ ($c->activado == 0) ? "checked" : "" }}>
                        <label class="form-check-label" for="gridRadios2">Desactivado</label>
                        </div>
                    </div>
                    <div class="row ml-2">
                        <button type="submit" class="btn btn-outline-success my-3">Guardar Cambios</button>
                    </div>
                    </form>
                    <div class="row ml-2">
                        <form id="eliminarCategoria{{ $c->id }}" action="{{ route('adminCategoriaEliminar', $c) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div onclick="alertaEliminarCategoria({{ $c->id }}, '{{ $c->nombre }}')" class="btn btn-outline-danger my-3">Eliminar Categoría</div>
                        </form>
                    </div>
                </div>
            
            </div>
            

            <!-- Listado de productos de la categoria -->
            @if(sizeof($c->productos) > 0)
            <div class="table-responsive mx-4">
            <table class="table table-sm table-striped">
                <thead>
                    <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Activacion</th>
                    <th scope="col" colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($c->productos as $p)
                    <tr>
                    <th scope="row">{{ $p->id }}</th>
                    <td>{{ $p->nombre }}</td>
                    <td>{{ $p->precio }}</td>
                    <td>
                        @if($p->activado === 0) Desactivado
                        @else Activado
                        @endif
                    </td>
                    <td colspan="2">
                        <a href="{{ route('adminProductoDetalle', $p->id) }}" type="button" class="btn btn-warning">Editar</a>
                        <form action="{{ route('adminProductoEliminar', $p) }}" id="eliminarProducto{{ $p->id }}"  method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <div onclick="alertaEliminarProducto({{ $p->id }}, '{{ $p->nombre }}')" class="btn btn-danger">Eliminar</div>
                        </form>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
                <div class="container d-flex justify-content-center alert alert-info">
                    <p>Esta categoría se ve muy vacía, Agrega nuevos productos</p>
                </div>
            @endif

            <div id="botoneraAbajo" class="container d-flex justify-content-center">
                <a href="{{ route('adminProductoNuevo', $c->id) }}" class="btn btn-primary">Agregar un producto</a>
            </div>
            </div>
        </div>
        @endforeach

        <button class="btn btn-primary">Agregar una Categoria</button>
@endsection

@section('scripts')
<script>
    var mensaje;

    function alertaEliminarProducto(id, nombre_prod) {
        var mensaje = "Está a punto de eliminar: ".concat(nombre_prod, " con ID ", id, "\nEsta operación es irreversible y eliminará las fotos tambien, ¿Desea continuar?");
        var confirmacion = confirm(mensaje);
        if (confirmacion == true) {
            document.forms["eliminarProducto" + id].submit();
        }
    }

    function alertaEliminarCategoria(id, nombre_cat) {
        var mensaje = 'Está a punto de eliminar la categoría "'.concat(nombre_cat, '" con ID ', id, '\nEsta operación es irreversible y eliminará los productos y sus tambien, ¿Desea continuar?');
        var confirmacion = confirm(mensaje);
        if (confirmacion == true) {
            document.forms["eliminarCategoria" + id].submit();
        }
    }
</script>
@endsection
