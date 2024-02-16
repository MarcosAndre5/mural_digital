@extends('layouts.admin')

@section('title', 'Reporte de Falhas')

@section('conteudo')
	<h4>Reportar Falha</h4>
    <p>Para relatar uma falha, por favor, envie um e-mail para algum dos seguintes endereços:</p>
    <ul>
        <li><b>Analista de Sistemas:</b> <a>wigner.fernandes@funpec.br</a></li>
        <li><b>Programador:</b> <a>marcos.andre@funpec.br</a></li>
    </ul>
    <p>
        &emsp;&emsp;
        <a class="btn btn-primary" href="https://mail.google.com/" target="_blank" role="button">
            Enviar Email <i class="fa fa-google" aria-hidden="true"></i>
        </a>
        <a class="btn btn-success" href="https://wa.me/5584996449431" target="_blank" role="button">
            Enviar Mensagem <i class="fa fa-whatsapp" aria-hidden="true"></i>
        </a>
    </p>
    <p>Ao relatar uma falha, lembre-se de, se possível, incluir as seguintes informações para nos ajudar a entender melhor a situação:</p>
    <ol>
        <li>Descrição detalhada da falha ou problema encontrado;</li>
        <li>Etapas precisas para reproduzir a falha, se possível;</li>
        <li>Capturas de tela ou mensagens da falha, se aplicável;</li>
        <li>Qualquer informação adicional que você acredita ser relevante.</li>
    </ol>
    <p>Nossa equipe técnica estará pronta para analisar sua mensagem e trabalhar na resolução do problema. Agradeceremos sinceramente seu feedback e colaboração para melhorar nossa aplicação.</p>
    <p>Atenciosamente, AsTI - Assessoria de Tecnologia da Informação.</p>
    <hr>
@stop
