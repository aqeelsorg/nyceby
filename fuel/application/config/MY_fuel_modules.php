<?php 
/*
|--------------------------------------------------------------------------
| MY Custom Modules
|--------------------------------------------------------------------------
|
| Specifies the module controller (key) and the name (value) for fuel
*/


/*********************** EXAMPLE ***********************************

$config['modules']['quotes'] = array(
	'preview_path' => 'about/what-they-say',
);

$config['modules']['projects'] = array(
	'preview_path' => 'showcase/project/{slug}',
	'sanitize_images' => FALSE // to prevent false positives with xss_clean image sanitation
);

*********************** EXAMPLE ***********************************/

$config['modules']['authors'] = array(
    'preview_path' => 'authors'
);

$config['modules']['articles'] = array(
    'preview_path' => 'example/{slug}',
    

);  

$config['modules']['news'] = array(
    'preview_path' => 'news/{slug}'
);


$config['modules']['categories'] = array('preview_path' => 'categories');



