WebServices Regiones
=======

## Instrucciones de instalación

1. Clona el repo! `git clone https://github.com/rotrer/app-webservices.git . `
2. Configra tu base de datos, no olvides crear el archivo `/app/Config/database.php`
3. Dentro del direcotorio `sql` encontrarás el dump
4. Y.. listo!

## Los recursos disponibles

### Para Regiones

1. Todas las regiones: `[**TU_DOMINIO**]/regiones.json`

### Para Comunas

1. Todas las comunas: `[**TU_DOMINIO**]/comunas.json`
2. Para una comuna: `[**TU_DOMINIO**]/comunas/view/[**ID_COMUNA**].json` 
3. Comunas por región: `[**TU_DOMINIO**]/comunas/get/[**ID_REGION**].json`

### Para Ocupaciones

1. Todas las ocupaciones: `[**TU_DOMINIO**]/occupations.json`

### Para traer todas las regiones y comunas en un formato JSON

1. Aplicar: `[**TU_DOMINIO**]/jsRegionesComunas.js`


## Como utilizar este WS

Muy simple, en tu archivo JS o donde necesites llamar los servicios, aplica lo siguiente:
```
	$.load(
		"jsRegionesComunas.js", // Esto queda como parametro, lo puedes modificar si cambias algun **action**
		{
	        source_element: '#UserRegion', //Id o class de la región
	        target_element: '#UserComuna', //Id o class de la comuna
	        url_ws : location.protocol+'//domain.com/labs/ws/' //Url donde apuntara tu WS, en este caso obtiene el protocol (http o https) de acuerdo al entorno
	    },
	    function() {
	    	$.chileRegiones(); //Una vez cargado desde el WS las regiones y comunas como objeto JSON, continuara con el callBack para cargar los select box
		}
	);
```

O bien, puedes crear tus propias llamadas con los recursos dispoibles mencionados anteriormente.

### Acá puedes ver un ejemplo

En la vista `test.ctp` del controller `pages` y la url a ejecutar debería ser `[**TU_DOMINIO**]/pages/test`