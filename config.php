<?php

    require __DIR__.'/vendor/autoload.php';

    define('SITE_ROOT',str_replace('\\','/',__DIR__));

    $smarty=new Smarty();

    $smarty->left_delimiter='{{';
    $smarty->right_delimiter='}}';
    $smarty->setTemplateDir(SITE_ROOT.'/templates/');
    $smarty->setCompileDir(SITE_ROOT.'/templates_c/');