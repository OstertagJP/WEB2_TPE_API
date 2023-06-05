<?php
/* Smarty version 4.3.1, created on 2023-06-04 18:06:45
  from 'C:\xampp\htdocs\tpe\templates\game_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647cb695536587_27338920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c71988261c42c18b601ed80b7d763184bf0c0bcd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\game_list.tpl',
      1 => 1685894801,
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
function content_647cb695536587_27338920 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>






<!-- lista de tareas -->
<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, 'game');
$_smarty_tpl->tpl_vars['game']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->do_else = false;
?>
        <li>Nombre: <?php echo $_smarty_tpl->tpl_vars['game']->value->name_game;?>
  </li>
        <li>Descripcion: <?php echo $_smarty_tpl->tpl_vars['game']->value->description_game;?>
</li>
        <li>Genero: <?php echo $_smarty_tpl->tpl_vars['game']->value->name_genre;?>
</li>
        
<a href="detalle/<?php echo $_smarty_tpl->tpl_vars['game']->value->id_game;?>
">detalle</a>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
