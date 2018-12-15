<?php
/* Smarty version 3.1.30, created on 2017-04-14 14:56:04
  from "C:\wamp\www\bet-admin\app\admin\view\swarm\reload.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f0b8d47b82f4_32483764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c2ec1ba940c70b3593a6207bc18b357d016b37f' => 
    array (
      0 => 'C:\\wamp\\www\\bet-admin\\app\\admin\\view\\swarm\\reload.tpl',
      1 => 1492090131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f0b8d47b82f4_32483764 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1381558f0b8d472f778_30576667';
echo '<script'; ?>
>
        swarmSend({
            command: "get",
            rid: "getCompetitions",
            params: {
                source: "betting",
                what: {
                    competition: []
                },
                where: {},
                subscribe: false
            }
        });
<?php echo '</script'; ?>
><?php }
}
