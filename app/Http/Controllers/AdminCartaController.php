<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\FotoProducto;

class AdminCartaController extends Controller
{   
/* Mostrar Carta */
    public function mostrarPagina(){
        // Solicitamos a la BD todos los platos
        $categorias = Categoria::all();

        // Le pasamos todas la variables necesarias para que las pinte en pantalla
        return view('admin.productos.listar', compact('categorias'));
    } 

/* Productos */
    // Interfaces
    public function detalleProducto($id){
        $producto = Producto::findOrFail($id);
        $categorias = Categoria::all();

        return view('admin.productos.detalle', compact('producto', 'categorias'));
    }
    public function nuevoProducto($catSelecc = NULL){
        $categorias = Categoria::all();
        return view('admin.productos.nuevo', compact('catSelecc', 'categorias'));
    }

     // DB Operations
    public function crearProducto(Request $request){
        // Validar los datos
        $datosValidados = $this->validarProducto($request);

        // Crear
        $producto = new Producto;
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;
        $producto->categoria_id = $request->categoria_id;
        $producto->activado = $request->activado;
        $producto->save();

        // Si hay imagen
        if($request->file('foto')){
            // Datos del formulario
            $imagen = $request->foto;
            $imgNombre = time().'.'.$imagen->getClientOriginalName();

            // Nuevo objeto
            $foto = new FotoProducto;          
            $foto->nombre = $imgNombre;
            $foto->producto_id = $producto->id;
            $foto->orden = 1; // Para futuras implementaciones
            $foto->save();

            $ruta = $request->file('foto')->storeAs('/imagenes/sitio/productos/', $imgNombre, 'public');  
        }
        

        return back()->with('mensaje', $producto->nombre.' registrado exitosamente!');
    }
    public function actualizarProducto($id, Request $request){   
        // Validar los datos
        $datosValidados = $this->validarProducto($request);

        // Actualizar
        $producto = Producto::findOrFail($id);
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;
        $producto->categoria_id = $request->categoria_id;
        $producto->activado = $request->activado;
        $producto->save();

        // Si se pide borrar la foto
        if(isset($request->borrarFoto) && isset($request->idFoto)){
            if($request->borrarFoto){ // Si es igual a 1
                $foto = FotoProducto::findOrFail($request->idFoto);
                
                // Se borra del almacenamiento
                Storage::delete('/imagenes/sitio/productos/'.$foto->nombre);

                // Se borra de la bd
                $foto->delete();  
            }
        }

        // Si se pide actualizar la foto
         if($request->file('foto')){
            // Datos del formulario
            $imagen = $request->foto;
            $imgNombre = time().'.'.$imagen->getClientOriginalName();

            // Nuevo objeto
            $foto = new FotoProducto;          
            $foto->nombre = $imgNombre;
            $foto->producto_id = $producto->id;
            $foto->orden = 1; // Para futuras implementaciones
            $foto->save();

            $ruta = $request->file('foto')->storeAs('/imagenes/sitio/productos/', $imgNombre, 'public');  
        }

        return back()->with('mensaje', $producto->nombre.' registrado exitosamente!');        
    }
    public function eliminarProducto($id){
        $producto = Producto::findOrFail($id);
        $fotos = $producto->fotos();
        $producto->delete();

        return back()->with('mensaje', $producto->nombre.' eliminado');
    }

    // Operaciones del almacenamiento de Laravel
    public function borrarFoto($path){

    }
    public function subirFoto(){

    }
    
    public function validarProducto(Request $request){
        $datosValidados = $request->validate([
            'nombre' => 'required',
            'precio' => 'required|max:999999.99',
            'descripcion' => 'required',
            'categoria_id' => 'required',
            'activado' => 'required|bool'
        ]);
        
        // Si se adjunta una foto
        if($request->hasFile('image')){
            $request->validate([
                'foto' => 'file|image|max:5000' // Máximo 5Mb
            ]);
        }
        return $datosValidados;
    }
    
/* Categorias */
    public function crearCategoria(Request $request){
        return $request->all();
    }

    public function actualizarCategoria(Request $request){
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|max:999999.99',
            'descripcion' => 'required',
            'categoria_id' => 'required',
            'activado' => 'required|bool'
        ]);
    }

    public function eliminarCategoria($id){
        $categoria = Categoria::findOrFail($id);
        $productos = $categoria->productos();

        // Eliminacion del producto y sus fotos
        $categoria->delete();

        return back()->with('mensaje', 'Categoría "'.$categoria->nombre.'" eliminada');
    }



}
