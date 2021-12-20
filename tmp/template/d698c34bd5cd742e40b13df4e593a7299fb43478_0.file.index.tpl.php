<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-15 15:29:45
  from 'C:\xampp\htdocs\veterinaria\views\usuarios\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61ba34190193d8_66148905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd698c34bd5cd742e40b13df4e593a7299fb43478' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\usuarios\\index.tpl',
      1 => 1639592982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_61ba34190193d8_66148905 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="col-md-8 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                   
                </h3>

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php if ((isset($_smarty_tpl->tpl_vars['usuarios']->value)) && count($_smarty_tpl->tpl_vars['usuarios']->value)) {?>
                    <table class="table table-hover">
                        <tr>
                            <th>Nombre</th>
                            <th>Fecha inicio</th>
                            <th>Fecha termino</th>
                            <th>Direccion IP</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?>
                            <tr>
                         
                           
                                 <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['funcionario']['nombre'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['created_at'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['updated_at'];?>
</td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                <?php } else { ?>
                    <p class="text-info">No hay funcionarios registrados</p>
                <?php }?>
            </div>
        </div>
    </div>
</section> <!-- .section --><?php }
}
