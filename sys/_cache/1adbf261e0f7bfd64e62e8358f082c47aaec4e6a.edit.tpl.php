<?php
/* Smarty version 3.1.30, created on 2017-05-31 18:27:30
  from "C:\wamp\www\bet-admin\app\admin\view\menu\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592ee0e2806b05_28710777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87641008510bd473febe8f8f402086e38bdd1bb0' => 
    array (
      0 => 'C:\\wamp\\www\\bet-admin\\app\\admin\\view\\menu\\edit.tpl',
      1 => 1492591722,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_592ee0e2806b05_28710777 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="assets/global/plugins/jquery-nestable/jquery.nestable.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGINS -->
<style>
    form#menu div.portlet-body {
        overflow: auto;
        height: 400px;
    }
</style>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="?">Dashboard</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="menus/list">Menus</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Left</span>
        </li>
    </ul>
</div>
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title new-page-title">Left Menu
</h1>
<!-- END PAGE TITLE-->
<form class="returned-form" id="menu" data-url="menus/edit/save" data-return-function="menuEditSave"
      data-loader-result="span#menu-edit-loader">
    <input name="menuId" id="menuId" type="hidden" value="3">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <span class="menu-edit-loader"></span>
                <button class="btn green-haze" type="submit"><span class="fa fa-check-circle-o"></span> Save
                </button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-bubble font-green"></i>
                        <span class="caption-subject font-green sbold uppercase">Available Objects</span>
                        <select name="objectType" id="objectType" class="menu-object-selector hidden">
                            <option value="">Choose One</option>
                            <option value="sports">Sports</option>
                            <option value="regions">Regions</option>
                            <option value="competitions">Competitions</option>
                        </select>
                        <span class="filter" id="filter-1">
                            <select name="sports" id="sports" class="menu-object-sport-selector">
                                <option value="">Choose One</option>
                                                                    <option value="1">Futbol</option>
                                                                    <option value="2">Buz hokeyi</option>
                                                                    <option value="3">Basketbol</option>
                                                                    <option value="4">Tenis</option>
                                                                    <option value="5">Voleybol</option>
                                                                    <option value="6">AMERİKAN FUTBOLU</option>
                                                                    <option value="8">Avustralya futbolu</option>
                                                                    <option value="9">Badminton</option>
                                                                    <option value="11">Beyzbol</option>
                                                                    <option value="12">Plaj Futbolu</option>
                                                                    <option value="14">Plaj voleybolu</option>
                                                                    <option value="15">Biatlon</option>
                                                                    <option value="16">Bowls</option>
                                                                    <option value="17">Boks</option>
                                                                    <option value="18">Satranç</option>
                                                                    <option value="19">Kriket</option>
                                                                    <option value="21">BİSİKLET</option>
                                                                    <option value="22">Dart</option>
                                                                    <option value="24">Florbol</option>
                                                                    <option value="25">Formula 1</option>
                                                                    <option value="26">Salon futbolu</option>
                                                                    <option value="27">Golf</option>
                                                                    <option value="29">Hentbol</option>
                                                                    <option value="30">Çim hokeyi</option>
                                                                    <option value="32">Motor sporları</option>
                                                                    <option value="33">NASCAR</option>
                                                                    <option value="34">Amerikan Bilardo</option>
                                                                    <option value="36">RAGBİ LİGİ</option>
                                                                    <option value="37">RAGBİ BİRLİĞİ</option>
                                                                    <option value="39">Snuker</option>
                                                                    <option value="41">Masa Tenisi</option>
                                                                    <option value="42">Sutopu</option>
                                                                    <option value="44">MMA</option>
                                                                    <option value="54">Sanal At Yarışı</option>
                                                                    <option value="55">Sanal Tazı Yarışı</option>
                                                                    <option value="56">Sanal Tenis</option>
                                                                    <option value="57">Sanal Futbol</option>
                                                                    <option value="69">Gal futbolu</option>
                                                                    <option value="70">Körling</option>
                                                                    <option value="71">E-Futbol</option>
                                                                    <option value="72">Sörf</option>
                                                                    <option value="73">E-Basketbol</option>
                                                                    <option value="75">Counter-Strike: GO</option>
                                                                    <option value="76">Dota 2</option>
                                                                    <option value="77">League of Legends</option>
                                                                    <option value="78">Hearthstone</option>
                                                                    <option value="79">Heroes of the Storm</option>
                                                                    <option value="80">Overwatch</option>
                                                                    <option value="82">StarCraft</option>
                                                                    <option value="83">StarCraft 2</option>
                                                                    <option value="87">Speedway</option>
                                                                    <option value="88">Squash</option>
                                                                    <option value="89">Politika</option>
                                                                    <option value="90">Özel Bahisler</option>
                                                                    <option value="93">Eurovision</option>
                                                                    <option value="95">Ragbi 7</option>
                                                                    <option value="96">Kayaklı koşu</option>
                                                                    <option value="101">Otomobil yarışı</option>
                                                                    <option value="104">Pesapallo</option>
                                                                    <option value="106">Kayakla atlama</option>
                                                                    <option value="108">Netbol</option>
                                                                    <option value="112">Yelken</option>
                                                                    <option value="118">Sanal Araba Yarışı</option>
                                                                    <option value="120">Vainglory</option>
                                                                    <option value="147">TV Shows and Movies</option>
                                                                    <option value="148">Mixed Football</option>
                                                                    <option value="149">Street Fighter V</option>
                                                                    <option value="94">Aklın Yolu Bir</option>
                                
                            </select>
                        </span>
                        <span class="filter" id="filter-2"><select name="regions" id="regions" class="menu-object-region-selector"></select></span>
                        <span class="filter" id="filter-3"><select name="competitions" id="competitions" class="menu-object-competition-selector hidden"></select></span>
                    </div>
                </div>
                <div class="portlet-body ">
                    <div class="dd" id="nestable_list_1">
                        <ol class="dd-list">
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-bubble font-red"></i>
                        <span class="caption-subject font-red sbold uppercase">Assigned Objects</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="dd" id="nestable_list_2">
                        <ol class="dd-list">
                                                            <li class="dd-item" data-id="5" data-id="5" data-type="sport" data-name="Voleybol"> <div class="dd-handle"> Voleybol </div> </li>
                                                                                            <li class="dd-item" data-id="1" data-id="1" data-type="sport" data-name="Futbol"> <div class="dd-handle"> Futbol </div> </li>
                                                                    <ol>
                                                                                    <li class="dd-item" data-id="3013" data-type="competition" data-name="Süper Lig"> <div class="dd-handle"> Süper Lig </div> </li>
                                                                                                                                <li class="dd-item" data-id="3014" data-type="competition" data-name="TFF 1. League"> <div class="dd-handle"> TFF 1. League </div> </li>
                                                                                                                                <li class="dd-item" data-id="9290" data-type="competition" data-name="21 yaş altı League.1"> <div class="dd-handle"> 21 yaş altı League.1 </div> </li>
                                                                                    
                                    </ol>
                                                                                            <li class="dd-item" data-id="4" data-id="4" data-type="sport" data-name="Tenis"> <div class="dd-handle"> Tenis </div> </li>
                                                                                            <li class="dd-item" data-id="15" data-id="15" data-type="sport" data-name="Biatlon"> <div class="dd-handle"> Biatlon </div> </li>
                                                                                            <li class="dd-item" data-id="1" data-id="1" data-type="sport" data-name="Futbol"> <div class="dd-handle"> Futbol </div> </li>
                                                                                            <li class="dd-item" data-id="3025" data-id="3025" data-type="competition" data-name="MLS"> <div class="dd-handle"> MLS </div> </li>
                                                                                            <li class="dd-item" data-id="234001" data-id="234001" data-type="region" data-name="Türkiye"> <div class="dd-handle"> Türkiye </div> </li>
                                                                                            <li class="dd-item" data-id="4" data-id="4" data-type="sport" data-name="Tenis"> <div class="dd-handle"> Tenis </div> </li>
                                                                                            <li class="dd-item" data-id="3" data-id="3" data-type="sport" data-name="Basketbol"> <div class="dd-handle"> Basketbol </div> </li>
                                                                                            <li class="dd-item" data-id="2" data-id="2" data-type="sport" data-name="Buz hokeyi"> <div class="dd-handle"> Buz hokeyi </div> </li>
                                                                                            <li class="dd-item" data-id="234003" data-id="234003" data-type="region" data-name="Türkiye"> <div class="dd-handle"> Türkiye </div> </li>
                                                                                            <li class="dd-item" data-id="20109" data-id="20109" data-type="competition" data-name="TBSL. Outright"> <div class="dd-handle"> TBSL. Outright </div> </li>
                                                                                            <li class="dd-item" data-id="112" data-id="112" data-type="sport" data-name="Yelken"> <div class="dd-handle"> Yelken </div> </li>
                                                                                            <li class="dd-item" data-id="34" data-id="34" data-type="sport" data-name="Amerikan Bilardo"> <div class="dd-handle"> Amerikan Bilardo </div> </li>
                                                                                            <li class="dd-item" data-id="9" data-id="9" data-type="sport" data-name="Badminton"> <div class="dd-handle"> Badminton </div> </li>
                                                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h3>Serialised Output (per list)</h3>
            <textarea id="nestable_list_1_output" name="availObjectsJson"
                      class="form-control col-md-12 margin-bottom-10"></textarea>
            <textarea id="nestable_list_2_output" name="usedObjectsJson"
                      class="form-control col-md-12 margin-bottom-10">[{"name":"Voleybol","type":"sport","id":5},{"name":"Futbol","type":"sport","id":1,"children":[{"name":"Süper Lig","type":"competition","id":3013},{"name":"TFF 1. League","type":"competition","id":3014},{"name":"21 yaş altı League.1","type":"competition","id":9290}]},{"name":"Tenis","type":"sport","id":4},{"name":"Biatlon","type":"sport","id":15},{"name":"Futbol","type":"sport","id":1},{"name":"MLS","type":"competition","id":3025},{"name":"Türkiye","type":"region","id":234001},{"name":"Tenis","type":"sport","id":4},{"name":"Basketbol","type":"sport","id":3},{"name":"Buz hokeyi","type":"sport","id":2},{"name":"Türkiye","type":"region","id":234003},{"name":"TBSL. Outright","type":"competition","id":20109},{"name":"Yelken","type":"sport","id":112},{"name":"Amerikan Bilardo","type":"sport","id":34},{"name":"Badminton","type":"sport","id":9}]</textarea>
        </div>
    </div>
</form>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/global/plugins/jquery-nestable/jquery.nestable.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/pages/scripts/ui-nestable.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script src="assets/apps/scripts/menu.js" type="text/javascript"/>
<?php }
}
