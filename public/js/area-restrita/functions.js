$('#close').click(function () {
    console.log('teste');
    $('#modal').css('display', 'none');
});

$(document).ready(function(){
    $("#pesquisa").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

