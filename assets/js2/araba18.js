/*------------------------------------------------------------------
	Upload Image
	-------------------------------------------------------------------*/

jQuery(document).ready(function(){

var image_custom_uploader;

var $thisItem = '';

/*jQuery(document).on('click','.upload-author-image', function(e) {

	e.preventDefault();

	var $thisItem = jQuery(this);

	var $form = jQuery('#profileupdate');

	//If the uploader object has already been created, reopen the dialog

	if (image_custom_uploader) {

	    image_custom_uploader.open();

	    return;

	}

	//Extend the wp.media object

	image_custom_uploader = wp.media.frames.file_frame = wp.media({

	    title: 'Choose Image',

	    button: {

	        text: 'Choose Image'

	    },

	    multiple: false

	});
	
	//When a file is selected, grab the URL and set it as the text field's value

	image_custom_uploader.on('select', function() {

	  attachment = image_custom_uploader.state().get('selection').first().toJSON();

	  var url = '';

	  url = attachment['url'];

	  var attachId = '';

	  attachId = attachment['id'];

	  jQuery( "img.author-avatar" ).attr({

	        src: url

	  });

	  $form.parent().parent().find( ".criteria-image-url" ).attr({

	        value: url

	  });

	  $form.parent().parent().find( ".criteria-image-id" ).attr({

	        value: attachId

	  });

	});

	image_custom_uploader.open();

});*/

});