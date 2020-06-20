<?php


namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Some;

class SomeController extends Controller{

    public function getelem( $id, $name){
        $S = New Some($id, $name);
        return view('some', ['Obj'=>$S]);
    }
}
