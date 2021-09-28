<?php
/* Smarty version 3.1.39, created on 2021-09-26 20:04:04
  from 'C:\xampp\htdocs\proyectos\WEB 2\TPE\falloutTPE1\templates\itemDescription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6150b614198af5_25734324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3431b47aa52d98258874bac6f2f6d22237e6e16' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB 2\\TPE\\falloutTPE1\\templates\\itemDescription.tpl',
      1 => 1632679384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6150b614198af5_25734324 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<link rel="stylesheet" href="assets/css/style.css">

<main class="main">
    <section class="home" id="home">
        <div class="home-container re-container re-grid gridAllItems">
                
                <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'object');
$_smarty_tpl->tpl_vars['object']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['object']->value) {
$_smarty_tpl->tpl_vars['object']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['object']->value->name_item == $_smarty_tpl->tpl_vars['item']->value) {?>
                    <h1><?php echo $_smarty_tpl->tpl_vars['object']->value->name_item;?>
</h1>
                   <li>Description:  <?php echo $_smarty_tpl->tpl_vars['object']->value->description_item;?>
</li>
                   <li>Weight : <?php echo $_smarty_tpl->tpl_vars['object']->value->weight_item;?>
</li>
                <?php }?>    
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <ul>
        </div>
    </section>
</main>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
