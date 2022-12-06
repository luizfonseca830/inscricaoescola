$('#close').click(function () {
    $('#modal').css('display', 'none');
    $('#modal').removeClass('d-block');
    $('#modal').addClass('d-none');
});

$(document).ready(function(){
    $("#pesquisa").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
