$(function () {
    var atual_fs, next_fs, prev_fs;

    $('.next').click(function () {
        atual_fs = $(this).parent();
        next_fs = $(this).parent().next();

        $('#progress li').eq($('fieldset').index(next_fs)).addClass('ativo')
        atual_fs.hide(800);
        next_fs.show(800);
        $('html,body').scrollTop(0);
        $('html, body').animate({scrollTop:0}, 'slow');
    });

    $('.prev').click(function () {
        atual_fs = $(this).parent();
        prev_fs = $(this).parent().prev();

        $('#progress li').eq($('fieldset').index(atual_fs)).removeClass('ativo')
        atual_fs.hide(800);
        prev_fs.show(800);
    });

    $('select[name="escolaridade"]').on('change', function () {
        var modulo = this.value;

        $('select[name="modulo"] option').each(function () {
            var $this = $(this);

            if ($this.data('escolaridade') == escolaridade) $this.show();
            else $this.hide();
        });
    });

    $(function () {
        $('input.checkgroup').click(function () {
            if ($(this).is(":checked")) {
                $('input.checkgroup').attr('disabled', true);
                $(this).removeAttr('disabled');
            } else {
                $('input.checkgroup').removeAttr('disabled');
            }
        })
    })
    $('#escolaridade').click(function () {
        var nivel = $('#escolaridade').val()
        if (nivel == 1 || nivel == 2 || nivel == 3 || nivel == 4 || nivel == 5 || nivel == 6 || nivel == 7 || nivel == 8
            || nivel == 9 || nivel == 10 || nivel == 11 || nivel == 12) {
            $('#modulo-div').removeAttr('hidden', false);
        }
    });
});
