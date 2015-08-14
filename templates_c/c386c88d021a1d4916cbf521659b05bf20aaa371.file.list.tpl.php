<?php /* Smarty version Smarty-3.1.18, created on 2015-08-14 06:31:18
         compiled from ".\templates\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2371655cd5fea5d5325-38199541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c386c88d021a1d4916cbf521659b05bf20aaa371' => 
    array (
      0 => '.\\templates\\list.tpl',
      1 => 1439523075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2371655cd5fea5d5325-38199541',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55cd5fea62a304_90580696',
  'variables' => 
  array (
    'data' => 0,
    'itemvar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cd5fea62a304_90580696')) {function content_55cd5fea62a304_90580696($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['itemvar'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemvar']->_loop = false;
 $_smarty_tpl->tpl_vars['keyvar'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemvar']->key => $_smarty_tpl->tpl_vars['itemvar']->value) {
$_smarty_tpl->tpl_vars['itemvar']->_loop = true;
 $_smarty_tpl->tpl_vars['keyvar']->value = $_smarty_tpl->tpl_vars['itemvar']->key;
?>
    <article>
        <header>
            <aside>
                <p>Дата: <?php echo $_smarty_tpl->tpl_vars['itemvar']->value["dt"];?>
</p>
            </aside>
            <h1><?php echo $_smarty_tpl->tpl_vars['itemvar']->value["title"];?>
</h1>
        </header>
        <p><?php echo $_smarty_tpl->tpl_vars['itemvar']->value["body"];?>
</p>
        <a class="links" href="http://localhost/news/index.php?action=edit&id=<?php echo $_smarty_tpl->tpl_vars['itemvar']->value["id"];?>
">Редагувати</a>
        <a class="links" href="#delete-<?php echo $_smarty_tpl->tpl_vars['itemvar']->value["id"];?>
">Видалити </a>


        <a href="#x-<?php echo $_smarty_tpl->tpl_vars['itemvar']->value["id"];?>
" class="overlay" id="delete-<?php echo $_smarty_tpl->tpl_vars['itemvar']->value["id"];?>
"></a>
        <div class="popup">
            <div id = "deleteMessage">
                Ви,справді хочете видалити цей запис?
                <div id = title_delete_note>
                    "$row[title]"
                </div>
            </div>
            <a class="close"title="Закрыть" href="http://localhost/news/"></a>
            <a href="http://localhost/news/index.php?action=delete&id=<?php echo $_smarty_tpl->tpl_vars['itemvar']->value["id"];?>
" id="deleteButton">Так, я впевнений у своїх діях</a>
        </div>
    </article>
<?php } ?><?php }} ?>
