<?php
/* Smarty version 3.1.40, created on 2021-11-16 09:46:40
  from 'C:\phpstudy_pro\WWW\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61930d804c2591_12173338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '285fdb06251bdfab7d36369cc5e88f359a4eae35' => 
    array (
      0 => 'C:\\phpstudy_pro\\WWW\\templates\\index.html',
      1 => 1637027116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
    'file:top.html' => 1,
    'file:container_index.html' => 1,
    'file:footer.html' => 1,
    'file:scripts.html' => 1,
  ),
),false)) {
function content_61930d804c2591_12173338 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh-cn">
    <head>
        <?php $_smarty_tpl->_subTemplateRender('file:head.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </head>
    <body class="index">
        <?php $_smarty_tpl->_subTemplateRender('file:top.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="pusher ui body">
            <?php $_smarty_tpl->_subTemplateRender('file:container_index.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender('file:footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <?php $_smarty_tpl->_subTemplateRender('file:scripts.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </body>
</html><?php }
}
