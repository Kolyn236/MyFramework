<?php
/**
 * Created by PhpStorm.
 * User: mst
 * Date: 15.01.2017
 * Time: 16:33
 */

namespace app;

define("SITE_TEMPLATE_PATH", $_SERVER["DOCUMENT_ROOT"]."/MyFramework/php_for_me"."/views/template/");
define("JS_PATH", "views/js/");




class App
{
    public function pageStart($page){
        include_once (SITE_TEMPLATE_PATH. $page . ".php");
    }
    public function start(){
        include (SITE_TEMPLATE_PATH."index.php");
    }
}