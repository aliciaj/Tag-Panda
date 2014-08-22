// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();


function mediaqueryresponse(mql){
    if (mql.matches){ // if media query matches
        // console.log("The condition " + mql.media + " has been met")
        $(".columns").height($(".app-body").parent().height() - $('.top-bar').height());
    }
    else{
        // console.log("Condition not met yet")
        $(".columns").height() == 'auto';
    }
}

// On Load
$( window ).load(function() {

    var mql = window.matchMedia("screen and (min-width: 64.063em)")
    mediaqueryresponse(mql)
    mql.addListener(mediaqueryresponse)
});


// On Resize
$( window ).resize(function() {
    var mql = window.matchMedia("screen and (min-width: 64.063em)")
    mediaqueryresponse(mql) 
    mql.addListener(mediaqueryresponse)
});
