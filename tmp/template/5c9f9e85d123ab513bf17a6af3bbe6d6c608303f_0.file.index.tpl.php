<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-28 22:05:10
  from 'C:\xampp\htdocs\veterinaria\views\admin\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61cbb446c27425_74347947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c9f9e85d123ab513bf17a6af3bbe6d6c608303f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\admin\\index.tpl',
      1 => 1640739909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61cbb446c27425_74347947 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="ftco-section ftco-degree-bg">
    <div class="container">
            <div class="col-md-6 ftco-animate">
                <div class="sidebar-box ftco-animate">
                    <h3 class="text-success">Registros</h3>
                    <div class="list-group mb-2">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
registros/" class="list-group-item list-group-item-action">Registros</a>
                        
                    </div>
                    <h3 class="text-success">Funcionarios</h3>
                    <div class="list-group mb-2">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
funcionarios/"
                            class="list-group-item list-group-item-action">Funcionarios</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles/" class="list-group-item list-group-item-action">Roles</a>
                    </div>
                </div>
            </div>
    </div>
</section> <!-- .section --><?php }
}
