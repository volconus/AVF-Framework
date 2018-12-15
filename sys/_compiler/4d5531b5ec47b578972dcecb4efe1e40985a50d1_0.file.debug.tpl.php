<?php
/* Smarty version 3.1.30, created on 2017-01-07 09:11:01
  from "/Applications/XAMPP/xamppfiles/htdocs/phpframework/debug.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5870a29521c104_27772329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d5531b5ec47b578972dcecb4efe1e40985a50d1' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/phpframework/debug.tpl',
      1 => 1483776660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5870a29521c104_27772329 (Smarty_Internal_Template $_smarty_tpl) {
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


<div class="debugFrameTitle" id="debugPanelTitle">Page Load Time : <?php echo end($_smarty_tpl->tpl_vars['data']->value['time']);?>
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
