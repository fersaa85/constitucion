$(document).ready(function(){

    home();
    register();
    questinarie();
    inputOnlyNumbers();
    

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

    $('.dropdown-toggle').click(function (e) {
        e.preventDefault();
        window.location.href = site_domine + $(this).attr('href');
    })

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



function inputOnlyNumbers(){

    $(".inputOnlyNumbers").keydown(function(event) {
        if(event.shiftKey)
        {
            event.preventDefault();
        }

        if (event.keyCode == 46 || event.keyCode == 8)    {
        }
        else {
            if (event.keyCode < 95) {
                if (event.keyCode < 48 || event.keyCode > 57) {
                    event.preventDefault();
                }
            }
            else {
                if (event.keyCode < 96 || event.keyCode > 105) {
                    event.preventDefault();
                }
            }
        }
    });

}