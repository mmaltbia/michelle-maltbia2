jQuery(document).ready(function($){
 
    var custom_uploader;
    var custom_uploader2;
    var custom_uploader3;
    var custom_uploader4;
    var custom_uploader5;
    var custom_uploader6;
    var custom_uploader7;
    var custom_uploader8;
    var custom_uploader9;
    var custom_uploader10;

    
 
    $('#upload_banner_button').click(function(e) {
    
        e.preventDefault();
    
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
    
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
    
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#banner_image').val(attachment.url);
        });
    
        //Open the uploader dialog
        custom_uploader.open();
    
    });


    $('#upload_image_button').click(function(e) {
 
        e.preventDefault();
 
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
 
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
 
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#block1_img').val(attachment.url);
            $('#new-image').empty();
            $('#new-image').append("<img src='"+attachment.url+"' class='w-100'>");
        });
 
        //Open the uploader dialog
        custom_uploader.open();
 
    });

    $('#upload_image_button2').click(function(e) {
    
        e.preventDefault();
    
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
    
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
    
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#block2_img').val(attachment.url);
        });
    
        //Open the uploader dialog
        custom_uploader.open();
    
    });

    $('#upload_image_button2_2').click(function(e) {
    
        e.preventDefault();
    
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
    
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
    
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#block2_img2').val(attachment.url);
        });
    
        //Open the uploader dialog
        custom_uploader.open();
    
    });
    $('#upload_image_button2_3').click(function(e) {
    
        e.preventDefault();
    
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
    
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
    
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#block2_img3').val(attachment.url);
        });
    
        //Open the uploader dialog
        custom_uploader.open();
    
    });
 
 $('#upload_image_button3').click(function(e) {
 
     e.preventDefault();
 
     //If the uploader object has already been created, reopen the dialog
     if (custom_uploader) {
         custom_uploader.open();
         return;
     }
 
     //Extend the wp.media object
     custom_uploader = wp.media.frames.file_frame = wp.media({
         title: 'Choose Image',
         button: {
             text: 'Choose Image'
         },
         multiple: false
     });
 
     //When a file is selected, grab the URL and set it as the text field's value
     custom_uploader.on('select', function() {
         attachment = custom_uploader.state().get('selection').first().toJSON();
         $('#block3_img').val(attachment.url);
     });
 
     //Open the uploader dialog
     custom_uploader.open();
 
 });
    $('#upload_image_button4').click(function(e) {
    
        e.preventDefault();
    
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
    
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
    
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#block4_img').val(attachment.url);
        });
    
        //Open the uploader dialog
        custom_uploader.open();
    
    }); 
    $('#upload_image_button4_2').click(function(e) {
    
        e.preventDefault();
    
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
    
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
    
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#block4_img2').val(attachment.url);
        });
    
        //Open the uploader dialog
        custom_uploader.open();
    
    });
    $('#upload_image_button5').click(function(e) {
    
        e.preventDefault();
    
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
    
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
    
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#block5_img').val(attachment.url);
        });
    
        //Open the uploader dialog
        custom_uploader.open();
    
    });
