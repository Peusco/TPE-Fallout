<?php
/* Smarty version 3.1.39, created on 2021-09-27 02:21:13
  from 'C:\xampp\htdocs\proyectos\WEB 2\TPE\falloutTPE1\templates\allCategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61510e7922f562_95492302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f1f2de18c0a0f594db63ce9b0b39fcdec82da15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB 2\\TPE\\falloutTPE1\\templates\\allCategories.tpl',
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
function content_61510e7922f562_95492302 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="main">
    <section class="home" id="home">
        <div class="home-container re-container re-grid all-grid">
            <div class="home-info">
                <h1 class="categories-title">All categories</h1>
                
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                    <div>
                        <h2><a href="Category/<?php echo $_smarty_tpl->tpl_vars['category']->value->name_category;?>
" class="categories-subtitle"><?php echo $_smarty_tpl->tpl_vars['category']->value->name_category;?>
</a></h2>
                        <p class="categories-p"><?php echo $_smarty_tpl->tpl_vars['category']->value->description_category;?>
</p>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>

            <div class="admin-img">
                <img class="admin-image" src="assets/img/allCategoriesVaultBoy.png" alt="vaultBoy.png">
            </div>
        </div>
    </section>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
