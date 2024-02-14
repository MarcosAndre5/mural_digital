@extends('layouts.admin')

@section('title', 'MURAL > Atualizar Mural')

@section('conteudo')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Adicionar Postagem</h3>
		</div>
	</div>

	{!! Form::open(array('url'=>'mural', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true')) !!}
		{{ Form::token() }}
		<div class="row">
			<div class="col-lg-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="nome">Link Playlist do Youtube</label>
					<input type="text" name="link" required value="{{ old('link') }}" class="form-control" placeholder="https://www.youtube.com/watch?..." required>
				</div>
			</div>

			<div class="col-lg-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label>Informativo</label>
					<input type="file" name="informativo" class="form-control" accept="image/*" required>
				</div>
			</div>
		
			<div class="col-lg-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label>Informativo 2</label>
					<input type="file" name="informativo2" class="form-control" accept="image/*" required>
				</div>
			</div>

			<div class="col-lg-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label>Aniversariantes</label>
					<input type="file" name="aniversariantes" class="form-control" accept="video/*" required>
				</div>
			</div>
		</div>
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
