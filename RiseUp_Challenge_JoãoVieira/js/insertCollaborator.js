//Submit através do JS
$(document).on('click', '#botaoInserir', function(){
    if($(this).val() == 'add'){
        inserir();
    }
    else{
        editar();
    }
});


$(function(){
    // Form validation (atraves do disable botao)
    if($('#botaoInserir').val() == 'add'){
        $('#botaoInserir').attr('disabled',true);
    }
    if($('#botaoInserir').val() != 'add'){
        $('#botaoInserir').attr('disabled',false);
    }
    $('input#name, input#address, input#birthdate, input#phone, input#email').keyup(function(){
        $('input#name, input#address, input#phone, input#email').each(function() {
            if ($(this).val() != '') {
                $('input#birthdate').on('change', function(){
                    console.log($(this));
                    if($(this).val() != ''){
                        console.log('all inputs filled');
                        console.log($('input#birthdate').val());
                        $('#botaoInserir').attr('disabled',false);
                    }
                    else{
                        console.log('theres an empty input');
                        console.log($('input#birthdate').val());
                        $('#botaoInserir').attr('disabled',true);
                        return false;
                    }
                });
                
                if($('input#birthdate').val() != ''){
                    console.log('all inputs filled');
                    console.log($('input#birthdate').val());
                    $('#botaoInserir').attr('disabled',false);
                }
            }
            else{
                console.log('theres an empty input');
                console.log($('input#birthdate').val());
                $('#botaoInserir').attr('disabled',true);
                return false;
            }
        });

        if($('input#birthdate').val() != '' && $('input#name').val() != '' && $('input#address').val() != '' && $('input#phone').val() != '' && $('input#email').val() != ''){
            console.log('all inputs filled');
            console.log($('input#birthdate').val());
            $('#botaoInserir').attr('disabled',false);
        }
        else{
            console.log('theres an empty input');
            console.log($('input#birthdate').val());
            $('#botaoInserir').attr('disabled',true);
            return false;
        }
    });

    $('input#birthdate').on('change', function(){
        console.log($(this));
        if($('input#birthdate').val() != '' && $('input#name').val() != '' && $('input#address').val() != '' && $('input#phone').val() != '' && $('input#email').val() != ''){
            console.log('all inputs filled');
            console.log($('input#birthdate').val());
            $('#botaoInserir').attr('disabled',false);
        }
        else{
            console.log('theres an empty input');
            console.log($('input#birthdate').val());
            $('#botaoInserir').attr('disabled',true);
            return false;
        }
    });

});

//Envio dos dados para INSERT
function inserir() {
   
    let name = $('#name').val();
    let birthdate = $('#birthdate').val();
    let phone = $('#phone').val();
    let email = $('#email').val();
    let address = $('#address').val();
    let op = 1;

    console.log(name + " | " + birthdate + " | " + address + " | " + phone  + " | " + email + " | " + op);


    $.ajax({
        type: "POST",
        url: "php/op.php",
        data: { name : name, birthdate : birthdate, phone : phone, email : email, address : address, op : op},
        success: function( result ) {

            // console.log(name + " | " + birthdate + " | " + address + " | " + status  + " | " + position);
            let res = JSON.parse(result);
           
            if(res['val'] == 1){
                console.log("Registo efetuado com sucesso");

                sweetInsert();
                document.getElementById('formulario').reset();
                setTimeout(function() {
                    window.location.href = "index.php";
                }, 1500);
            }
            else{
                console.log(res['msg']);
            }          
        }
    });
}

//Envio dos dados para UPDATE
function editar() {
   
    let id_user = $('#botaoInserir').val();
    let name = $('#name').val();
    let birthdate = $('#birthdate').val();
    let phone = $('#phone').val();
    let email = $('#email').val();
    let address = $('#address').val();
    let op = 4;

    console.log(id_user + " | " + name + " | " + birthdate + " | " + phone + " | " + email  + " | " + address);

    $.ajax({
        type: "POST",
        url: "php/op.php",
        data: { id_user : id_user, name : name, birthdate : birthdate, phone : phone, email : email, address : address, op : op},
        success: function( result ) {

            //console.log(name + " | " + birthdate + " | " + phone + " | " + email  + " | " + address);
            var res = JSON.parse(result);
           
            if(res['val'] == 1){
                console.log("Registo efetuado com sucesso");

                sweetUpdate();
                setTimeout(function() {
                    window.location.href = "index.php";
                }, 1500);
            }
            else{
                console.log("res['msg']");
            }          
        }
    });
}

function sweetInsert(){
    swal({
        className: "swal-text",
        text: 'Successfully Registered',
        icon: 'success',
        timer: 1500,
        buttons: false,
    });
}

function sweetUpdate(){
    swal({
        className: "swal-text",
        text: 'Successfully Edited',
        icon: 'success',
        timer: 1500,
        buttons: false,
    });
}


