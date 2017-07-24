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


$('.delete').click(function(){
    var ask = confirm("Voulez-vous vraiment supprimer l'élément ?");
    if(!ask)
    {
        return false;
        // Annule le click/href
    }
});

$('.restore').click(function(){
    var ask = confirm("Voulez-vous vraiment restaurer l'élément ?");
    if(!ask)
    {
        return false;
        // Annule le click/href
    }
});

//Loader
setTimeout('loader()', 500);
function loader() {
    $("#loader").hide("slow");
}

CKEDITOR.replace(jQuery('.ckeditor'));