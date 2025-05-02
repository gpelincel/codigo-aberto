<?php

namespace App\Http\Controllers;

use App\Models\ONG;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ONGController extends Controller
{
    public function store(Request $request) {
        $request['senha'] = Hash::make($request['senha']);
        
        $ong = ONG::create($request->all());

        return redirect('/')->with('status', 'success')->with('message', 'ONG cadastrada com sucesso!');
    }

    public function show(string $id) {
        $ong = ONG::with('social_medias')->findOrFail($id);

        return view('ong-info', compact('ong'));
    }
}
