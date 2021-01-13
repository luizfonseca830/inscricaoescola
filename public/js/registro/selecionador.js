$(document).ready(function () {
    $("body").on('change', "#irmaos_na_escola", function () {
        var $this = $(this);
        if ($this.val() == 'Sim') {
            $("body").find('.divIrmaoEscola').removeAttr('hidden');
        } else {
            $("body").find('.divIrmaoEscola').attr('hidden', 'true');
        }
    });
});

$(document).ready(function () {
    $("body").on('change', "#irmaos_no_sorteio", function () {
        var $this = $(this);
        if ($this.val() == 'Sim') {
            $("body").find('.divIrmaoSorteio').removeAttr('hidden');
        } else {
            $("body").find('.divIrmaoSorteio').attr('hidden', 'true');
        }
    })
})
