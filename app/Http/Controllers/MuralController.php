<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class MuralController extends Controller {
    public function index() {
        return view('mural.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('mural.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        dd($request->all());
        if(Input::hasFile('informativo')){
			$imagem = Input::file('informativo');
			$imagem->move(public_path('img/'), $imagem->getClientOriginalName());
			$mural->informativo = $imagem->getClientOriginalName();
		}

        if(Input::hasFile('informativo2')){
			$imagem = Input::file('informativo2');
			$imagem->move(public_path('img/'), $imagem->getClientOriginalName());
			$mural->informativo = $imagem->getClientOriginalName();
		}

        if(Input::hasFile('aniversariantes')){
			$imagem = Input::file('aniversariantes');
			$imagem->move(public_path('img/'), $imagem->getClientOriginalName());
			$mural->informativo = $imagem->getClientOriginalName();
		}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show() {
        return view('mural.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
