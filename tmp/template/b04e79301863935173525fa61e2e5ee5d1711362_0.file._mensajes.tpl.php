<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-14 16:33:02
  from 'C:\xampp\htdocs\veterinaria\views\partials\_mensajes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61b8f16e6f1d13_81737205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b04e79301863935173525fa61e2e5ee5d1711362' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\partials\\_mensajes.tpl',
      1 => 1638823778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b8f16e6f1d13_81737205 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['_error']->value))) {?>
    <div style="margin-top: 40px;"></div>
    <p class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
</p>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['_mensaje']->value))) {?>
    <div style="margin-top: 40px;"></div>
    <p class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>
</p>
<?php }
}
}
