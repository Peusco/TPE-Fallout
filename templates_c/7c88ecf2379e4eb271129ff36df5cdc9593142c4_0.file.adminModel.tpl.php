<?php
/* Smarty version 3.1.39, created on 2021-09-27 02:14:20
  from 'C:\xampp\htdocs\proyectos\WEB 2\TPE\falloutTPE1\templates\adminModel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61510cdc97e5a9_40318262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c88ecf2379e4eb271129ff36df5cdc9593142c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB 2\\TPE\\falloutTPE1\\templates\\adminModel.tpl',
      1 => 1632701647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61510cdc97e5a9_40318262 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main class="main">
    <section class="home" id="home">
        <article>
       
            <table>
                <thead>
                    <tr>
                        <td>id_item</td>
                        <td>name_item</td>
                        <td>description_item</td>
                        <td>weight_item</td>
                        <td>category</td>
                    </tr>
                </thead>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value->name_item == $_smarty_tpl->tpl_vars['search']->value) {?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->id_item;?>
  </td>  
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->name_item;?>
  </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->description_item;?>
 </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->weight_item;?>
 </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->category;?>
 </td>
                        </tr>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </article>


        <article>
            <button id="edit">Edit</button>
            <a href="deleteItem/<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
">Delete</a>
        </article> 


        <article id="editItem" class="item">
            <form action="editItem/<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" method="post">
            <table>
                <thead>
                    <tr>
                        <td>id_item</td>
                        <td>name_item</td>
                        <td>description_item</td>
                        <td>weight_item</td>
                        <td>category</td>
                    </tr>
                </thead>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value->name_item == $_smarty_tpl->tpl_vars['search']->value) {?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->id_item;?>
</td>  
                            <td><input name="nameItem" placeholder ="<?php echo $_smarty_tpl->tpl_vars['item']->value->name_item;?>
">  </td>
                            <td><input name="desciptionItem" placeholder ="<?php echo $_smarty_tpl->tpl_vars['item']->value->description_item;?>
"> </td>
                            <td><input name="weightItem" placeholder ="<?php echo $_smarty_tpl->tpl_vars['item']->value->weight_item;?>
"> </td>
                            <td><input name="itemCategory" placeholder ="<?php echo $_smarty_tpl->tpl_vars['item']->value->category;?>
"> </td>
                        </tr>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
            <button type="submmit">Send</button>
            </form>
        </article>
    </section>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
