jQuery(document).ready(function($) {
	$('form#register').submit(function(e){
     	$('form#register p.status').show().html(ajax_login_object.loadingmessage);
        $.ajax({
			type: 'POST',
            dataType: 'json',
            url: ajax_login_object.ajaxurl,
            data: { 
                'action': 'ajax_register', //calls wp_ajax_nopriv_ajaxregister
                'username': $('form#register #username2').val(), 
                'email': $('form#register #email2').val(), 
				'password': $('form#register #password2').val(), 
                'security': $('form#register #security2').val() },
				
            success: function(data){
                $('form#register p.status').html(data.message);
				if (data.register == true){
                    document.location.href = ajax_login_object.redirecturl2;
                }
            }
        });
		e.preventDefault();
    });
        
});
