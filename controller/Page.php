<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 22.03.2019
 * Time: 1:18
 */

class Page
{
    public function get_body($direct,$file) {
        ob_start();
        include $direct.'/'.$file.'.php';
        return ob_get_clean();
    }
}