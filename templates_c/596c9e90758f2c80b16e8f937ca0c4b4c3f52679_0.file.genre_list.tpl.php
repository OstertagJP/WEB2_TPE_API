<?php
/* Smarty version 4.3.1, created on 2023-06-12 22:39:45
  from 'C:\xampp\htdocs\repo_tpe_web2\tpe_web2\templates\genre_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64878291de4b72_08300247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '596c9e90758f2c80b16e8f937ca0c4b4c3f52679' => 
    array (
      0 => 'C:\\xampp\\htdocs\\repo_tpe_web2\\tpe_web2\\templates\\genre_list.tpl',
      1 => 1686598759,
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
function content_64878291de4b72_08300247 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genres']->value, 'genre');
$_smarty_tpl->tpl_vars['genre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
$_smarty_tpl->tpl_vars['genre']->do_else = false;
?>
        <li>Genero: <?php echo $_smarty_tpl->tpl_vars['genre']->value->name_genre;?>
  </li>
        <li>Descripcion: <?php echo $_smarty_tpl->tpl_vars['genre']->value->description_genre;?>
</li>
        
               
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
