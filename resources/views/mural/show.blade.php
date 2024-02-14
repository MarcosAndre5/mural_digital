<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>MURAL DIGITAL</title>
    <style>
        .card {
            margin: 5px; /* Adicionando um pequeno espaço entre as bordas */
            height: calc(50vh - 10px); /* Definindo a altura dos cards */
        }
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: #063d73;
        }
        .full-height {
            height: 100%;
        }
        .card-body { text-align: center; }

    </style>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script>
        var player;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                playerVars: {
                    'listType': 'playlist',
                    'list': 'PLFrJDLhPtm1HDv0IU3yxpGqfOQlv7lzKS',
                    'autoplay': 1,
                    'loop': 1,
                    'enablejsapi': 1,
                    'controls': 0
                },
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        function onPlayerReady(event) {
            event.target.playVideo();
        }

        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.ENDED) {
                player.playVideoAt(0); // Retorna ao primeiro vídeo após o término
            }
        }
    </script>
</head>
<body class="bg-#063d73">
    <div class="container-fluid h-100">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Vídeo Institucional</h5>
                        <div id="player" style="width: 100%; height: 90%;"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Comunicado</h5>
                        <img src="{{ asset('img/comunicado.png') }}" width="50%" heigth="50%" class="img-thumbnail">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Panfleto</h5>
                        <img src="{{ asset('img/panfleto.png') }}" width="50%" heigth="50%" class="img-thumbnail">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Aniversariantes</h5>
                        <video width="100%" height="90%" autoplay muted loop>
                            <source src="{{ asset('img/aniversariantes.mp4') }}" type="video/mp4">
                            <source src="{{ asset('img/aniversariantes.ogg') }}" type="video/ogg">
                          Your browser does not support the video tag.
                          </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
