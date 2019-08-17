<?php
    require_once('libs/Smarty.class.php');

    $smarty = new Smarty();
    $smarty->template_dir = 'templates/';
    $smarty->compile_dir = 'template_c/';
    $smarty->config_dir = 'configs/';
    $smarty->cache_dir = 'cache/';

    $a = array("リンゴ","バナナ","みかん","ジャガイモ","トマト");
    $smarty->assign("items", $a);

    $smarty->display("example6-3-2.tpl");

?>