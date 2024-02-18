document.addEventListener('DOMContentLoaded', function () {
    var textarea = document.getElementById('informativo1');
    var contador = document.getElementById('contador-caracteres1');
    var comprimento = textarea.value.length;
    
    contador.textContent = comprimento + ' / 300 Caracteres';
    
    textarea.addEventListener('input', function () {
        comprimento = textarea.value.length;
        contador.textContent = comprimento + ' / 300 Caracteres';
    });
});

document.addEventListener('DOMContentLoaded', function () {
    var textarea = document.getElementById('informativo2');
    var contador = document.getElementById('contador-caracteres2');
    var comprimento = textarea.value.length;
    
    contador.textContent = comprimento + ' / 300 Caracteres';

    textarea.addEventListener('input', function () {
        comprimento = textarea.value.length;
        contador.textContent = comprimento + ' / 300 Caracteres';
    });
});

document.addEventListener('DOMContentLoaded', function () {
    var textarea = document.getElementById('informativo3');
    var contador = document.getElementById('contador-caracteres3');
    var comprimento = textarea.value.length;
    
    contador.textContent = comprimento + ' / 300 Caracteres';
    
    textarea.addEventListener('input', function () {
        comprimento = textarea.value.length;
        contador.textContent = comprimento + ' / 300 Caracteres';
    });
});