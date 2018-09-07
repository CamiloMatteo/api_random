$(window).on('load', function () {
    autopass();
    cleanModal();
    save();
    updateUser();
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
    $('#autopass').on('change', function(e){
        if ($('#autopass').is(":checked")) {
            $("#password").val('');
            $("#password").val('12345').attr("disabled", "disabled");
            $("#password").removeAttr('required');
        } else {
            $("#password").val('');
            $('#password').removeAttr("disabled");
            $("#password").attr('required');
        }
    });
}

function save(){
    $('#btn_register').on('click', function(e){
        e.preventDefault();
        var i = 0;
        $('#registerUser').find('input[type=text], input[type=password]').each(function(e){
            if($(this).val().trim() == ''){
                $(this).focus();
                i = 1;
                return false;
            }
        });

        if(i == 0){
            var data = $('#formulario').serialize();
            console.log(data);
            $.ajax({
                type: "POST",
                url: "/register",
                data: data,
                dataType: "JSON",
                cache: false,
                success: function(data) {
                    cleanModal();
                    $('#alert-success').addClass('alert-primary').removeClass('d-none').html('Creado con Exito!');
                    $('#alert-success').removeClass('d-none').html('Creacion exitosa!');
                    $('#mensaje-1').click();
                    window.location.reload();
                },
                error: function(error) {
                    if (error.status == 409){
                        $('#alert-success').removeClass('alert-primary').addClass('alert-danger').removeClass('d-none').html('Usuario ya existe.');
                        $('#mensaje-1').click();
                    }
                }
            });
        }
    });
}
var exist = 1;

function openRegister(){
    $('#titleModal').html('').append('Registrar Usuario');
    $('#btn_update').addClass('d-none').removeAttr('type');
    $('#btn_register').removeClass('d-none');
    $('#pass_box').removeClass('d-none');
    $('#contentChangepass').removeClass('d-none').addClass('d-flex');
    $('#lbl_pass').html('').append('Contraseña');
    $('#contentCondition').removeClass('d-flex').addClass('d-none');
    $('#separator').addClass('d-none');
    if (exist == 1){
        $('#btn_register').attr('type', 'submit');
        $('#rol').remove();
        $('#authorization_method').remove();
        $('#id').remove();
        exist = 0
    }
}

function getUser(id){
    $.ajax({
        type:'get',
        url:'/users/'+id,
        cache:false,
        success: function(data){
            modifyModal(data);
        },
        error: function(error){
            var errorData = JSON.stringify(error);
            console.log(error);
        }
    });
}

function modifyModal(userData){
    $('#registerUser').modal('toggle');
    $('#titleModal').html('').append('Editar Usuario');
    $('#btn_register').addClass('d-none').removeAttr('type');
    $('#btn_update').removeClass('d-none');
    $('#pass_box').attr('class','d-none');
    $('#contentChangepass').removeClass('d-flex').addClass('d-none');
    $('#contentCondition').removeClass('d-none').addClass('d-flex');
    $('#separator').removeClass('d-none');
    //si no existe agregar
    if (exist == 0){
        $('#btn_update').attr('type', 'submit');
        $('#box_auth').append('<input class="d-none" type="text" id="authorization_method" value="">');
        $('#box_rol').append('<input class="d-none" type="text" id="rol" value="">');
        $('#box_id').append('<input class="d-none" type="text" id="id" value="">');
        exist = 1;
    }

    var person = userData.data;
    var campo;
    for (campo in person) {
        document.getElementById(campo).value = person[campo];
        if (campo === 'condition' && person[campo] == '1'){
            document.getElementById('condition').checked = true;
        }
        if (campo === 'rol' && person[campo] == 'user'){
            document.getElementById('radio_user').checked = true;
        } else if (campo === 'rol' && person[campo] == 'admin') {
            document.getElementById('radio_admin').checked = true;
        }
        if (campo === 'authorization_method'){
            var result = person[campo].split(",");
        }
    }
    array = result.filter(Boolean);
    for (let value of array) {
        if (value == 'OTP'){
            document.getElementById('method1').checked = true;
        }
        if (value == 'YubiKey'){
            document.getElementById('method3').checked = true;
        }
        if (value == 'Biometrica'){
            document.getElementById('method2').checked = true;
        }
    }
}

function updateUser(){
    $('#btn_update').on('click', function(e){
        e.preventDefault();
        var i = 0;
        $('#registerUser').find('input[type=text]').each(function(e){
            if($(this).val().trim() == ''){
                $(this).focus();
                i = 1;
            }
        });

        if(i == 0){
            var id = $('#id').val();
            var rut = $('#rut').val();
            var email = $('#email').val();
            var data = $('#formulario').serializeArray();
            data.forEach(function (item) {
              if (item.name == "rut" && item.value == rut) {
                  item.value = "";
              }
              console.log(item);
            });
            return false;
            $.ajax({
                type: "PATCH",
                url: "/users/" + id,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: data,
                dataType: "JSON",
                cache: false,
                success: function(data) {
                    console.log(data);
                    $('#alert-success').addClass('alert-primary').removeClass('d-none').html('Creado con Exito!');
                    $('#alert-success').removeClass('d-none').html('Actualizacion exitosa!');
                    $('#mensaje-1').click();
                    cleanModal();
                    window.location.reload();
                },
                error: function(error) {
                    if (error.status == 409){
                        $('#alert-success').removeClass('alert-primary').addClass('alert-danger').removeClass('d-none').html('Usuario ya existe!');
                        $('#mensaje-1').click();
                    }
                }
            });
        }
    });
}
