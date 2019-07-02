$(document).ready(function(){
    
    // change active category menu name to the one selected before
    var active = $(".category-dropdown .hidden-menu .active"),
        activeValue = active.text(),
        target = $(".category-dropdown .show-hidden-menu .text");
    
    // check if active state is available
    if(active.length) {
        if(active.hasClass("back-link")) {
            // do nothing
        } else {
            target.text(activeValue);
        }
    } else {
        // do nothing 
    }

    // show hidden category menu on product page
    $(document).on('click','.show-hidden-menu', function(e){
        var target = $(this).next(".hidden-menu");
        if(target.hasClass("opened")) {
           target.removeClass("opened");
           $(this).removeClass("opened");
        } else {
           target.addClass("opened");
           $(this).addClass("opened");
        }
        e.preventDefault();
    });
    
});



