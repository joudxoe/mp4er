<?php
/* Smarty version 3.1.40, created on 2021-11-16 10:00:06
  from 'C:\phpstudy_pro\WWW\templates\film.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_619310a6883086_29299655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef742f63d3081ff0b4d4923ce0de5cf4ddf538b0' => 
    array (
      0 => 'C:\\phpstudy_pro\\WWW\\templates\\film.html',
      1 => 1637027966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
    'file:top.html' => 1,
    'file:container_film.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_619310a6883086_29299655 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh-cn">

<head>
    <?php $_smarty_tpl->_subTemplateRender('file:head.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender('file:top.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="pusher ui body">
        <?php $_smarty_tpl->_subTemplateRender('file:container_film.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender('file:footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</body>
</html><?php }
}
