$(document).ready(function(){


$('.ri').keyup(function(){
	 $('.ri').parent().addClass('penda');});

       
$('#email').keyup(function(){
        if($('#email').val() == ''){
            $('#email').parent().addClass('is-focused error');
        }else{
            $('#email').parent().removeClass('error');
        }

    });

});