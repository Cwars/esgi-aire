$( "#goPage" ).click(function() {
        var url      = window.location.href;
        url = url.substring(0, url.lastIndexOf('/'));
        var value = $( "#pagePagination" ).val();

        window.location=url+"/"+value;
})

$( "#prevPage" ).click(function() {
    var url      = window.location.href;
    var result = url.split('/');
    var value = parseInt(result[result.length-1])-1;

    if(value<1){
        alert('Vous êtes à la première page');
    }else {
        url = url.substring(0, url.lastIndexOf('/'));
        window.location = url + "/" + value;
    }
});

$( "#nextPage" ).click(function() {
    var url      = window.location.href;
    var result = url.split('/');
    var value = parseInt(result[result.length-1])+1;
    url = url.substring(0, url.lastIndexOf('/'));
    window.location=url+"/"+value;
});


// NavBar responsive

$(function() {
    var pull 		= $('#pull');
    menu 		= $('nav ul');

    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
    });

    $(window).resize(function(){
        var w = $(window).width();
        if(w > 300 && menu.is(':hidden')) {
            menu.removeAttr('style');
        }
    });
});