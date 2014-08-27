jQuery(document).ready(function($){
    
    
    /* Create plugin
     * Linkified the caption of the gallery
     * Called on a jQuery object, it searches for 
     * children called .gallery-item, finds the 
     * link used on the text and wraps it around the caption as well
    */
    $.fn.extend({
        linkifyGalleryCaption: function() {
            var $galleryItems = $(this).children('.gallery-item');
            $galleryItems.each(function(){
                var href = $(this).find("a[href]").attr('href');
                var link = "<a href='" + href + "'></a>";
                $(this).find('.wp-caption-text').wrap(link)
            })
        }
    })
    
    
    //Linkify homepage gallery
    $('.real .gallery').linkifyGalleryCaption();
    
    
    //Add little arrows to sub-menu drop-downs
    $('.sub-menu').before('<div class="arrow"></li>')
       
    
});