$("body").prepend("<div class='background_cover'></div>");
for(var i = 1; i <= 5; i++){
    var randomColor = "#" + ((1 << 24) * Math.random() | 0).toString(16);
    document.documentElement.style.setProperty('--main-'+i+'-color', randomColor);
}
function start_spinner(){
    $(".background_cover").addClass('spin');
    $(".spinner").addClass('spin');
}
function stop_spinner(){
    $(".background_cover").removeClass('spin');
    $(".spinner").removeClass('spin');
}