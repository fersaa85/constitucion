$(document).ready(function(){

    home();
    register();
    questinarie();


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


function questinarie(){

    $('.div-radio').click(function(){

        var div = '.clear-' + $(this).data("value");
        $(div).removeClass('bg-red');
        $(this).addClass('bg-red');

        $(div).children().removeAttr('checked');
        $(this).children().attr('checked', true);
    });


}

