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
    $('#pne_conf').html($('#pne').val())

    $('#cep_conf').html($('#cep').val())
    $('#bairro_conf').html($('#bairro').val())
    $('#endereco_conf').html($('#endereco').val() + ', ' + $('#numero').val())

    if ($('#escolaridade').val() == 1){
        $('#escolaridade_conf').html('Nível Fundamental')
    }
    if ($('#escolaridade').val() == 2){
        $('#escolaridade_conf').html('Nível Médio')
    }
    if ($('#escolaridade').val() == 3){
        $('#escolaridade_conf').html('Nível Superior')
    }

    if ($('#cargo').val() == 1) {
        $('#cargo_conf').html('Auxiliar de Topografia')
    }
    if ($('#cargo').val() == 2) {
        $('#cargo_conf').html('Encarregado de Campo')
    }
    if ($('#cargo').val() == 3) {
        $('#cargo_conf').html('Técnico em Agrimensura ou equivalente')
    }
    if ($('#cargo').val() == 4) {
        $('#cargo_conf').html('Topógrafo Prático')
    }
    if ($('#cargo').val() == 5) {
        $('#cargo_conf').html('Arquiteto e Urbanista')
    }
    if ($('#cargo').val() == 6) {
        $('#cargo_conf').html('Engenheiro Civil')
    }
    if ($('#cargo').val() == 7) {
        $('#cargo_conf').html('Engenheiro Eletricista')
    }
});

$('#close').click(function () {
    $('#modal').css('display', 'none');
});
