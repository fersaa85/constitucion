$(document).ready(function(){

    home();
    register();



    if(thanks){
        $("#openModalThanks").modal();
    }

});


function register(){

    $("form[name=frmRegister] input[name=submit]").click(function(e){

        if ( !$("input[name=agree]").is(":checked") ) {
            $("#openModal").modal();
            return false;
        }

    });


    $('form[name=frmRegister] input[name=agree]').change(function (){

        if ( !$("input[name=agree]").is(":checked") ) {
            $("#openModal").modal();
        }

    });

}



function home(){

    $('.join-now').click(function (e){
        e.preventDefault();

        $("#modalJoinNow").modal();
    });

}