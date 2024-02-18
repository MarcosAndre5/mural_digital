<?php

namespace App\Http\Controllers;

use App\Mural;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class MuralController extends Controller {
    public function index() { return view('mural.index'); }

    public function create() {
        //$mural = Mural::findOrFail(1);
        
        $mural = new Mural;
        $mural->link = 'https://www.youtube.com/watch?v=vKw8LptzE54&list=PLFrJDLhPtm1HDv0IU3yxpGqfOQlv7lzKS&ab_channel=FUNPECRN';
        $mural->video = 'vid_zxeGMiLX.mp4';
        $mural->renderizar = 'link';
        $mural->informativo1 = 'Estamos no topo da montanha, não temos nada disso ao nosso dispor, o que fazemos?A inspiração é mais forte que nós e toma o controlo, assim como os 300 caracteres tomam o controlo deste texto, que andando às voltas, não sabe se quer chegar a algum lado.Retomamos o fôlego, a inspiração é um apelo fa.';
        $mural->informativo2 = 'Teste Funpec 2';
        $mural->informativo3 = 'Teste Funpec 3';

        return view('mural.create', compact('mural'));
    }

    public function store(Request $request) {
        //$mural = Mural::findOrFail(1);
        
        //$mural->link = $request->get('link');
        //$mural->informativo = $request->get('informativo');

        if($request->hasFile('video')) {
            unlink(public_path('img/video/'.$mural->video));
			$imagem = Input::file('video');
            $imagem->move(public_path('img/video/'), $imagem->getClientOriginalName());
            //$mural->video = $imagem->getClientOriginalName();
		}

        //$mural->update();

        return Redirect::back()->with('message', 'Mural Atualizado com Sucesso!');
    }

    public function show() {
        //$mural = Mural::findOrFail(1);

        $mural = new Mural;
        $mural->link = 'https://www.youtube.com/watch?v=vKw8LptzE54&list=PLFrJDLhPtm1HDv0IU3yxpGqfOQlv7lzKS&ab_channel=FUNPECRN';
        $mural->video = 'vid_zxeGMiLX.mp4';
        $mural->renderizar = 'link';
        $mural->informativo1 = 'Estamos no topo da montanha, não temos nada disso ao nosso dispor, o que fazemos?A inspiração é mais forte que nós e toma o controlo, assim como os 300 caracteres tomam o controlo deste texto, que andando às voltas, não sabe se quer chegar a algum lado.Retomamos o fôlego, a inspiração é um apelo fa.';
        $mural->informativo2 = 'Teste Funpec 2';
        $mural->informativo3 = 'Teste Funpec 3';

        if($mural->link != '') {
            $link = $mural->link;
            preg_match('/list=([^\&]+)/', $link, $id_link);
            $mural->link = $id_link[1];
        }
        return view('mural.show', compact('mural'));
    }

    public function reportar() { return view('reporte'); }
}
