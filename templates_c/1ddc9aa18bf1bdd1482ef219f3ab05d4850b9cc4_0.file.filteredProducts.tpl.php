<?php
/* Smarty version 3.1.30, created on 2017-10-12 05:52:54
  from "/Applications/XAMPP/xamppfiles/htdocs/trabajoEspecial/tpeweb/templates/filteredProducts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dee716cd9154_88545322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ddc9aa18bf1bdd1482ef219f3ab05d4850b9cc4' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/trabajoEspecial/tpeweb/templates/filteredProducts.tpl',
      1 => 1507775002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59dee716cd9154_88545322 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-md-12 ml-3 mb-2  product-shower-separator ">
        <div class="row">
            <div class="col-md-3 ml-4 p-2 category-indicator">
                <span><?php echo $_smarty_tpl->tpl_vars['categoryName']->value;?>
</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 product-shower ">  
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
            <div class="product-box m-3 p-2 ">
                <h2>
                    <?php echo $_smarty_tpl->tpl_vars['product']->value["nombre"];?>

                </h2>
                <div>
                    <p><?php echo $_smarty_tpl->tpl_vars['product']->value["descripcion"];?>
</p>
                </div>
                <div>
                    <span>Precio: <?php echo $_smarty_tpl->tpl_vars['product']->value["precio"];?>
$</span>
                </div>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value["descuento"] > 0;
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1) {?>
                    <div>
                        <span>Descuento: <?php echo $_smarty_tpl->tpl_vars['product']->value["descuento"];?>
%</span>
                    </div>
                <?php }?>
                <div>
                    <?php $_smarty_tpl->_assignInScope('index', $_smarty_tpl->tpl_vars['product']->value["id_categoria"]-1);
?>
                    <span><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['index']->value]["nombre"];?>
</span>
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    
            </div>   
        </div>         
    </div>
</div><?php }
}
