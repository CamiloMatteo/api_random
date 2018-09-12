$(window).on('load', function () {
    checkedFilter();
    fillTable();
});

function checkedFilter()
{
    $('.filter' ).on( 'click', function() {
        if( $(this).is(':checked') ) {
            if (this.value == 'all') {
                document.getElementById('check_all').checked = true;
                document.getElementById('check_active').checked = false;
                document.getElementById('check_inactive').checked = false;
                fillTable(this.value);
            } else if (this.value == 'active') {
                document.getElementById('check_all').checked = false;
                document.getElementById('check_active').checked = true;
                document.getElementById('check_inactive').checked = false;
                fillTable(this.value);
            } else if (this.value == 'inactive') {
                document.getElementById('check_all').checked = false;
                document.getElementById('check_active').checked = false;
                document.getElementById('check_inactive').checked = true;
                fillTable(this.value);
            }
        };
    });
}

function fillTable(value)
{
    value = (value == undefined) ? value = 'all' : value;
    var active = 'Activo';
    var inactive = 'Inactivo';
    $.ajax({
        type: "GET",
        url: "/directory/" + value,
        success: function(data) {
            var users = data.data;
            $('#fillTable').empty();
            for(var i = 0; i < users.length; i++){
                var rest = (users[i].condition == 1) ? active : inactive;
                $("#fillTable").append("<tr>"
                +"<td class='table-user-name'>"+ users[i].name +" "+ users[i].first_surname
                +"<br><span class='table-user-mail'>"+ users[i].email +"</span>"
                +"<td>"+ users[i].email +"</td><td>"+ rest +"</td><td>"
                +"<a onclick='getUser("+users[i].id+")' style='cursor:pointer; color:#007bff;'>"
                +"<i class='far fa-pen'></i>"
                +"</a>"
                +"</td>"
                +"</tr>");
            }

        },
        error: function(error) {
            console.log(error);
        }
    });
}

//mostrar datos en la tabla
$("#search").keyup(function(){
    var searchText = $(this).val().toLowerCase();
    // Show only matching TR, hide rest of them
    $.each($("#fillTable tr"), function() {
        if($(this).text().toLowerCase().indexOf(searchText) === -1)
           $(this).hide();
        else
           $(this).show();
    });
});
