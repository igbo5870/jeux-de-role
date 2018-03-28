(function main() {

    $('.notvisible').hide();
    $('.action-title').each(function() {
        $(this).show(".notvisible").on('click', function() {
            $(this).nextAll(".notvisible").slideToggle('slow');
        });
    });        
})();//Fin fonction main