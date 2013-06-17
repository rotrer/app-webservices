(function(jQuery) {
    var regiones = '<?php  echo json_encode($regiones, JSON_HEX_QUOT | JSON_HEX_APOS ); ?>';
    var comunas = '<?php  echo json_encode($comunas, JSON_HEX_QUOT | JSON_HEX_APOS ); ?>';
    jQuery.fn.chileRegiones = function(element_id_class) {
        element = jQuery(this);
        element.html('<option value=""></option>');
        jQuery.each(JSON.parse(regiones),function(x,item){
            element.append('<option value="'+item.id+'">'+item.name+'</option>');
        });
        jQuery(this).change(function(){
            jQuery(element_id_class).html('<option value=""></option>');
            value = jQuery(this).val();
            if(value != ''){
                jQuery.each(JSON.parse(comunas),function(x,item){
                    if(value == item.region_id){
                        jQuery(element_id_class).append('<option value="'+item.id+'">'+item.name+'</option>');
                    }
                });
            }
        });        
    }   

}(jQuery));