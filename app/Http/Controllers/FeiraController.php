<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeiraController extends Controller
{
    //
    public function index(){

    	$frutas = array('maçã', 'pêra', 'uva', 'abacaxi');

    	$cereais = array('arroz','aveia', 'lentilha');

    	return view('feira',array('frutas' => $frutas));
    }
}
