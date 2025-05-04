<?php

namespace App\Http\Controllers;

use App\Models\ONG;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ONGController extends Controller {
    public function store(Request $request) {
        $request['senha'] = Hash::make($request['senha']);
        $ong = ONG::create($request->all());
        session(['user_id' => $ong->id]);
        session(['username' => $ong->nome]);

        return redirect('/ong/' . $ong->id)->with('status', 'success')->with('message', 'ONG cadastrada com sucesso!');
    }

    public function show(string $id) {
        $ong = ONG::with('social_medias')->findOrFail($id);

        return view('ong-info', compact('ong'));
    }

    public function login(Request $request) {
        $usuario = ONG::where('email', $request['email'])->first();

        if ($usuario && Hash::check($request['senha'], $usuario->senha)) {
            session(['user_id' => $usuario->id]);
            session(['username' => $usuario->nome]);
            return redirect('/ong/' . $usuario->id)->with('status', 'success')->with('message', 'ONG cadastrada com sucesso!');
        } else {
            return redirect()->back()->with('status', 'error')->with('message', 'Email e/ou senha incorretos!');
        }
    }
}
