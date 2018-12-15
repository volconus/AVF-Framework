<?php
/* Smarty version 3.1.30, created on 2017-03-12 19:07:03
  from "C:\wamp\www\bet-admin\app\admin\view\dashboard\fire.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c57227831a88_03714228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f45f8aed23e757c2c19ed69eb9913b28e69fd5e' => 
    array (
      0 => 'C:\\wamp\\www\\bet-admin\\app\\admin\\view\\dashboard\\fire.tpl',
      1 => 1489334822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c57227831a88_03714228 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2102358c572277faf84_93157833';
echo '<script'; ?>
>
    $(document).ready(function () {
        get('dashboard', null, '.page-content');
    });
<?php echo '</script'; ?>
><?php }
}
