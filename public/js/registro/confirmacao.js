$('#confirma').click(function () {
    $('#modal').css('display', 'block');
    $('#nome_conf').html($('#nome_completo').val())
    $('#data_nascimento_conf').html($('#data_nascimento').val())
    $('#cpf_conf').html($('#cpf').val())
    $('#telefone_conf').html($('#telefone').val())
    $('#email_conf').html($('#email').val())
    $('#idade_conf').html($('#idade').val())
    $('#escola_de_origem_conf').html($('#escola_de_origem').val())
    $('#responsavel_conf').html($('#responsavel').val())
    $('#irmaos_na_escola_conf').html($('#irmaos_na_escola').val())
    $('#nome_irmaos_na_escola_conf').html($('#nome_irmaos_na_escola').val())
    $('#irmaos_no_sorteio_conf').html($('#irmaos_no_sorteio').val())
    $('#nome_irmaos_no_sorteio_conf').html($('#nome_irmaos_no_sorteio').val())


    if ($('#sexo').val() == 'H') {
        $('#sexo_conf').html('Masculino')
    }
    else{
        $('#sexo_conf').html('Feminino')
    }

    $('#cep_conf').html($('#cep').val())
    $('#bairro_conf').html($('#bairro').val())
    $('#endereco_conf').html($('#endereco').val() + ', ' + $('#numero').val())

    if ($('#escolaridade').val() == 1){
        $('#escolaridade_conf').html('1° ano do Ensino Fundamental I')
        $('#serie_irmao_na_escola_conf').html('1° ano do Ensino Fundamental I')
        $('#serie_irmao_no_sorteio_conf').html('1° ano do Ensino Fundamental I')
    }
    if ($('#escolaridade').val() == 2){
        $('#escolaridade_conf').html('2° ano do Ensino Fundamental I')
        $('#serie_irmao_na_escola_conf').html('2° ano do Ensino Fundamental I')
        $('#serie_irmao_no_sorteio_conf').html('2° ano do Ensino Fundamental I')
    }
    if ($('#escolaridade').val() == 3){
        $('#escolaridade_conf').html('3°ano do Ensino Fundamental I')
        $('#serie_irmao_na_escola_conf').html('3° ano do Ensino Fundamental I')
        $('#serie_irmao_no_sorteio_conf').html('3° ano do Ensino Fundamental I')
    }

    if ($('#escolaridade').val() == 4){
        $('#escolaridade_conf').html('4° ano do Ensino Fundamental I')
        $('#serie_irmao_na_escola_conf').html('4° ano do Ensino Fundamental I')
        $('#serie_irmao_no_sorteio_conf').html('4° ano do Ensino Fundamental I')
    }

    if ($('#escolaridade').val() == 5){
        $('#escolaridade_conf').html('5° ano do Ensino Fundamental I')
        $('#serie_irmao_na_escola_conf').html('5° ano do Ensino Fundamental I')
        $('#serie_irmao_no_sorteio_conf').html('5° ano do Ensino Fundamental I')
    }

    if ($('#escolaridade').val() == 6){
        $('#escolaridade_conf').html('6° ano do Ensino Fundamental II')
        $('#serie_irmao_na_escola_conf').html('6° ano do Ensino Fundamental I')
        $('#serie_irmao_no_sorteio_conf').html('6° ano do Ensino Fundamental I')
    }

    if ($('#escolaridade').val() == 7){
        $('#escolaridade_conf').html('7° ano do Ensino Fundamental II')
         $('#serie_irmao_na_escola_conf').html('7° ano do Ensino Fundamental I')
        $('#serie_irmao_no_sorteio_conf').html('7° ano do Ensino Fundamental I')
    }

    if ($('#escolaridade').val() == 8){
        $('#escolaridade_conf').html('8°ano do Ensino Fundamental II')
         $('#serie_irmao_na_escola_conf').html('8° ano do Ensino Fundamental I')
        $('#serie_irmao_no_sorteio_conf').html('8° ano do Ensino Fundamental I')
    }
    if ($('#escolaridade').val() == 9){
        $('#escolaridade_conf').html('9° ano do Ensino Fundamental II')
         $('#serie_irmao_na_escola_conf').html('9° ano do Ensino Fundamental I')
        $('#serie_irmao_no_sorteio_conf').html('9° ano do Ensino Fundamental I')
    }

    if ($('#escolaridade').val() == 10){
        $('#escolaridade_conf').html('1° ano - Ensino Médio')
         $('#serie_irmao_na_escola_conf').html('1° ano - Ensino Médio')
        $('#serie_irmao_no_sorteio_conf').html('1° ano - Ensino Médio')
    }

    if ($('#escolaridade').val() == 11){
        $('#escolaridade_conf').html('2° ano - Ensino Médio')
         $('#serie_irmao_na_escola_conf').html('2° ano - Ensino Médio')
        $('#serie_irmao_no_sorteio_conf').html('2° ano - Ensino Médio')
    }

    if ($('#escolaridade').val() == 12){
        $('#escolaridade_conf').html('3° ano - Ensino Médio')
         $('#serie_irmao_na_escola_conf').html('3° ano - Ensino Médio')
        $('#serie_irmao_no_sorteio_conf').html('3° ano - Ensino Médio')
    }

});

$('#close').click(function () {
    $('#modal').css('display', 'none');
});
