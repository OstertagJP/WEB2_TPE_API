<?php
/* Smarty version 4.3.1, created on 2023-06-13 01:18:14
  from 'C:\xampp\htdocs\repo_tpe_web2\tpe_web2\templates\game_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6487a7b6ec4555_02990465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '290bef404d0ec204f6f0547c1dc76a2d1dc9ac92' => 
    array (
      0 => 'C:\\xampp\\htdocs\\repo_tpe_web2\\tpe_web2\\templates\\game_details.tpl',
      1 => 1686611877,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/head.tpl' => 1,
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6487a7b6ec4555_02990465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>sxxxxxxxx</h1>
<?php echo $_smarty_tpl->tpl_vars['game']->value->description_game;?>


<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
