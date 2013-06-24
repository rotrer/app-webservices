(function($) {
	var defaults = {
	    source_element : '#region',
	    source_empty   : 'Seleccione Región',
	    target_element : '#comuna',
	    target_empty   : 'Seleccione Comuna',
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

			$(element).empty().append('<option value="">'+options.source_empty+'</option>');
			$.each(regiones,function(x,item){
				$(element).append('<option value="'+item.id+'">'+item.name+'</option>');
			});
			$(element).change(function(){
				$(element_id_class).html('<option value="">'+options.target_empty+'</option>');
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