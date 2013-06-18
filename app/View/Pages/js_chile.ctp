(function($) {
	var defaults = {
	    source_element : '#region',
	    target_element : '#comuna',
	    url_ws : '',
	};
	var options = {};
	$.extend({
		load: function(src, args, callback) {
			options = $.extend(defaults, args);
		    var script = document.createElement('script'),
		        loaded;
		    script.setAttribute('src', options.url_ws+src);
		    if (callback) {
		      script.onreadystatechange = script.onload = function() {
		        if (!loaded) {
		          callback();
		        }
		        loaded = true;
		      };
		    }
		    document.getElementsByTagName('head')[0].appendChild(script);
		},
	    chileRegiones: function(){
	        element = options.source_element;
			element_id_class = options.target_element;

			$(element).empty().append('<option value="">Selecciona</option>');
			$.each(regiones,function(x,item){
				$(element).append('<option value="'+item.id+'">'+item.name+'</option>');
			});
			$(element).change(function(){
				$(element_id_class).html('<option value="">Selecciona</option>');
				value = $(this).val();
				if(value != ''){
					$.each(comunas,function(x,item){
						if(value == item.region_id){
							$(element_id_class).append('<option value="'+item.id+'">'+item.name+'</option>');
						}
					});
				}
			});
	    }
	});
}(jQuery));