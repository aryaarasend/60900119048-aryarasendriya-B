<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mid extends Controller
{
    public function create(){
        return view('create-inputan');
    }
    public function store(validasi $request)
    {
        $validated = $request->validated();
        return $validated;
    }
    //
}
