<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoJtKh7z7lGz7fuP4F8nfdFvAOA6Gg/z6Y5J6XqqyGXYM2ntX5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Mural Digital</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <script src="{{ asset('js/funcoes.js') }}"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script>
        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                playerVars: {
                    'listType': 'playlist', 'list': '{{ $mural->link }}', 'autoplay': 1,
                    'loop': 1, 'enablejsapi': 1, 'controls': 0
                },
                events: { 'onReady': onPlayerReady, 'onStateChange': onPlayerStateChange }
            });
        }
    </script>
</head>
<body>
    <div class="container-fluid">
        @if($mural->renderizar == 'link')
            <div class="row">
                <div class="col">
                    <div class="card-container">
                        <div class="card news-card">
                            <div class="card-body">
                                <h3 class="card-title">Vídeo Institucional</h3>
                                <div id="player" class="img-thumbnail"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col">
                    <div class="card-container">
                        <div class="card news-card">
                            <div class="card-body">
                                <h3 class="card-title">Vídeo Interno</h3>
                                <video class="img-thumbnail" autoplay loop>
                                    <source src="{{ asset('img/video/'.$mural->video) }}" type="video/mp4">
                                    <source src="{{ asset('img/video/'.$mural->video) }}" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col">
                <div class="card-container">
                    <div class="card shorts-card">
                        <div class="card-body">
                            <h3 class="card-title">Comunicados</h3>
                            <hr>
                            <div class="container-fluid">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="25000">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active"><p class="card-text">{{ $mural->informativo1 }}</p></div>
                                        <div class="carousel-item"><p class="card-text">{{ $mural->informativo2 }}</p></div>
                                        <div class="carousel-item"><p class="card-text">{{ $mural->informativo3 }}</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card-container">
                    <div class="card logo-card">
                        <div class="card-body">
                            <h3 class="card-title">
                                <div class="clock"><div class="time" id="time">00:00:00</div></div>
                            </h3>
                            <img src="{{ asset('img/funpec.jpg') }}" class="rounded float-right">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>