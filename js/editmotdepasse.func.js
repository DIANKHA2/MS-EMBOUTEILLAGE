$(document).ready(function() {
    $('.field-input').focus(function () {
        $(this).parent().addClass('is-focused has-label');
    });

    // à la perte du focus
    $('.field-input').blur(function () {
        $parent = $(this).parent();
        if ($(this).val() == '') {
            $parent.removeClass('has-label');
        }
        $parent.removeClass('is-focused');
    });

    // si un champs est rempli on rajoute directement la class has-label
    $('.field-input').each(function () {
        if ($(this).val() != '') {
            $(this).parent().addClass('has-label');
        }
    });

    $('#logForm').submit(function(){
        var pseudo = $('#pseudo').val();
        var o_password = $('#o_password').val();
        var n_password = $('#n_password').val();
        var r_password = $('#r_password').val();
        var result = true;

        if(pseudo == ''){
            $('#pseudo').parent().addClass('is-focused error');
            result = false;
        }

        if(o_password == ''){
            $('#o_password').parent().addClass('is-focused error');
            result = false;
        }
        if(n_password == ''){
            $('#n_password').parent().addClass('is-focused error');
            result = false;
        }
        if (r_password == ''){
            $('#r_password').parent().addClass('is-focused error');
            result = false;
        }
        return result;

    });

    $('#pseudo').keyup(function(){
        if($('#pseudo').val() == ''){
            $('#pseudo').parent().addClass('is-focused error');
        }else{
            $('#pseudo').parent().removeClass('error');
        }

    });
    $('#o_password').keyup(function(){
        if($('#o_password').val() == ''){
            $('#o_password').parent().addClass('is-focused error');
        }else{
            $('#o_password').parent().removeClass('error');
        }

    });
    $('#n_password').keyup(function(){
        if($('#n_password').val() == ''){
            $('#n_password').parent().addClass('is-focused error');
        }else{
            $('#n_password').parent().removeClass('error');
        }

    });
    $('#r_password').keyup(function(){
        if($('#r_password').val() == ''){
            $('#r_password').parent().addClass('is-focused error');
        }else{
            $('#r_password').parent().removeClass('error');
        }

    });

});