$(window).on('load', function () {
    $('#name').focus();
});

//GUARDAR NUEVO WORKER
function send(){
    $('#btnRegister').on('click',function(e) {
        var name = $("#name").val();
        var first_surname = $('#first_surname').val();
        var second_surname = $('#second_surname').val();
        var rut = $('#rut').val();
        var statusRut = $('#statusRut').text();
        var email = $('#email').val();
        var statusEmail = $('#statusEmail').text();
        var birth_date = $('#birth_date').val();
        var cellphone = $('#cellphone').val();
        var num_worker = $('#num_worker').val();
        var depto = $('#depto').val();
        var occupation = $('#occupation').val();
        var error = '';

        if (statusRut != 'OK') {
            error += '*Debe ingresar un Rut valido \n';
        }
        if (statusEmail != 'OK') {
            error += '*Debe ingresar un Email valido \n';
        }
        if (name.trim() == '' || name == null || name.lenght == 0) {
            error += "*Debe ingresar Nombre \n";
        }
        if (first_surname.trim() == '' || first_surname == null || first_surname.lenght == 0) {
            error += "*Debe ingresar Apellido Paterno \n";
        }
        if (second_surname.trim() == '' || second_surname == null || second_surname.lenght == 0) {
            error += "*Debe ingresar Apellido Materno \n";
        }
        if (rut.trim() == '' || rut == null || rut.lenght == 0) {
            error += "*Debe ingresar Rut \n";
        }
        if (email.trim() == '' || email == null || email.lenght == 0) {
            error += "*Debe ingresar Email \n";
        }
        if (birth_date.trim() == '' || birth_date == null || birth_date.lenght == 0) {
            error += "*Debe ingresar Fecha de Nacimiento \n";
        } else {
            var array = birth_date.split('/');
            var dd = array[0]; //año
            var mm = array[1]; //mes
            var yyyy = array[2]; //dia
            birth_date = yyyy+'-'+mm+'-'+dd;
        }
        if (cellphone.trim() == '' || cellphone == null || cellphone.lenght == 0) {
            error += "*Debe ingresar Telefono/Celular \n";
        }
        if (occupation == null || occupation.lenght == 0 || occupation == '') {
            error += "*Debe ingresar una Ocupación/Cargo \n";
        }
        if (num_worker == null || num_worker.lenght == 0 || num_worker == '') {
            error += "*Debe ingresar un N° de Trabajador \n";
        }
        if (depto == null || depto.lenght == 0 || depto == '') {
            error += "*Debe ingresar el Depto al cual pertenecerá \n";
        }
        if (error.length > 0) {
            alert(error);
        } else {
            Document.getElementById("btnRegister").submit();
        }
    });
}

function dateValidate(){
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    if(dd<10){
        dd='0'+dd
    }
    if(mm<10){
        mm='0'+mm
    }

    today = yyyy+'/'+mm+'/'+dd;
    document.getElementById("birth_date").setAttribute("max", today);
}
