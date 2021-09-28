<?php
/* Smarty version 3.1.39, created on 2021-09-26 20:25:56
  from 'C:\xampp\htdocs\proyectos\WEB 2\TPE\falloutTPE1\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6150bb348678e8_58348423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '270f351b8e8fdc0f3d7767ee5284a11db97c665a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB 2\\TPE\\falloutTPE1\\templates\\login.tpl',
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
function content_6150bb348678e8_58348423 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="main">
    <section class="home" id="home">
        <div class="home-container re-container re-grid">
            <div class="home-info">
                <h1 class="login-title">User login</h1>
                <form class="login-form">
                    <label for="userName">User name</label>
                    <input type="text" name="userName">
                    <label for="password">Password</label>
                    <input type="password" name="password">
                    <button class="loginBtn">Log in</button>
                    <a href="adminlogin" class="loginBtnAdmin">Log in as administrator</a>
                </form>
            </div>

            <div class="admin-img">
                <img class="admin-image login-img" src="assets/img/loginVaultBoy.png" alt="vaultBoy.png">
            </div>
        </div>
    </section>
</main>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
