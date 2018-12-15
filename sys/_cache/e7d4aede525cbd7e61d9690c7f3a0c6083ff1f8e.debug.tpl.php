<?php
/* Smarty version 3.1.30, created on 2017-02-25 23:22:04
  from "C:\wamp\www\intranet\debug.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b1e76c1e0140_87123291',
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
  'cache_lifetime' => 0,
),true)) {
function content_58b1e76c1e0140_87123291 (Smarty_Internal_Template $_smarty_tpl) {
?>
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>

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


<div class="debugFrameTitle" id="debugPanelTitle">Page Load Time : 0.0369</div>

<div class="debugFrame">

    <table>


        <tr style="color: #f1f1f1">
            <td>Text</td>
            <td>Method</td>
            <td>Line</td>
            <td>Time</td>
        </tr>

        
            <tr style="color: grey;">
                <td>C:\wamp\www\intranet\sys\core/../../sys/core/router.php bulundu ve yüklendi.</td>
                <td>sys\core::autoload</td>
                <td>185</td>
                <td>0.0048999786376953</td>
            </tr>

        
            <tr style="color: orange;">
                <td>APP Config dosyası bulunamadı. APP ana configden çalışacak.</td>
                <td>sys\core::readConfig</td>
                <td>69</td>
                <td>0.0098998546600342</td>
            </tr>

        
            <tr style="color: grey;">
                <td>Main Config yüklendi.</td>
                <td>sys\core::readConfig</td>
                <td>75</td>
                <td>0.010900020599365</td>
            </tr>

        
            <tr style="color: grey;">
                <td>C:\wamp\www\intranet\sys\core/../../app/intranet/controller/test/test.php başarı ile yüklendi</td>
                <td>sys\core::controllerExist</td>
                <td>144</td>
                <td>0.010900020599365</td>
            </tr>

        
            <tr style="color: grey;">
                <td>getTest bulundu ve çalıştırıldı.</td>
                <td>sys\core::methodExist</td>
                <td>128</td>
                <td>0.010900020599365</td>
            </tr>

        
            <tr style="color: grey;">
                <td>C:\wamp\www\intranet\sys\core/../../sys/core/model.php bulundu ve yüklendi.</td>
                <td>sys\core::autoload</td>
                <td>185</td>
                <td>0.010900020599365</td>
            </tr>

        
            <tr style="color: grey;">
                <td>C:\wamp\www\intranet\sys\core/../../app/intranet/model/test//testModel.php bulundu ve yüklendi.</td>
                <td>sys\core::autoload</td>
                <td>185</td>
                <td>0.010900020599365</td>
            </tr>

        
            <tr style="color: green;">
                <td>Directory : intranet/controller/test Controller test Method : getTest algılandı.</td>
                <td>sys\router::run</td>
                <td>131</td>
                <td>0.030900001525879</td>
            </tr>

        
            <tr style="color: orange;">
                <td>Smarty_Internal_Data Class Route'da bulunmadığı için çalıştırılmadı. </td>
                <td>sys\core::autoload</td>
                <td>182</td>
                <td>0.032899856567383</td>
            </tr>

        
            <tr style="color: grey;">
                <td>C:\wamp\www\intranet\sys\core/../../sys/Smarty.php bulundu ve yüklendi.</td>
                <td>sys\core::autoload</td>
                <td>185</td>
                <td>0.036900043487549</td>
            </tr>

        
            <tr style="color: grey;">
                <td>C:\wamp\www\intranet\sys\core/../../sys/core/view.php bulundu ve yüklendi.</td>
                <td>sys\core::autoload</td>
                <td>185</td>
                <td>0.036900043487549</td>
            </tr>

        

    </table>

</div>


<script>

    $('#debugPanelTitle').click(function() {
        $('.debugFrameTitle').toggleClass('debugFrameTitleOpen');
        $('.debugFrame').toggleClass('debugFrameOpen');
    });

</script><?php }
}
