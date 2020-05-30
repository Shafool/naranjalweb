<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // Categorias
        DB::table('categorias')->insert([
            'nombre' => "Ceviches",
            'descripcion' => "Aquí encontrarás nuestra selección de los mejores ceviches",
            'activado' => TRUE,
        
        ]);
        DB::table('categorias')->insert([
            'nombre' => "Chicharrones",
            'descripcion' => "Aquí encontrarás nuestra carta de chicharrones",
            'activado' => TRUE,
        
        ]);

        // Productos
        DB::table('productos')->insert([
            'nombre' => "Ceviche de Pescado",
            'precio' => 20,
            'descripcion' => "Delicioso ceviche de pescado con algas y platanos fritos.",
            'categoria' => 1,
            'activado' => TRUE,
        
        ]);
        DB::table('productos')->insert([
            'nombre' => "Ceviche Mixto",
            'precio' => 22,
            'descripcion' => "Todos los sabores del mar.",
            'categoria' => 1,
            'activado' => TRUE,
        
        ]);
        DB::table('productos')->insert([
            'nombre' => "Ceviche de Doncella",
            'precio' => 22,
            'descripcion' => "Delicioso ceviche de Doncella con limón, ají limo y chifles",
            'categoria' => 1,
            'activado' => TRUE,
        
        ]);

        DB::table('productos')->insert([
            'nombre' => "Chicharrón de Doncella",
            'precio' => 20,
            'descripcion' => "Delicioso chicharrón de Doncella con arróz chaufa, chifles y mayonesa",
            'categoria' => 2,
            'activado' => TRUE,
        
        ]);
        DB::table('productos')->insert([
            'nombre' => "Chicharrón de Pescado",
            'precio' => 18,
            'descripcion' => "Delicioso chicharrón de Doncella con arróz chaufa, chifles y mayonesa",
            'categoria' => 2,
            'activado' => TRUE,
        
        ]);
        DB::table('productos')->insert([
            'nombre' => "Jalea Simple",
            'precio' => 22,
            'descripcion' => "Jalea simple.",
            'categoria' => 2,
            'activado' => TRUE,
        
        ]);
        DB::table('productos')->insert([
            'nombre' => "Chicharrón Mixto",
            'precio' => 22,
            'descripcion' => "Delicioso chicharrón de Doncella con arróz chaufa, chifles y mayonesa",
            'categoria' => 2,
            'activado' => TRUE,
        
        ]);

        /* Fotos de los productos */
        DB::table('foto_productos')->insert([
            'nombre' => "ceviche_doncella.jpeg",
            'orden' => 1,
            'producto' => 3,
        
        ]);
        DB::table('foto_productos')->insert([
            'nombre' => "chicharron_doncella.jpeg",
            'orden' => 1,
            'producto' => 4,
        
        ]);
    }
}
