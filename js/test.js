//javascript functions
jQuery(document).ready(function($) {
   
    $(document).on('click','.open-search a', function(e){
        e.preventDefault();
        //console.log('CLICKED ON THE OPEN ');

        $('.search-form-container').slideToggle(300);

    });

});