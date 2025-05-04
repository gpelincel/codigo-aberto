<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller{
    public function store(Request $request) {
        $socialMedia = SocialMedia::create($request->all());

        return redirect('ong/'.$socialMedia->id_ong)->with('status', 'success')->with('message', 'Rede cadastrado com sucesso!');
    }
}