<?php
/* Smarty version 3.1.40, created on 2021-11-15 16:16:31
  from 'C:\xampp\htdocs\templates\category.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_619279cfdb7350_83083551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b21f4cf9804842e026f86cf233cb8aa05fe169d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\category.html',
      1 => 1636989318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
    'file:top.html' => 1,
    'file:filter.html' => 1,
    'file:container_category.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_619279cfdb7350_83083551 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh-cn">
    <head>
        <?php $_smarty_tpl->_subTemplateRender('file:head.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </head>
    <body>
        <?php $_smarty_tpl->_subTemplateRender('file:top.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="pusher ui body play-body">
            <?php $_smarty_tpl->_subTemplateRender('file:filter.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender('file:container_category.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender('file:footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </body>
</html><?php }
}
