<?php
/* Smarty version 3.1.39, created on 2021-09-26 20:04:00
  from 'C:\xampp\htdocs\proyectos\WEB 2\TPE\falloutTPE1\templates\landingPageMain.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6150b610636789_89384754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca27bbac9a6ca04b0a13080f2426cd9fe3b5d363' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB 2\\TPE\\falloutTPE1\\templates\\landingPageMain.tpl',
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
function content_6150b610636789_89384754 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="main">
    <section class="home" id="home">
        <div class="home-container re-container re-grid home-grid">
            <div class="home-info">
                <h1 class="home-title">Fallout 4 <br>items database <br>in a friendly <br>way.</h1>
                <a href="allCategories" class="button">Take a look!</a>
            </div>
            
            <div class="home-img">
                <img class="home-image" src="assets/img/vault boy.png" alt="vaultBoy.png">
            </div>
        </div>
    </section>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
