<?php /* Smarty version Smarty-3.1.18, created on 2015-08-14 06:24:30
         compiled from ".\templates\list.templates.templates" */ ?>
<?php /*%%SmartyHeaderCode:2372155cd5f6ed4adf4-48408373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15e18c3f2679e4de922b66e6bd03439e3550a52f' => 
    array (
      0 => '.\\templates\\list.templates.templates',
      1 => 1439522658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2372155cd5f6ed4adf4-48408373',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'arrayvar' => 0,
    'itemvar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55cd5f6edc6aa3_44314175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cd5f6edc6aa3_44314175')) {function content_55cd5f6edc6aa3_44314175($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['itemvar'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemvar']->_loop = false;
 $_smarty_tpl->tpl_vars['keyvar'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrayvar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemvar']->key => $_smarty_tpl->tpl_vars['itemvar']->value) {
$_smarty_tpl->tpl_vars['itemvar']->_loop = true;
 $_smarty_tpl->tpl_vars['keyvar']->value = $_smarty_tpl->tpl_vars['itemvar']->key;
?>
    <?php echo $_smarty_tpl->tpl_vars['itemvar']->value["title"];?>

<?php } ?><?php }} ?>
