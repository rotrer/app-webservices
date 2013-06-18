<script>
$(document).ready(function() {
	$.load(
		"jsRegionesComunas.js", 
		{
	        source_element: '#UserRegion',
	        target_element: '#UserComuna',
	        url_ws : location.protocol+'//umdapps.com/labs/ws/'
	    },
	    function() {
	    	$.chileRegiones();
		}
	);
});
</script>
<p>
    <label for="UserRegion">Región:</label>
    <select id="UserRegion" text="Seleccione su región" class="required select" name="region"><option>Selecciona</option></select>	                
</p>

<p>
    <label for="UserComuna">Comuna:</label>
    <select id="UserComuna" text="Seleccione su comuna" class="required select" name="comuna"><option>Selecciona</option></select>	                
</p>