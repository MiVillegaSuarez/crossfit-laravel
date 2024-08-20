<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller {
    //Ruta a funciones
    public function testRoutes() {
        return 'Hola test de rutas';
    }

    public function testParametro($id) {
        return 'Hola parametro ' . $id;
    }

    public function testViewParametro() {
        return view('test')
        ->with('saludo', 'Hola desde el controlador');
    }

    public function testViewFolder() {
        return view('testfolder.testfolder1')
        ->with('saludo', ['Hola 1', 'Hola 2', 'Hola 3']);
    }
}
