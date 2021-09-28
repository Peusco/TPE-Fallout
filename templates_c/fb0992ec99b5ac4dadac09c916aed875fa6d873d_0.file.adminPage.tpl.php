<?php
/* Smarty version 3.1.39, created on 2021-09-26 23:30:29
  from 'C:\xampp\htdocs\proyectos\WEB 2\TPE\falloutTPE1\templates\adminPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6150e675c9ad05_79524855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb0992ec99b5ac4dadac09c916aed875fa6d873d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB 2\\TPE\\falloutTPE1\\templates\\adminPage.tpl',
      1 => 1632691711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6150e675c9ad05_79524855 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <main class="main">
        <section class="home" id="home">
            <div class="home-container re-container re-grid">
                    <div>
                        <form action="createItem" method="post">
                            <label for="name">Name</label>
                            <input type="text" name="name">
    
                            <label for="description">Description</label>
                            <input type="text" name="description">
    
                            <label for="weight">Weight</label>
                            <input type="text" name="weight">
    
                            <label for="weight">Category</label>
                            <input type="text" name="category">
    
                            <button type="submit">+</button>
                        </form>
                      
                    </div>

                    <div>
                        <form action="adminSearch" method="post">
                            <label for="search">Search</label>
                            <input type="text" name="search">
                            
                            <button type="submit" value="edit" id="searchItem">Edit</button>
                        </form>    
                    </div>

                    
            </div>
        </section>
    </main>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
