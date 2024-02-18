<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Mural Digital</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="shortcut icon" href="{{ asset('img/icone.png') }}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/_all-skins.min.css') }}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
		<script src="{{ asset('js/conta_caracteres.js') }}"></script>
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<header class="main-header">
				<a href="{{ url('/') }}" class="logo">
					<span class="logo-mini"><b>MD</b></span>
					<span class="logo-lg"><b>MURAL DIGITAL</b></span>
				</a>
				<nav class="navbar navbar-static-top" role="navigation">
					<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
						<span class="sr-only">Navegação</span>
					</a>
				</nav>
			</header>
			<aside class="main-sidebar">
				<section class="sidebar">
					<ul class="sidebar-menu">
						<li class="header"></li>
						<li class="treeview">
							<a href="#">	
								<i class="fa fa-television" aria-hidden="true"></i>
								<span>MURAL DIGITAL</span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li>
									<a href="{{ url('mural/create') }}">
										<i class="fa fa-plus-square" aria-hidden="true"></i>
										Atualizar Mural
									</a>
								</li>
								<li>
									<a href="{{ url('mural/show') }}" target="_blank">
										<i class="fa fa-external-link" aria-hidden="true"></i>
										Abrir Mural
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="{{ url('reportar') }}">
								<i class="fa fa-exclamation-circle" aria-hidden="true"></i>
								<span>REPORTAR FALHA</span>
								<small class="label pull-right bg-yellow">
									&emsp;<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&emsp;
								</small>
							</a>
						</li>
					</ul>
				</section>
			</aside>
			<div class="content-wrapper">
				<section class="content">
					<div class="row">
						<div class="col-md-12">
							<div class="box">
								<div class="box-header with-border">
									<h3 class="box-title">@yield('title')</h3>
								</div>
								<div class="box-body">
									<div class="row">
										<div class="col-md-12">@yield('conteudo')</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		<footer class="main-footer">
			<div class="pull-right hidden-xs"><b>Versão</b> 1.0</div>
			<strong>
				Copyright &copy; {{ date('Y') }} |
				<a href="https://funpec.br/" target="_blank">FUNPEC - Fundação Norte-Rio-Grandense de Pesquisa e Cultura</a>.
			</strong>
			Todos os direitos reservados. |
			<a href="https://funpec.br/estrutura/" target="_blank">AsTI - Assessoria de Tecnologia da Informação.</a>
		</footer>
		<script src="{{ asset('js/jQuery-2.1.4.min.js') }}"></script>
		@stack('scripts')
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/app.min.js') }}"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
	</body>
</html>