@extends('layouts.admin')

@section('title', 'MURAL > Atualizar Mural')

@section('conteudo')
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			var textarea = document.getElementById('informativo');
			var contador = document.getElementById('contador-caracteres');

			textarea.addEventListener('input', function () {
				var comprimento = textarea.value.length;
				contador.textContent = comprimento + ' / 300 Caracteres';
			});
		});
	</script>
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
			<div class="col-lg-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="nome">Link Vídeo do Youtube (Playlist dentro do Canal)</label>
					<input type="text" name="link" value="{{ $mural->link }}" class="form-control" placeholder="https://www.youtube.com/watch?...">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label>Upload de Vídeo / Vídeo Atual:</label> {{ $mural->video }}
					<input type="file" name="video" class="form-control" accept="video/*">
				</div>
			</div>
			<div class="col-lg-12 col-sm-12 col-xs-12">
				<div class="form-group">
					<label>Informativo</label>
					<textarea class="form-control" id="informativo" name="informativo" maxlength="300" rows="3">{{ $mural->informativo }}</textarea>
					<div id="contador-caracteres">0 / 300 Caracteres</div>
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
