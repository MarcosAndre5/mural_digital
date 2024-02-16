<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>MURAL DIGITAL</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <script src="{{ asset('js/funcoes.js') }}"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script>
        var player;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                playerVars: { 'listType': 'playlist', 'list': '{{ $mural->link }}', 'autoplay': 1, 'loop': 1, 'enablejsapi': 1, 'controls': 0 },
                events: { 'onReady': onPlayerReady, 'onStateChange': onPlayerStateChange }
            });
        }
        function onPlayerReady(event) { event.target.playVideo(); }
        function onPlayerStateChange(event) { if(event.data == YT.PlayerState.ENDED) player.playVideoAt(0); }
    </script>
</head>
<body>
    <div class="container-fluid">
        @if($mural->link != '')
            <div class="row">
                <div class="col">
                    <div class="card-container">
                        <div class="card news-card">
                            <div class="card-body">
                                <h5 class="card-title">Vídeo Institucional</h5>
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
                                <h5 class="card-title">Vídeo Interno</h5>
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
                            <h5 class="card-title">
                                Comunicados
                                <div class="clock">
                                    <div class="time" id="time">12:00:00</div>
                                </div>
                            </h5>
                            <p class="card-text">
                                <img id="logo" src="{{ asset('img/marca.jpg') }}" style="float: right;">
                                {{ $mural->informativo }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
