@extends('layouts.admin')

@section('title', 'MURAL > Atualizar Mural')

@section('conteudo')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Atualizar Mural</h3>
			<hr>
			@if(count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			@if(session()->has('message'))
				<div class="alert alert-success">
					<ul><li>{{ session()->get('message') }}</li></ul>
				</div>
			@endif
			<p>
				<i class="fa fa-exclamation-circle" aria-hidden="true"></i>
				O campo de Link do Youtube aceitará URLs de playlists dentro de canais do YouTube. <a href="https://www.youtube.com/@funpecrn3529/playlists" target="_blank">Playlista do canal da FUNPEC <i class="fa fa-external-link" aria-hidden="true"></i></a>
			</p>
			<hr>
		</div>
	</div>
	{!! Form::open(array('url'=>'mural', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true')) !!}
		{{ Form::token() }}
		<div class="row">
			<div class="col-lg-5 col-sm-5 col-xs-12">
				<div class="form-group">
					<label>Link Vídeo do Youtube (Playlist dentro do Canal)</label>
					<input type="text" name="link" value="{{ $mural->link }}" class="form-control" placeholder="https://www.youtube.com/watch?..." required>
				</div>
			</div>
			<div class="col-lg-4 col-sm-4 col-xs-12">
				<div class="form-group">
					<label>Enviar um Vídeo / Vídeo Atual:</label> {{ $mural->video }}
					<input type="file" name="video" class="form-control" accept="video/*">
				</div>
			</div>
			<div class="col-lg-3 col-sm-3 col-xs-12">
				<div class="form-group">
					<label>Qual vídeo será renderizado:</label>
					<br>
					<input type="radio" name="rederizar_vidio" value="link" required 
					{{ $mural->renderizar == 'link' ? 'checked' : '' }}> Playlist Youtube
					<br>
					<input type="radio" name="rederizar_vidio" value="video" required
					{{ $mural->renderizar == 'video' ? 'checked' : '' }}> Vídeo Enviado
				</div>
			</div>
			<div class="col-lg-12 col-sm-12 col-xs-12">
				<div class="form-group">
					<label>Informativo 1</label>
					<textarea class="form-control" id="informativo1" name="informativo1" maxlength="300" rows="2" required>{{ $mural->informativo1 }}</textarea>
					<div id="contador-caracteres1">0 / 300 Caracteres</div>
				</div>
			</div>
			<div class="col-lg-12 col-sm-12 col-xs-12">
				<div class="form-group">
					<label>Informativo 2</label>
					<textarea class="form-control" id="informativo2" name="informativo2" maxlength="300" rows="2" required>{{ $mural->informativo2 }}</textarea>
					<div id="contador-caracteres2">0 / 300 Caracteres</div>
				</div>
			</div>
			<div class="col-lg-12 col-sm-12 col-xs-12">
				<div class="form-group">
					<label>Informativo 3</label>
					<textarea class="form-control" id="informativo3" name="informativo3" maxlength="300" rows="2" required>{{ $mural->informativo3 }}</textarea>
					<div id="contador-caracteres3">0 / 300 Caracteres</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="form-group">
			<button class="btn btn-primary" type="submit">
				<i class="fa fa-floppy-o" aria-hidden="true"></i>
				Salvar Postagem
			</button>
			<a class="btn btn-danger" href="{{ url('mural') }}" role="button">
				<i class="fa fa-ban" aria-hidden="true"></i>
				Cancelar
			</a>
		</div>
	{!! Form::close() !!}
@stop
