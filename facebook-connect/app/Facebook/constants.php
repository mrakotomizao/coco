<?php
/**
 * Created by PhpStorm.
 * User: Guizmo
 * Date: 20/04/2015
 * Time: 23:09
 */
define("ENV","prod");
define('APP_ID','476959155844258');
define('APP_SECRET','b3d25cbfe25ac48aca06ef4c14aaf6af');
if(ENV=="dev"){
    define('REDIRECT_URL','http://localhost:8888/COCO/pages/page_roulette.php');
}else{
    define('REDIRECT_URL','https://project-coco.herokuapp.com/');
}