<?php
/* Smarty version 3.1.30, created on 2017-01-28 15:18:11
  from "C:\wamp\www\intranet\debug.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588cb63390c683_11077703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0ee17da3c7911609563380d657f5c3722e75dde' => 
    array (
      0 => 'C:\\wamp\\www\\intranet\\debug.tpl',
      1 => 1483878379,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_588cb63390c683_11077703 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '658588cb6337cc186_83759358';
echo '<script'; ?>
 src="https://code.jquery.com/jquery-1.11.3.js"><?php echo '</script'; ?>
>

<style>

    .debugFrame {
        position: absolute;
        bottom: 0px !important;
        right: 0px !important;
        left: 0px !important;
        height: 300px;
        width: 100%;
        border: 1px solid black;
        background-color: #1e1e1e;
        padding: 0px;
        font-family: Arial;
        border: 2px solid black;
        display: none;
        overflow: auto;
    }

    .debugFrameOpen{
        display: block;
    }

    .debugFrameTitle{
        background-color: black;
        padding: 5px;
        position: absolute;
        bottom: 0px;
        color: #f1f1f1;
        font-family: Arial;
        font-size: 13px;
        cursor: pointer;
    }

    .debugFrameTitleOpen{
        bottom: 300px !important;
    }

    .debugFrame table{
        font-size: 13px;
        line-height: 17px;
        width: 100%;
        margin: 0px !important;
    }

</style>


<div class="debugFrameTitle" id="debugPanelTitle">Page Load Time : <?php echo sprintf("%.4f",end($_smarty_tpl->tpl_vars['data']->value['time']));?>
</div>

<div class="debugFrame">

    <table>


        <tr style="color: #f1f1f1">
            <td>Text</td>
            <td>Method</td>
            <td>Line</td>
            <td>Time</td>
        </tr>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['text'], 'text', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['text']->value) {
?>

            <tr style="color: <?php echo $_smarty_tpl->tpl_vars['data']->value['color'][$_smarty_tpl->tpl_vars['k']->value];?>
;">
                <td><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value['method'][$_smarty_tpl->tpl_vars['k']->value];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value['line'][$_smarty_tpl->tpl_vars['k']->value];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value['time'][$_smarty_tpl->tpl_vars['k']->value];?>
</td>
            </tr>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </table>

</div>


<?php echo '<script'; ?>
>

    $('#debugPanelTitle').click(function() {
        $('.debugFrameTitle').toggleClass('debugFrameTitleOpen');
        $('.debugFrame').toggleClass('debugFrameOpen');
    });

<?php echo '</script'; ?>
><?php }
}
