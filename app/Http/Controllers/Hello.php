<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hello extends Controller
{
    //
    public function index(){
        return view('hello');
    }

    public function create(){

    }

    public function store(Request $request){

    }

    public function show($name){
        return view('hello', array('name'=>$name));
    }

    public function edit($id){

    }
    public function update(Request $request, $id){

    }

    public function destroy($id){

    }
}
