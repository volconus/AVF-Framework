<?php
/* Smarty version 3.1.30, created on 2017-04-14 15:02:13
  from "C:\wamp\www\bet-admin\app\admin\view\swarm\reload.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f0ba45a15a71_53738043',
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
  'cache_lifetime' => 0,
),true)) {
function content_58f0ba45a15a71_53738043 (Smarty_Internal_Template $_smarty_tpl) {
?>
<script>
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
</script><?php }
}
