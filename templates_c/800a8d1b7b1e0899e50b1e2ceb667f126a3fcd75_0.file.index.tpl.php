<?php
/* Smarty version 3.1.30, created on 2017-10-12 05:13:25
  from "/Applications/XAMPP/xamppfiles/htdocs/trabajoEspecial/tpeweb/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59deddd52b2947_72198170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '800a8d1b7b1e0899e50b1e2ceb667f126a3fcd75' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/trabajoEspecial/tpeweb/templates/index.tpl',
      1 => 1507775002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:dependences.tpl' => 1,
  ),
),false)) {
function content_59deddd52b2947_72198170 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <body>
        <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <article>
            <div class="container-fluid content-space js-section-content mt-3">
                
            </div>
        </article>
        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </body>
    <?php $_smarty_tpl->_subTemplateRender("file:dependences.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html><?php }
}
