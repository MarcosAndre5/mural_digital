<!DOCTYPE html>
<html>
	<head>
		<title>MURAL DIGITAL</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="shortcut icon" href="{{asset('img/logo.ico')}}">
		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
		<link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
		<link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<header class="main-header">
				<a href="{{ url('mural') }}" class="logo">
					<span class="logo-mini">
						<b>MD</b>
					</span>
					<span class="logo-lg">
						<b>MURAL DIGITAL</b>
					</span>
				</a>
				<nav class="navbar navbar-static-top" role="navigation">
					<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
						<span class="sr-only">
							Navegação
						</span>
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
								<span>MURAL</span>
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
							<a href="/">
								<i class="fa fa-file-pdf-o"></i>
								<span>
									Ajuda
								</span>
								<small class="label pull-right bg-red">
									PDF
								</small>
							</a>
						</li>
						<li>
							<a href="/">
								<i class="fa fa-info-circle"></i>
								<span>
									Sobre...
								</span>
								<small class="label pull-right bg-yellow">
									SISTEMA
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
									<h3 class="box-title">
										<!-- Sistema Gerenciador de Vendas > --> 
										@yield('title')
									</h3>
									<div class="box-tools pull-right">
										<button class="btn btn-box-tool" data-widget="collapse">
											<i class="fa fa-minus"></i>
										</button>
										<button class="btn btn-box-tool" data-widget="remove">
											<i class="fa fa-times"></i>
										</button>
									</div>
								</div>
								<div class="box-body">
									<div class="row">
										<div class="col-md-12">
											@yield('conteudo')
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Versão</b> 0.0.1
			</div>
			<strong>
				Copyright &copy; 2021 - 2022 <a href="">Marcos André</a>.
			</strong>
			Todos os direitos reservados.
		</footer>
		<script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
		@stack('scripts')
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="{{asset('js/app.min.js')}}"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
	</body>
</html>
