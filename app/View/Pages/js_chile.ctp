(function(jQuery) {
	
    /**
    * jQuery('#region').chileRegiones('#comuna');
    */
    jQuery.getJSON(location.protocol+'//umdapps.com/labs/ws/regiones.json',function(regiones){
            jQuery.getJSON(location.protocol+'//umdapps.com/labs/ws/comunas.json',function(comunas){
            jQuery.fn.chileRegiones = function(element_id_class) {
                element = jQuery(this);
                element.html('<option value=""></option>');
                jQuery.each(regiones.data,function(x,item){
                    element.append('<option value="'+item.id+'">'+item.name+'</option>');
                });
                jQuery(this).change(function(){
                    jQuery(element_id_class).html('<option value=""></option>');
                    value = jQuery(this).val();
                    if(value != ''){
                        jQuery.each(comunas.data,function(x,item){
                            if(value == item.region_id){
                                jQuery(element_id_class).append('<option value="'+item.id+'">'+item.name+'</option>');
                            }
                        });
                    }
                });        
            }    
        });
    });

}(jQuery));