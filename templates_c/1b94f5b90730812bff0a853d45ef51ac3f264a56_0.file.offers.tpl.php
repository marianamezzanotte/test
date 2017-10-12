<?php
/* Smarty version 3.1.30, created on 2017-10-12 05:53:04
  from "/Applications/XAMPP/xamppfiles/htdocs/trabajoEspecial/tpeweb/templates/offers.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dee720efc6f3_14542062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b94f5b90730812bff0a853d45ef51ac3f264a56' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/trabajoEspecial/tpeweb/templates/offers.tpl',
      1 => 1507775002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:filteredOffers.tpl' => 1,
  ),
),false)) {
function content_59dee720efc6f3_14542062 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-md-2">
        <div class="row">
            <div class="col-md-12 mb-1">
                <button class="btn btn-default ml-2 js-offers-buttons category-button" id="allOffersButton">
                    Todas
                </button>
            </div>
        </div>       
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
        <div class="row">
            <div class="col-md-12 mb-1">
                <button class="btn btn-default ml-2  js-offers-buttons category-button" id="<?php echo $_smarty_tpl->tpl_vars['category']->value['id_categoria'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['category']->value["nombre"];?>

                </button>
            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    
    </div>
    <div class="col-md-9 js-offers">
        <?php $_smarty_tpl->_subTemplateRender("file:filteredOffers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
</div><?php }
}
