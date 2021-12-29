<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-29 20:05:27
  from 'C:\xampp\htdocs\veterinaria\views\registros\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61cce9b7ec46c7_02082089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a8c7915be5c44a609f33f6d10e4ba924a90cf95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\registros\\index.tpl',
      1 => 1640819125,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_61cce9b7ec46c7_02082089 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\veterinaria\\libs\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="col-md-8 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                   
                </h3>

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php if ((isset($_smarty_tpl->tpl_vars['registros']->value)) && count($_smarty_tpl->tpl_vars['registros']->value)) {?>
                    <table class="table table-hover">
                        <tr>
                            <th>ID usuario</th>
                            <th>Fecha ingreso</th>
                            <th>Fecha salida</th>
                            <th>Direccion IP</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['registros']->value, 'registro');
$_smarty_tpl->tpl_vars['registro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['registro']->value) {
$_smarty_tpl->tpl_vars['registro']->do_else = false;
?>
                            <tr>
                          
                               <td>
                                     <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
registros/view/<?php echo $_smarty_tpl->tpl_vars['registro']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['registro']->value['id'];?>
</a>
                                </td>
                           
                           
                                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['registro']->value['created_at'],"%d-%m-%Y %H:%M:%S");?>
</td>
                                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['registro']->value['updated_at'],"%d-%m-%Y %H:%M:%S");?>
</td>                              
                                <td><?php echo $_smarty_tpl->tpl_vars['registro']->value['ip'];?>
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
