<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $title = 'Gestão de inquilinos';
        return view('home', ['title' => $title]);
    }

    public function cadinquilino(){
        $title = 'Cadastro de inquilinos';
        return view('/inquilinos', ['title' => $title]);
    }

    public function listinquilino(){
        $title = 'Listagem de inquilinos';
        return view('inquilinoslist', ['title' => $title]);
    }

    public function cadunidades(){
        $title = 'Cadastro habitacional';
        return view('unidade', ['title' => $title]);
    }

    public function listunidades(){
        $title = 'Listagem de unidades';
        return view('unidadeslist', ['title' => $title]);
    }




}
