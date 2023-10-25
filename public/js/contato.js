$(document).ready(() => {
    // Formatando o campo de telefone no onblur
    $('#telefone').on('blur', function() {
        // Remove todos os caracteres exceto os dígitos
        let tel = $(this).val().replace(/\D/g, '');

        // Formato o telefone no padrão (xx) xxxxx-xxxx
        if(tel.length == 11){
            var telFormatado = '(' + tel.substr(0, 2) + ') ' + tel.substr(2, 5) + '-' + tel.substr(7);
            $(this).val(telFormatado);
        }
    });
});