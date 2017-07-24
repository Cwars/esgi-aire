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
    var pull = $('#pull');
    menu = $('#mobile');
    hamb = $('.fa-bars');
    rotate = 0;

    $(pull).on('click', function (e) {
        e.preventDefault();
        menu.slideToggle();

        rotate = rotate + 90;
        hamb.css("transform", "rotate(" + rotate + "deg)");
        hamb.css("transition-duration", "0.5s");
    });
});

/***    CAROUSEL    ***/

$( document ).ready(function() {

    var autoplay;
    var click = true;
    var autoreading = true;
    var imgs = 0;
    var carouselwidth = 1000;
    var sliderspeed = 700;
    var autosliderspeed = 2000;
    var URL = "https://www.skrzypczyk.fr/slideshow.php";


    // On récupère le JSON depuis l'URL fournie
    $.getJSON(URL, function (data) {
        $.each(data, function(key, value) {

            $("#rail").append("<img src=\""+ value["url"] +"\" data-img=\""+ imgs + "\" data-desc=\""+ value["desc"] +"\" data-title=\""+ value["title"] +"\">");
            $(".puce-navigation").append("<i class='fa fa-square-o' data-puce='" + imgs + "' aria-hidden='true'></i>");
            imgs++;
        });
        $("#rail").css("width", imgs*carouselwidth);
        reloadTitle();
    });

    if(autoreading == true)
        play();

    function reloadTitle() {

        $("[data-puce]").each(function(){
            if ($(this).attr("data-puce") === $("#rail img:first-of-type").attr("data-img")){ // Si le numéro de la puce correspond
                $(this).removeClass("fa-square-o");											 // au numéro de l'image active alors puce active
                $(this).addClass("fa-square");
            }else{
                $(this).removeClass("fa-square");
                $(this).addClass("fa-square-o");
            }
        });

        // On re-récupère les données en "data" pour les affichées
        $('.title').text($("#rail img:first-of-type").attr("data-title"));
        $('.desc').text($("#rail img:first-of-type").attr("data-desc"));
    }


    // Affiche la slide suivante
    function nextSlide(isFromClick){
        var first = $("#rail img:first-of-type");

        if (click === true) {
            click = false;
            $("#rail").animate({
                marginLeft: "-="+carouselwidth
            }, sliderspeed, function() {
                $("#rail img:last-child").after(first);
                $(this).css("margin-left", "+="+carouselwidth+"px");
                click = true;
                reloadTitle();
            });.0
        }

        if(isFromClick === 1)
            stop();
    }

    // Affiche la slide précédente
    function prevSlide(isFromClick) {
        var first = $("#rail img:first-of-type");
        var last = $("#rail img:last-child");

        if (click === true) {
            click = false;

            $("#rail img:first-child").before(last);
            $("#rail").css("margin-left", "-="+carouselwidth+"px");
            $("#rail").animate({
                marginLeft: "+="+carouselwidth
            }, sliderspeed, function() {
                click = true;
                reloadTitle();
            });
        }

        if(isFromClick === 1)
            stop();
    }


    // Navigationa vec les puces
    function puceNav(puce) {
        var i = 0;

        var currentimg = $("#rail img:first-of-type");
        var currentpuce = currentimg.attr('data-img');

        var last = $("#rail img:last");

        var slideFor = puce - currentpuce;
        // Je veux aller à la puce 3 et je suis à la 1
        // 3 - 1 = -2 = il faut que je margin  carouselwidth*-2

        click = true;

        if (slideFor < 0) // SI SlideFor < 0 = si la slide est une slide précédente
        {
            while (i < (slideFor*(-1))) {
                prevSlide(1);
                i++;
            }
        }
        if (slideFor > 0) // SI SlideFor > 0 = si la slide est une slide suivante
        {
            while (i < slideFor) {
                nextSlide(1);
                i++;
            }
        }

        click = true;
        stop();
    }


    /* Stop/Play Hover */

    var wasreading;

    $("#carousel").hover(function(){ // Mouseover = si je clique play ne se lance pas jusqua ce que je sorte / hover si je clique ce lance puis si je reviens pause
        if (reading == true) {
            suspend();
            if (reading == true)
                wasreading = true;
        }

        $("#prev").addClass("hover");
        $("#next").addClass("hover")
        return;
    },function(){
        if (wasreading == true) {
            play();
            wasreading = false;
        }

        $("#prev").removeClass("hover");
        $("#next").removeClass("hover")
    });




    /* Stop/Play */
    $("#play").click(function(){
        if(reading == false){
            play();
        }else{
            stop();
        }
    });

    function play() {
        autoplay = setInterval(nextSlide, autosliderspeed);
        reading = true;

        $("#pauseOrPlay").removeClass("fa-play");
        $("#pauseOrPlay").addClass("fa-pause");
    }

    function stop() {
        clearInterval(autoplay);
        reading = false;
        wasreading = false;

        $("#pauseOrPlay").removeClass("fa-pause");
        $("#pauseOrPlay").addClass("fa-play");
    }
    function suspend() {
        clearInterval(autoplay);
    }

    /* NAVIGATION */

    $('body').on('click', '[data-puce]', function() {
        var puce = $(this);
        click = false;

        stop();

        puceNav(puce.attr('data-puce'));
    });

    $("#next").click(function() { nextSlide(1); }); // Au clic sur next : slide suivante

    $("#prev").click(function() { prevSlide(1); }); // Au clic sur prev : slide précédente

});