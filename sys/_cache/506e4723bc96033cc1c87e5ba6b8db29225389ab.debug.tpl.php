<?php
/* Smarty version 3.1.30, created on 2017-01-28 15:16:00
  from "C:\wamp\www\phpframework\debug.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588cb5b0947003_72978713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a47d66ffde9b7c92c7cbb28e8c2af8a4aa15428b' => 
    array (
      0 => 'C:\\wamp\\www\\phpframework\\debug.tpl',
      1 => 1483878379,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_588cb5b0947003_72978713 (Smarty_Internal_Template $_smarty_tpl) {
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


<div class="debugFrameTitle" id="debugPanelTitle">Page Load Time : 0.0640</div>

<div class="debugFrame">

    <table>


        <tr style="color: #f1f1f1">
            <td>Text</td>
            <td>Method</td>
            <td>Line</td>
            <td>Time</td>
        </tr>

        
            <tr style="color: grey;">
                <td>C:\wamp\www\phpframework\sys\core/../../sys/core/router.php bulundu ve yüklendi.</td>
                <td>sys\core::autoload</td>
                <td>186</td>
                <td>0.0099999904632568</td>
            </tr>

        
            <tr style="color: grey;">
                <td>APP Config dosyası yüklendi.</td>
                <td>sys\core::readConfig</td>
                <td>68</td>
                <td>0.013999938964844</td>
            </tr>

        
            <tr style="color: grey;">
                <td>Main Config yüklendi.</td>
                <td>sys\core::readConfig</td>
                <td>76</td>
                <td>0.014999866485596</td>
            </tr>

        
            <tr style="color: red;">
                <td>APP Config ve Main Config birleştirildi</td>
                <td>sys\core::readConfig</td>
                <td>86</td>
                <td>0.014999866485596</td>
            </tr>

        
            <tr style="color: grey;">
                <td>C:\wamp\www\phpframework\sys\core/../../app/alican/controller//homepage.php başarı ile yüklendi</td>
                <td>sys\core::controllerExist</td>
                <td>145</td>
                <td>0.016000032424927</td>
            </tr>

        
            <tr style="color: grey;">
                <td>homepages bulundu ve çalıştırıldı.</td>
                <td>sys\core::methodExist</td>
                <td>129</td>
                <td>0.016000032424927</td>
            </tr>

        
            <tr style="color: orange;">
                <td>Smarty_Internal_Data Class Route'da bulunmadığı için çalıştırılmadı. </td>
                <td>sys\core::autoload</td>
                <td>183</td>
                <td>0.020999908447266</td>
            </tr>

        
            <tr style="color: grey;">
                <td>C:\wamp\www\phpframework\sys\core/../../sys/Smarty.php bulundu ve yüklendi.</td>
                <td>sys\core::autoload</td>
                <td>186</td>
                <td>0.037999868392944</td>
            </tr>

        
            <tr style="color: grey;">
                <td>C:\wamp\www\phpframework\sys\core/../../sys/core/view.php bulundu ve yüklendi.</td>
                <td>sys\core::autoload</td>
                <td>186</td>
                <td>0.037999868392944</td>
            </tr>

        
            <tr style="color: orange;">
                <td>Smarty_Internal_Resource_File Class Route'da bulunmadığı için çalıştırılmadı. </td>
                <td>sys\core::autoload</td>
                <td>183</td>
                <td>0.046000003814697</td>
            </tr>

        
            <tr style="color: orange;">
                <td>Smarty_Template_Cached Class Route'da bulunmadığı için çalıştırılmadı. </td>
                <td>sys\core::autoload</td>
                <td>183</td>
                <td>0.047999858856201</td>
            </tr>

        
            <tr style="color: orange;">
                <td>Smarty_Internal_CacheResource_File Class Route'da bulunmadığı için çalıştırılmadı. </td>
                <td>sys\core::autoload</td>
                <td>183</td>
                <td>0.050999879837036</td>
            </tr>

        
            <tr style="color: orange;">
                <td>Smarty_Internal_Runtime_UpdateCache Class Route'da bulunmadığı için çalıştırılmadı. </td>
                <td>sys\core::autoload</td>
                <td>183</td>
                <td>0.052999973297119</td>
            </tr>

        
            <tr style="color: orange;">
                <td>Smarty_Template_Compiled Class Route'da bulunmadığı için çalıştırılmadı. </td>
                <td>sys\core::autoload</td>
                <td>183</td>
                <td>0.053999900817871</td>
            </tr>

        
            <tr style="color: orange;">
                <td>Smarty_Internal_Runtime_CodeFrame Class Route'da bulunmadığı için çalıştırılmadı. </td>
                <td>sys\core::autoload</td>
                <td>183</td>
                <td>0.057999849319458</td>
            </tr>

        
            <tr style="color: orange;">
                <td>Smarty_Internal_Runtime_WriteFile Class Route'da bulunmadığı için çalıştırılmadı. </td>
                <td>sys\core::autoload</td>
                <td>183</td>
                <td>0.059999942779541</td>
            </tr>

        
            <tr style="color: green;">
                <td>Directory : alican/controller/ Controller homepage Method : homepages algılandı.</td>
                <td>sys\router::run</td>
                <td>131</td>
                <td>0.063999891281128</td>
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
