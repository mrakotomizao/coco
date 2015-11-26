<?php
/**
 * Created by PhpStorm.
 * User: Guizmo
 * Date: 20/04/2015
 * Time: 23:09
 */
define("ENV","dev");

define('APP_ID','476959155844258');
define('APP_SECRET','b3d25cbfe25ac48aca06ef4c14aaf6af');

if(ENV=="dev"){
    define('REDIRECT_URL','http://localhost/casino/');
    define('SERVERBD','mysql:host=localhost');
    define('DBNAME','coco');
    define('USERNAME','root');
    define('PWD','root');

}else{
    define('REDIRECT_URL','https://project-coco.herokuapp.com/pages/page_roulette.php');
    define('SERVERBD','pgsql:host=ec2-54-163-228-0.compute-1.amazonaws.com');
    define('DBNAME','d1nttj2qfni6tg');
    define('USERNAME','puecnxpywhyifz');
    define('PWD','pONg0Qh-TgyhEJ-InlZigt9eCP');
}