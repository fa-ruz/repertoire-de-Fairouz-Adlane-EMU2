// cette ligne permet d'être sûr que le document est prêt à utiliser jQuery
$(document).ready(function() {

    console.error('script chargé et page prête');
    /*

    /*  
    Quand je clique sur un élément de la navigation, 
    le composant : 
    1. met en avant le lien sur lequel je viens de cliquer
    2. affiche l'image adéquate
    3. affiche le paragraphe adéquat
    */
    
    $("S.js-link a").on('EVENEMENT', function() {
        event.preventDefault();
        console.log('click')
 });

});

    /*
    Quand je clique sur un élément de la navigation, 
    le composant :   
    2. affiche l'image adéquate
    */

$(document).ready(function() {
    // Lorsqu'un lien de navigation est cliqué
    $('.nav-link').on('click', function(e) {
        e.preventDefault();

        // Récupérer l'index associé à l'élément cliqué
        var index = $(this).attr('data-index');

        // Cacher toutes les images et articles
        $('.images img').removeClass('active');
        $('.text article').removeClass('active');

        // Afficher l'image et l'article correspondant à l'index
        $('.images img[data-index="' + index + '"]').addClass('active');
        $('.text article[data-index="' + index + '"]').addClass('active');
    });
});

    /*  
    Quand je clique sur un élément de la navigation, 
    le composant : 
    3. affiche le paragraphe adéquat
    */


$(document).ready(function() {
    $('.nav-link').on('click', function(e) {
        e.preventDefault();
        
        // Récupérer l'index associé à l'élément cliqué
        var index = $(this).attr('data-index');
        
        // Cacher toutes les étapes actives
        $('.text article').removeClass('active');
        
        // Afficher l'étape correspondant à l'index
        $('.text article[data-index="' + index + '"]').addClass('active');
    });
});
