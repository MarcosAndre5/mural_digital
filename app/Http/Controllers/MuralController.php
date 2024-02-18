<?php

namespace App\Http\Controllers;

use App\Mural;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class MuralController extends Controller {
    public function index() { return view('mural.index'); }

    public function create() {
        $mural = Mural::findOrFail(1);

        return view('mural.create', compact('mural'));
    }

    public function store(Request $request) {
        $mural = Mural::findOrFail(1);
        
        $mural->link = $request->get('link');
        $mural->renderizar = $request->get('renderizar');
        $mural->informativo1 = $request->get('informativo1');
        $mural->informativo2 = $request->get('informativo2');
        $mural->informativo3 = $request->get('informativo3');

        if($request->hasFile('video')) {
            unlink(public_path('img/video/'.$mural->video));
			$imagem = Input::file('video');
            $imagem->move(public_path('img/video/'), $imagem->getClientOriginalName());
            $mural->video = $imagem->getClientOriginalName();
		}
        $mural->update();

        return Redirect::back()->with('message', 'Mural Atualizado com Sucesso!');
    }

    public function show() {
        $mural = Mural::findOrFail(1);

        if($mural->link != '') {
            $link = $mural->link;
            preg_match('/list=([^\&]+)/', $link, $id_link);
            $mural->link = $id_link[1];
        }
        return view('mural.show', compact('mural'));
    }

    public function reportar() { return view('reporte'); }
}