$('.delete').click(function(){
    var ask = confirm("Voulez-vous vraiment supprimer l'élément ?");
    if(!ask)
    {
        return false;
        // Annule le click/href
    }
});

CKEDITOR.replace(jQuery('.ckeditor'));