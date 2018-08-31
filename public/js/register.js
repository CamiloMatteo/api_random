$(window).on('load', function () {
    autopass();
    cleanModal();
    //checked ever
    $('.micheckbox' ).on( 'click', function() {
        if( $(this).is(':checked') ){
        } else {
            $('#checkbox1').prop('checked', true);
        }
    });
});

function cleanModal(){
    $('.modal').on('hidden.bs.modal', function(){
        $(this).find('form')[0].reset();
        $('#inputPassword').removeAttr("disabled");
    });
}

function autopass(){
    $('#autopass').on('click', function(e){
        if ($('#autopass').is(":checked")) {
            $("#inputPassword").val('').attr("disabled", "disabled");
            $("#inputPassword").removeAttr('requred');
        } else {
            $('#inputPassword').removeAttr("disabled");
            $("#inputPassword").addAttr('requred');
        }
    });
}

function formValidation(){
    var i = 0;
    $('#registerUser').find('input[type=text], input[type=password]').each(function(e){
        if($(this).val().trim() == ''){
            i = 1;
            $('#alert-success').html('').addClass('d-none');
            return false;
        }
    });
    if (i == 0){
        $('#alert-success').removeClass('d-none').html('Registro Exitoso!');
        setTimeout(3000);
    }
}
