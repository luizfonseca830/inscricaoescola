$('#confirma').click(function () {
    $('#modal').css('display', 'block');
    $('#nome_conf').html($('#nome_completo').val())
    $('#cpf_conf').html($('#cpf').val())
    $('#rg_conf').html($('#rg').val())
    $('#orgao_emissor_conf').html($('#orgao_emissor').val())
    $('#pis_conf').html($('#pis').val())
    $('#telefone_conf').html($('#telefone').val())
    $('#nacionalidade_conf').html($('#nacionalidade').val())
    $('#naturalidade_conf').html($('#naturalidade').val())
    $('#email_conf').html($('#email').val())
    $('#data_nascimento_conf').html($('#data_nascimento').val())
    if ($('#sexo').val() == 'H') {
        $('#sexo_conf').html('Masculino')
    }
    else{
        $('#sexo_conf').html('Feminino')
    }


    if ($('#escolaridade').val() == 1){
        $('#escolaridade_conf').html('Nível Fundamental')
    }
    if ($('#escolaridade').val() == 2){
        $('#escolaridade_conf').html('Nível Médio')
    }
    if ($('#escolaridade').val() == 3){
        $('#escolaridade_conf').html('Nível Superior')
    }

});

$('#close').click(function () {
    $('#modal').css('display', 'none');
});
