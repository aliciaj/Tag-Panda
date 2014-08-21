// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

$( window ).load(function() {
    $(".columns").height($(".app-body").parent().height() - $('.top-bar').height()); 
    console.log($(".app-body").parent());

    
});

$( window ).resize(function() {
  $(".columns").height($(".app-body").parent().height() - $('.top-bar').height()); 
});