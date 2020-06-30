<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Reserva;

class AdminReservasController extends Controller
{
    //
    public function nuevaReserva($clienteSelecc = NULL){
        $clientes = Cliente::all();
        return view('admin.reservas.nuevo', compact('clienteSelecc', 'clientes'));
    }
}