// Upload buttons for adding additional images into portfolio
    $('#upload_image_button_2').click(function(e) {

        e.preventDefault();

        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader2) {
            custom_uploader2.open();
            return;
        }

        //Extend the wp.media object
        custom_uploader2 = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader2.on('select', function() {
            attachment = custom_uploader2.state().get('selection').first().toJSON();
            $('#block1_img2').val(attachment.url);
            $('#new-image2').empty();
            $('#new-image2').append("<img src='"+attachment.url+"' class='w-100'>");
        });

        //Open the uploader dialog
        custom_uploader2.open();

    });
    $('#upload_image_button_3').click(function(e) {

        e.preventDefault();
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader3) {
            custom_uploader3.open();
            return;
        }

        //Extend the wp.media object
        custom_uploader3 = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader3.on('select', function() {
            attachment = custom_uploader3.state().get('selection').first().toJSON();
            $('#block1_img3').val(attachment.url);
            $('#new-image3').empty();
            $('#new-image3').append("<img src='"+attachment.url+"' class='w-100'>");
        });

        //Open the uploader dialog
        custom_uploader3.open();

    });
    $('#upload_image_button_4').click(function(e) {

        e.preventDefault();

        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader4) {
            custom_uploader4.open();
            return;
        }

        //Extend the wp.media object
        custom_uploader4 = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader4.on('select', function() {
            attachment = custom_uploader4.state().get('selection').first().toJSON();
            $('#block1_img4').val(attachment.url);
            $('#new-image4').empty();
            $('#new-image4').append("<img src='"+attachment.url+"' class='w-100'>");
        });

        //Open the uploader dialog
        custom_uploader4.open();

    });
    $('#upload_image_button_5').click(function(e) {

        e.preventDefault();

        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader5) {
            custom_uploader5.open();
            return;
        }

        //Extend the wp.media object
        custom_uploader5 = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader5.on('select', function() {
            attachment = custom_uploader5.state().get('selection').first().toJSON();
            $('#block1_img5').val(attachment.url);
            $('#new-image5').empty();
            $('#new-image5').append("<img src='"+attachment.url+"' class='w-100'>");
        });

        //Open the uploader dialog
        custom_uploader5.open();

    });
    $('#upload_image_button_6').click(function(e) {

        e.preventDefault();

        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader6) {
            custom_uploader6.open();
            return;
        }

        //Extend the wp.media object
        custom_uploader6 = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader6.on('select', function() {
            attachment = custom_uploader6.state().get('selection').first().toJSON();
            $('#block1_img6').val(attachment.url);
            $('#edit-image').empty();
            $('#edit-image').append("<img src='"+attachment.url+"' class='w-100'>");
        });

        //Open the uploader dialog
        custom_uploader6.open();

    });
    $('#upload_image_button_7').click(function(e) {

        e.preventDefault();

        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader7) {
            custom_uploader7.open();
            return;
        }

        //Extend the wp.media object
        custom_uploader7 = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader7.on('select', function() {
            attachment = custom_uploader7.state().get('selection').first().toJSON();
            $('#block1_img7').val(attachment.url);
            $('#edit-image7').empty();
            $('#edit-image7').append("<img src='"+attachment.url+"' class='w-100'>");
        });

        //Open the uploader dialog
        custom_uploader7.open();

    });
    $('#upload_image_button_8').click(function(e) {

        e.preventDefault();

        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader8) {
            custom_uploader8.open();
            return;
        }

        //Extend the wp.media object
        custom_uploader8 = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader8.on('select', function() {
            attachment = custom_uploader8.state().get('selection').first().toJSON();
            $('#block1_img8').val(attachment.url);
            $('#edit-image8').empty();
            $('#edit-image8').append("<img src='"+attachment.url+"' class='w-100'>");
        });

        //Open the uploader dialog
        custom_uploader8.open();

    });
    $('#upload_image_button_9').click(function(e) {

        e.preventDefault();

        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader9) {
            custom_uploader9.open();
            return;
        }

        //Extend the wp.media object
        custom_uploader9 = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader9.on('select', function() {
            attachment = custom_uploader9.state().get('selection').first().toJSON();
            $('#block1_img9').val(attachment.url);
            $('#edit-image9').empty();
            $('#edit-image9').append("<img src='"+attachment.url+"' class='w-100'>");
        });

        //Open the uploader dialog
        custom_uploader9.open();

    });
    $('#upload_image_button_10').click(function(e) {

        e.preventDefault();

        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader10) {
            custom_uploader10.open();
            return;
        }

        //Extend the wp.media object
        custom_uploader10 = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader10.on('select', function() {
            attachment = custom_uploader10.state().get('selection').first().toJSON();
            $('#block1_img10').val(attachment.url);
            $('#edit-image10').empty();
            $('#edit-image10').append("<img src='"+attachment.url+"' class='w-100'>");
        });

        //Open the uploader dialog
        custom_uploader10.open();

    });
});