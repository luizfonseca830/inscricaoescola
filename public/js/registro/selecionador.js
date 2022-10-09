$(document).ready(function () {
    $("body").on('change', "#irmaos_na_escola", function () {
        let $this = $(this);
        if ($this.val() == 'Sim') {
            $("body").find('.divIrmaoEscolaSeleciona').removeAttr('hidden');
        } else {
            $("body").find('.divIrmaoEscolaSeleciona').attr('hidden', 'true');
            $("body").find('.divIrmaoEscolaInput').attr('hidden', 'true');
            $("#serie_irmao_na_escola_id").val("");
            $("#nome_irmaos_na_escola").val("");

        }
    });
});

$(document).ready(function () {
    $("body").on('change', "#irmaos_no_sorteio", function () {
        let $this = $(this);
        if ($this.val() == 'Sim') {
            $("body").find('.divIrmaoSorteioSeleciona').removeAttr('hidden');
        } else {
            $("body").find('.divIrmaoSorteioSeleciona').attr('hidden', 'true');
            $("body").find('.divIrmaoSorteioInput').attr('hidden', 'true');
            $("#serie_irmao_no_sorteio_id").val("");
            $("#nome_irmaos_no_sorteio").val("");
        }
    });
});

$(document).ready(function () {
    $("body").on('change', "#serie_irmao_no_sorteio_id", function () {
        let $this = $(this);
        if ($this.val() == "") {
            $("body").find('.divIrmaoSorteioInput').attr('hidden', 'true');
        } else {
            $("body").find('.divIrmaoSorteioInput').removeAttr('hidden');
        }
    });
});

$(document).ready(function () {
    $("body").on('change', "#serie_irmao_na_escola_id", function () {
        let $this = $(this);
        if ($this.val() == "") {
            $("body").find('.divIrmaoEscolaInput').attr('hidden', 'true');
        } else {
            $("body").find('.divIrmaoEscolaInput').removeAttr('hidden');
        }
    });
});
