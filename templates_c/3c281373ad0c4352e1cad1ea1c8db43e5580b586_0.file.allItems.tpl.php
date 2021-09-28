<?php
/* Smarty version 3.1.39, created on 2021-09-26 20:04:01
  from 'C:\xampp\htdocs\proyectos\WEB 2\TPE\falloutTPE1\templates\allItems.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6150b611bb5ce6_23580469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c281373ad0c4352e1cad1ea1c8db43e5580b586' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB 2\\TPE\\falloutTPE1\\templates\\allItems.tpl',
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
function content_6150b611bb5ce6_23580469 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="main">
    <section class="home" id="home">
        <div class="home-container re-container re-grid gridAllItems">
            <div class="home-info">
                <div class="items-list">
                    <ul class="all-items-list">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                            <li><a class="all-items-item" href="Item/<?php echo $_smarty_tpl->tpl_vars['item']->value->name_item;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->name_item;?>
</a>/ <?php echo $_smarty_tpl->tpl_vars['item']->value->category;?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            </div>

            <div class="admin-img">
                <img class="admin-image" src="assets/img/allItems.png" alt="vaultBoy.png">
            </div>
        </div>
    </section>
</main>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
