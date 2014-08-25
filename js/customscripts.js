jQuery(document).ready(function($){
    
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
    
    $('.real .gallery').linkifyGalleryCaption();
       
    
});