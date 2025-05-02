<?php

namespace App\Http\Controllers;

use App\Models\ONG;
use Illuminate\Http\Request;

class ONGController extends Controller
{
    public function store(Request $request) {
        $ong = ONG::create($request->all());

        return redirect('/')->with('status', 'success')->with('message', 'ONG cadastrada com sucesso!');
    }

    public function show(string $id) {
        $ong = ONG::with('social_medias')->findOrFail($id);

        return view('ong-info', compact('ong'));
    }
}
