<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FotosController extends Controller
{
    public function galeria() {
        return view('fotos');
    }

    public function mostrar($foto = null) {
        $parametros = compact('foto');
        return view('fotos', $parametros);
    }
}
