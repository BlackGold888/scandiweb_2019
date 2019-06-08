<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 22.03.2019
 * Time: 1:16
 */

require 'module/Database.php';
require 'configure.php';
spl_autoload_register(function ($class) {
    include 'controller/' . $class . '.php';
});



$init = "";
if (isset($_GET['page'])) {
    $init = strip_tags($_GET['page']);
}
$page = new Page();
switch ($init) {
    case 'disc':
        echo $page->get_body('view','add');
        break;
    case 'book':
        echo $page->get_body('view','add');
        break;
    case 'furniture':
        echo $page->get_body('view','add');
        break;
    default:
        echo $page->get_body('view','main');
        break;
}




?>