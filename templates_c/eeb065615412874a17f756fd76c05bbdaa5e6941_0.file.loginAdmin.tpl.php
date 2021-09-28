<?php
/* Smarty version 3.1.39, created on 2021-09-26 20:25:57
  from 'C:\xampp\htdocs\proyectos\WEB 2\TPE\falloutTPE1\templates\loginAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6150bb35bcbd52_34415418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eeb065615412874a17f756fd76c05bbdaa5e6941' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB 2\\TPE\\falloutTPE1\\templates\\loginAdmin.tpl',
      1 => 1632679384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/adminHeader.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6150bb35bcbd52_34415418 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/adminHeader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="main">
    <section class="home" id="home">
        <div class="home-container re-container re-grid">
            <div class="home-info">
                <h1 class="admin-login-title">Admin login</h1>
                <form class="admin-login-form">
                    <label class="admin-label" for="adminName">Admin name</label>
                    <input class="admin-input" type="text" name="adminName">
                    <label class="admin-label" for="adminPassword">Password</label>
                    <input class="admin-input" type="password" name="adminPassword">
                    <label class="admin-label" for="adminKey">Security key</label>
                    <input class="admin-input" type="password" name="adminKey">
                    <button class="loginAdmin">Log in</button>
                </form>
                <a href="admin" class="admin-404">support@gmail.com</a>
            </div>

            <div class="admin-img">
                <img class="admin-image" src="assets/img/adminImage.png" alt="vaultBoy.png">
                <p class="admin-message">"Don't worry, I only test the weapons on customers I don't like." -Assaultron</p>
            </div>
        </div>
    </section>
</main>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
