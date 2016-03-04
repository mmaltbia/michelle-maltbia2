jQuery(document).ready(function () {
    // Adds button functionality for new portfolio items
    jQuery('#add-new-portfolio').on('click', function(e){
        e.preventDefault();
        jQuery('#new-form').removeClass('hide').addClass('show');
        
        jQuery('#cancel-btn').on('click', function(e){
            e.preventDefault();
            jQuery('#new-form').removeClass('show').addClass('hide');
        })
    });
    // Adds button functionality for editing portfolio items
    jQuery('.edit-btn').on('click', function(e){
        e.preventDefault();
        var i= jQuery(this)[0].id;
        console.log(jQuery(this)[0]);
        console.log(i)
        jQuery('.row-' + i).removeClass('show').addClass('hide');
        jQuery('.edit-form-'+ i).removeClass('hide').addClass('show');
        
        jQuery('.cancel-edit-btn-' + i).on('click', function(e){
            e.preventDefault();
            console.log('hello beauty');
            console.log(i);
            jQuery('.edit-form-'+ i).removeClass('show').addClass('hide');
            jQuery('.row-' + i).removeClass('hide').addClass('show');
        });
    });
});