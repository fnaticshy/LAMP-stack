<?php
$base_path = __DIR__ . '/';
echo $base_path;

require_once $base_path . 'modules/settings.php';
require_once $base_path . 'modules/helpers.php';

require_once $base_path . 'modules/Models/Image.php';
require_once $base_path . 'modules/Controllers/BaseController.php';
require_once $base_path . 'modules/Controllers/Images.php';

require_once $base_path . 'modules/router.php';

//function autoloader($class) {
//    $path = 'modules/' . $class;
//    require $path . '.php';
//}
//
//spl_autoload_register('autoloader');