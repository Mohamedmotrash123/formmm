$(document).ready(function(){
	
   // ck editor integration code user update profile
    CKEDITOR.replace( 'business-ab_com' );
	CKEDITOR.replace( 'textarea-description' );
	
   // Initialization datepicker
   $('#birth-date').data({
    language: 'en',
   });



   $.validator.addMethod("valueNotEquals", function(value, element, arg){
     return arg !== value;
   }, "Value must not equal arg.");
   jQuery.validator.addMethod("alphanumeric", function(value, element) {
      return this.optional(element) || /^[a-zA-Z0-9]+$/i.test(value);
   }, "Letters, numbers, and underscores only please");
   
   jQuery.validator.methods.matches = function( value, element, params ) {
     var re = new RegExp(params);
     return this.optional( element ) || re.test( value );
   }

   $("#submitcar").validate({
		rules: {
			vehicle_title: {
				required: true,
				alphanumeric: true
			},
			auto_modal: {
				required: true,
			},
			year_model: {
				required: true,
			},
			auto_brand: { 
			    valueNotEquals: "default" 
			},
            type_car: {
				required: true,
			},
            description: {
				required: true,
			},			
			
		},
   	    messages: {
 	       vehicle_title: {
 	           required: "Please enter vehicle title",
			   alphanumeric:"Please enter only letters, numbers, and underscores"
           },
		    auto_modal: {
 	           required: "Please enter vehicle model"
           },
		    year_model: {
 	           required: "Please select vehicle year model"
           },
		    type_car: {
 	           required: "Please select vehicle type"
           },
		    description: {
 	           required: "Please enter vehicle description"
           },
		   auto_brand: { 
			    valueNotEquals: "Please select a vehicle Brand"
			},
		  
 		},
    	submitHandler: function(form) {	
		   return true;
        }
   });


    $("#login").validate({
		rules: {
			username: {
				required: true,
				alphanumeric: true
			},
			password: {
				required: true,
			},
		},
           
   	    messages: {
		    username: {
 	           required: "Please enter username",
			   alphanumeric: "Spacial character is not allowed"
           },
		   password: { 
			    required: "Please enter password"
			},
		  
 		},
    	submitHandler: function(form) {	
        $('form#login p.status').show().html(ajax_login_object.loadingmessage);
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: ajax_login_object.ajaxurl,
            data: { 
                'action': 'ajaxlogin', //calls wp_ajax_nopriv_ajaxlogin
                'username': $('form#login #username').val(), 
                'password': $('form#login #password').val(), 
                'security': $('form#login #security').val() },
            success: function(data){
                $('form#login p.status').html(data.message);
                if (data.loggedin == true){
                    document.location.href = ajax_login_object.redirecturl;
                }
            }
        });
        
        }
   });
   
    /*$("#register").validate({
		rules: {
			username: {
				required: true,
				alphanumeric: true
			},
			email:{
				required: true,
				email: true
			},
			password: {
				required: true,
			},
                        
		},
           
   	    messages: {
		    username: {
 	           required: "Please enter username",
			   alphanumeric: "Spacial character is not allowed"
           },
		    email: {
 	           required: "Please enter email",
			   email: "Please enter a valid email address"
           },
		   password: { 
			    required: "Please enter password"
			},
                  
		  
 		},
    	submitHandler: function(form) {	
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
        
        }
   });*/



    $("#forget_pass_form").validate({
		rules: {
			user_login: {
				required: true,
				email: true
			},
					},
           
   	    messages: {
		    user_login: {
 	             required: "Please enter email",
			   email: "Please enter a valid email address"		  
                    },
		 		  
 		},
    	submitHandler: function(form) {	
        $('form#forget_pass_form p.status').show().html(ajax_login_object.loadingmessage);
        $.ajax({
			type: 'POST',
            dataType: 'json',
            url: ajax_login_object.ajaxurl,
            data: { 
                'action': 'ajax_forget_pass', //calls wp_ajax_nopriv_ajaxregister
                'email': $('form#forget_pass_form #email3').val(), 
                'security': $('form#forget_pass_form #security3').val() },
				
            success: function(data){
                $('form#forget_pass_form p.status').html(data.message);
            }
        });        
        }
   });

   
   
       $("#profileupdate").validate({
		rules: {
			full_name: {
				required: true,
			},
			phone:{
				 required  : true,
                 matches   : "^(\\d|\\s)+$",
                 minlength : 10,
                 maxlength : 13
			},
		    password : {
               required: false,			    
            },
            cpassword : {
               equalTo : "#password"
            },
			bus_name: {
				required: true,
			},
			address: {
				required: true,
			},
			ab_com: {
				required: true,
			},
		},
           
   	    messages: {
		    full_name: {
 	             required: "Please enter full name",		  
            },
		 	phone:{
		       required  : "Please enter phone number",
               matches   : "only digits allowed",
               minlength :"must be at least 10 digits",
               maxlength : "must be less than 13 digits"
			},
            cpassword : {
               equalTo : "confirm password must be equal to password"
            },
            bus_name: {
				required: "Please enter business name",
			},
			address: {
				required: "Please enter business address",
			},
			ab_com: {
				required: "Please enter something about your company",
			},			
 		},
    	submitHandler: function(form) {	
            return true;     
        }
   });

   
   
});

function OpenFileExp(){
   var element=document.getElementById('fileToUpload');
   let event = new Event("click");
   element.dispatchEvent(event);
}


function getFileExt(filename){
       return /[^.]+$/.exec(filename);
    }
   
    function FileSizeValidation(){ 
        
        const fi = document.getElementById('fileToUpload'); 
        if (fi.files.length > 0) { 
            for (const i = 0; i <= fi.files.length - 1; i++) { 
                const fsize = fi.files.item(i).size; 
                const file = Math.round((fsize / 1024)); 
                if (file >= 2048) { 
                  $('#UploadFileError').html("File is too Big, please select a file less than 2mb");
                  return false;
                }else{ 
                  $('#UploadFileError').html("");
                  return true; 
                } 
            } 
        }
    }
    
    function fileValidation() { 
        var fileInput = document.getElementById('fileToUpload'); 
          
        var filePath = fileInput.value; 
      
        var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i; 
          
        if (!allowedExtensions.exec(filePath)) { 
            $('#UploadFileError').html('Only jpg png and jpeg format allowed'); 
            fileInput.value = ''; 
            $('#your_image_url').val($('#UserPreviousImgValue').val());
            $('#UserProfilePicture').attr('src',$('#UserPreviousImgValue').val());
            return false; 
        }  
        else  
        { 
           if (fileInput.files && fileInput.files[0]) { 
                var reader = new FileReader(); 
                reader.onload = function(e) { 
                    $('#UserProfilePicture').attr('src',e.target.result);
					$('#your_image_url').val(e.target.result);
                }; 
                  
                reader.readAsDataURL(fileInput.files[0]);
                $('#UploadFileError').html('');
                $('#ProfilePicUploadBtn').show();
            } 
        } 
    }
    
    function closeAlertBootstrap(){
    
	}


