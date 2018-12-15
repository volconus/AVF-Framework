<?php
/* Smarty version 3.1.30, created on 2017-06-02 22:10:45
  from "C:\wamp\www\bet-admin\app\admin\view\region\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5931b835bd3587_07479743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4fe40e6546088eb098cd3ca59cd55eee3a45e24' => 
    array (
      0 => 'C:\\wamp\\www\\bet-admin\\app\\admin\\view\\region\\index.tpl',
      1 => 1489473342,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_5931b835bd3587_07479743 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="?">Dashboard</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Regions Model</span>
        </li>
    </ul>
</div>
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title new-page-title"> Regions Model
</h1>
<!-- END PAGE TITLE-->

<pre class='xdebug-var-dump' dir='ltr'>
<small>C:\wamp\www\bet-admin\sys\_compiler\d4fe40e6546088eb098cd3ca59cd55eee3a45e24_0.file.index.tpl.cache.php:45:</small>
<b>array</b> <i>(size=9)</i>
  0 <font color='#888a85'>=&gt;</font> 
    <b>object</b>(<i>stdClass</i>)[<i>14</i>]
      <i>public</i> 'table_catalog' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'bet'</font> <i>(length=3)</i>
      <i>public</i> 'table_schema' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'sport'</font> <i>(length=5)</i>
      <i>public</i> 'table_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'region'</font> <i>(length=6)</i>
      <i>public</i> 'column_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'id'</font> <i>(length=2)</i>
      <i>public</i> 'ordinal_position' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>1</font>
      <i>public</i> 'column_default' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'nextval(&#39;sport.&quot;region-sq&quot;&#39;::regclass)'</font> <i>(length=38)</i>
      <i>public</i> 'is_nullable' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NO'</font> <i>(length=2)</i>
      <i>public</i> 'data_type' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'bigint'</font> <i>(length=6)</i>
      <i>public</i> 'character_maximum_length' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_octet_length' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'numeric_precision' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>64</font>
      <i>public</i> 'numeric_precision_radix' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>2</font>
      <i>public</i> 'numeric_scale' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>0</font>
      <i>public</i> 'datetime_precision' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'interval_type' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'interval_precision' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_set_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_set_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_set_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'collation_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'collation_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'collation_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'domain_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'domain_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'domain_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'udt_catalog' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'bet'</font> <i>(length=3)</i>
      <i>public</i> 'udt_schema' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'pg_catalog'</font> <i>(length=10)</i>
      <i>public</i> 'udt_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'int8'</font> <i>(length=4)</i>
      <i>public</i> 'scope_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'scope_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'scope_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'maximum_cardinality' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'dtd_identifier' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'1'</font> <i>(length=1)</i>
      <i>public</i> 'is_self_referencing' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NO'</font> <i>(length=2)</i>
      <i>public</i> 'is_identity' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NO'</font> <i>(length=2)</i>
      <i>public</i> 'identity_generation' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_start' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_increment' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_maximum' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_minimum' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_cycle' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'is_generated' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NEVER'</font> <i>(length=5)</i>
      <i>public</i> 'generation_expression' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'is_updatable' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'YES'</font> <i>(length=3)</i>
  1 <font color='#888a85'>=&gt;</font> 
    <b>object</b>(<i>stdClass</i>)[<i>15</i>]
      <i>public</i> 'table_catalog' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'bet'</font> <i>(length=3)</i>
      <i>public</i> 'table_schema' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'sport'</font> <i>(length=5)</i>
      <i>public</i> 'table_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'region'</font> <i>(length=6)</i>
      <i>public</i> 'column_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'remote_id'</font> <i>(length=9)</i>
      <i>public</i> 'ordinal_position' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>2</font>
      <i>public</i> 'column_default' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'is_nullable' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NO'</font> <i>(length=2)</i>
      <i>public</i> 'data_type' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'bigint'</font> <i>(length=6)</i>
      <i>public</i> 'character_maximum_length' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_octet_length' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'numeric_precision' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>64</font>
      <i>public</i> 'numeric_precision_radix' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>2</font>
      <i>public</i> 'numeric_scale' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>0</font>
      <i>public</i> 'datetime_precision' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'interval_type' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'interval_precision' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_set_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_set_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_set_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'collation_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'collation_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'collation_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'domain_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'domain_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'domain_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'udt_catalog' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'bet'</font> <i>(length=3)</i>
      <i>public</i> 'udt_schema' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'pg_catalog'</font> <i>(length=10)</i>
      <i>public</i> 'udt_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'int8'</font> <i>(length=4)</i>
      <i>public</i> 'scope_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'scope_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'scope_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'maximum_cardinality' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'dtd_identifier' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'2'</font> <i>(length=1)</i>
      <i>public</i> 'is_self_referencing' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NO'</font> <i>(length=2)</i>
      <i>public</i> 'is_identity' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NO'</font> <i>(length=2)</i>
      <i>public</i> 'identity_generation' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_start' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_increment' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_maximum' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_minimum' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_cycle' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'is_generated' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NEVER'</font> <i>(length=5)</i>
      <i>public</i> 'generation_expression' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'is_updatable' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'YES'</font> <i>(length=3)</i>
  2 <font color='#888a85'>=&gt;</font> 
    <b>object</b>(<i>stdClass</i>)[<i>16</i>]
      <i>public</i> 'table_catalog' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'bet'</font> <i>(length=3)</i>
      <i>public</i> 'table_schema' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'sport'</font> <i>(length=5)</i>
      <i>public</i> 'table_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'region'</font> <i>(length=6)</i>
      <i>public</i> 'column_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'name'</font> <i>(length=4)</i>
      <i>public</i> 'ordinal_position' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>3</font>
      <i>public</i> 'column_default' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'is_nullable' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NO'</font> <i>(length=2)</i>
      <i>public</i> 'data_type' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'character varying'</font> <i>(length=17)</i>
      <i>public</i> 'character_maximum_length' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>200</font>
      <i>public</i> 'character_octet_length' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>800</font>
      <i>public</i> 'numeric_precision' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'numeric_precision_radix' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'numeric_scale' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'datetime_precision' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'interval_type' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'interval_precision' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_set_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_set_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_set_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'collation_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'collation_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'collation_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'domain_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'domain_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'domain_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'udt_catalog' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'bet'</font> <i>(length=3)</i>
      <i>public</i> 'udt_schema' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'pg_catalog'</font> <i>(length=10)</i>
      <i>public</i> 'udt_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'varchar'</font> <i>(length=7)</i>
      <i>public</i> 'scope_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'scope_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'scope_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'maximum_cardinality' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'dtd_identifier' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'3'</font> <i>(length=1)</i>
      <i>public</i> 'is_self_referencing' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NO'</font> <i>(length=2)</i>
      <i>public</i> 'is_identity' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NO'</font> <i>(length=2)</i>
      <i>public</i> 'identity_generation' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_start' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_increment' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_maximum' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_minimum' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_cycle' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'is_generated' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NEVER'</font> <i>(length=5)</i>
      <i>public</i> 'generation_expression' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'is_updatable' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'YES'</font> <i>(length=3)</i>
  3 <font color='#888a85'>=&gt;</font> 
    <b>object</b>(<i>stdClass</i>)[<i>17</i>]
      <i>public</i> 'table_catalog' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'bet'</font> <i>(length=3)</i>
      <i>public</i> 'table_schema' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'sport'</font> <i>(length=5)</i>
      <i>public</i> 'table_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'region'</font> <i>(length=6)</i>
      <i>public</i> 'column_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'create_date'</font> <i>(length=11)</i>
      <i>public</i> 'ordinal_position' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>4</font>
      <i>public</i> 'column_default' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'now()'</font> <i>(length=5)</i>
      <i>public</i> 'is_nullable' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NO'</font> <i>(length=2)</i>
      <i>public</i> 'data_type' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'timestamp without time zone'</font> <i>(length=27)</i>
      <i>public</i> 'character_maximum_length' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_octet_length' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'numeric_precision' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'numeric_precision_radix' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'numeric_scale' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'datetime_precision' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>6</font>
      <i>public</i> 'interval_type' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'interval_precision' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_set_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_set_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_set_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'collation_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'collation_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'collation_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'domain_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'domain_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'domain_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'udt_catalog' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'bet'</font> <i>(length=3)</i>
      <i>public</i> 'udt_schema' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'pg_catalog'</font> <i>(length=10)</i>
      <i>public</i> 'udt_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'timestamp'</font> <i>(length=9)</i>
      <i>public</i> 'scope_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'scope_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'scope_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'maximum_cardinality' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'dtd_identifier' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'4'</font> <i>(length=1)</i>
      <i>public</i> 'is_self_referencing' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NO'</font> <i>(length=2)</i>
      <i>public</i> 'is_identity' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NO'</font> <i>(length=2)</i>
      <i>public</i> 'identity_generation' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_start' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_increment' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_maximum' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_minimum' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_cycle' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'is_generated' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NEVER'</font> <i>(length=5)</i>
      <i>public</i> 'generation_expression' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'is_updatable' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'YES'</font> <i>(length=3)</i>
  4 <font color='#888a85'>=&gt;</font> 
    <b>object</b>(<i>stdClass</i>)[<i>18</i>]
      <i>public</i> 'table_catalog' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'bet'</font> <i>(length=3)</i>
      <i>public</i> 'table_schema' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'sport'</font> <i>(length=5)</i>
      <i>public</i> 'table_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'region'</font> <i>(length=6)</i>
      <i>public</i> 'column_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'update_date'</font> <i>(length=11)</i>
      <i>public</i> 'ordinal_position' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>5</font>
      <i>public</i> 'column_default' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'is_nullable' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'YES'</font> <i>(length=3)</i>
      <i>public</i> 'data_type' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'timestamp without time zone'</font> <i>(length=27)</i>
      <i>public</i> 'character_maximum_length' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_octet_length' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'numeric_precision' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'numeric_precision_radix' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'numeric_scale' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'datetime_precision' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>6</font>
      <i>public</i> 'interval_type' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'interval_precision' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_set_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_set_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_set_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'collation_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'collation_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'collation_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'domain_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'domain_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'domain_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'udt_catalog' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'bet'</font> <i>(length=3)</i>
      <i>public</i> 'udt_schema' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'pg_catalog'</font> <i>(length=10)</i>
      <i>public</i> 'udt_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'timestamp'</font> <i>(length=9)</i>
      <i>public</i> 'scope_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'scope_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'scope_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'maximum_cardinality' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'dtd_identifier' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'5'</font> <i>(length=1)</i>
      <i>public</i> 'is_self_referencing' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NO'</font> <i>(length=2)</i>
      <i>public</i> 'is_identity' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NO'</font> <i>(length=2)</i>
      <i>public</i> 'identity_generation' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_start' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_increment' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_maximum' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_minimum' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_cycle' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'is_generated' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NEVER'</font> <i>(length=5)</i>
      <i>public</i> 'generation_expression' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'is_updatable' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'YES'</font> <i>(length=3)</i>
  5 <font color='#888a85'>=&gt;</font> 
    <b>object</b>(<i>stdClass</i>)[<i>19</i>]
      <i>public</i> 'table_catalog' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'bet'</font> <i>(length=3)</i>
      <i>public</i> 'table_schema' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'sport'</font> <i>(length=5)</i>
      <i>public</i> 'table_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'region'</font> <i>(length=6)</i>
      <i>public</i> 'column_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'last_check_date'</font> <i>(length=15)</i>
      <i>public</i> 'ordinal_position' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>6</font>
      <i>public</i> 'column_default' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'is_nullable' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'YES'</font> <i>(length=3)</i>
      <i>public</i> 'data_type' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'timestamp without time zone'</font> <i>(length=27)</i>
      <i>public</i> 'character_maximum_length' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_octet_length' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'numeric_precision' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'numeric_precision_radix' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'numeric_scale' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'datetime_precision' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>6</font>
      <i>public</i> 'interval_type' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'interval_precision' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_set_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_set_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_set_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'collation_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'collation_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'collation_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'domain_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'domain_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'domain_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'udt_catalog' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'bet'</font> <i>(length=3)</i>
      <i>public</i> 'udt_schema' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'pg_catalog'</font> <i>(length=10)</i>
      <i>public</i> 'udt_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'timestamp'</font> <i>(length=9)</i>
      <i>public</i> 'scope_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'scope_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'scope_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'maximum_cardinality' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'dtd_identifier' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'6'</font> <i>(length=1)</i>
      <i>public</i> 'is_self_referencing' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NO'</font> <i>(length=2)</i>
      <i>public</i> 'is_identity' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NO'</font> <i>(length=2)</i>
      <i>public</i> 'identity_generation' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_start' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_increment' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_maximum' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_minimum' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_cycle' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'is_generated' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NEVER'</font> <i>(length=5)</i>
      <i>public</i> 'generation_expression' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'is_updatable' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'YES'</font> <i>(length=3)</i>
  6 <font color='#888a85'>=&gt;</font> 
    <b>object</b>(<i>stdClass</i>)[<i>20</i>]
      <i>public</i> 'table_catalog' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'bet'</font> <i>(length=3)</i>
      <i>public</i> 'table_schema' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'sport'</font> <i>(length=5)</i>
      <i>public</i> 'table_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'region'</font> <i>(length=6)</i>
      <i>public</i> 'column_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'status'</font> <i>(length=6)</i>
      <i>public</i> 'ordinal_position' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>7</font>
      <i>public</i> 'column_default' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#39;A&#39;::main.&quot;ap-type&quot;'</font> <i>(length=19)</i>
      <i>public</i> 'is_nullable' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NO'</font> <i>(length=2)</i>
      <i>public</i> 'data_type' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'USER-DEFINED'</font> <i>(length=12)</i>
      <i>public</i> 'character_maximum_length' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_octet_length' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'numeric_precision' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'numeric_precision_radix' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'numeric_scale' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'datetime_precision' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'interval_type' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'interval_precision' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_set_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_set_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_set_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'collation_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'collation_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'collation_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'domain_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'domain_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'domain_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'udt_catalog' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'bet'</font> <i>(length=3)</i>
      <i>public</i> 'udt_schema' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'main'</font> <i>(length=4)</i>
      <i>public</i> 'udt_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'ap-type'</font> <i>(length=7)</i>
      <i>public</i> 'scope_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'scope_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'scope_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'maximum_cardinality' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'dtd_identifier' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'7'</font> <i>(length=1)</i>
      <i>public</i> 'is_self_referencing' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NO'</font> <i>(length=2)</i>
      <i>public</i> 'is_identity' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NO'</font> <i>(length=2)</i>
      <i>public</i> 'identity_generation' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_start' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_increment' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_maximum' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_minimum' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_cycle' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'is_generated' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NEVER'</font> <i>(length=5)</i>
      <i>public</i> 'generation_expression' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'is_updatable' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'YES'</font> <i>(length=3)</i>
  7 <font color='#888a85'>=&gt;</font> 
    <b>object</b>(<i>stdClass</i>)[<i>21</i>]
      <i>public</i> 'table_catalog' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'bet'</font> <i>(length=3)</i>
      <i>public</i> 'table_schema' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'sport'</font> <i>(length=5)</i>
      <i>public</i> 'table_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'region'</font> <i>(length=6)</i>
      <i>public</i> 'column_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'remote_order'</font> <i>(length=12)</i>
      <i>public</i> 'ordinal_position' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>9</font>
      <i>public</i> 'column_default' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'is_nullable' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'YES'</font> <i>(length=3)</i>
      <i>public</i> 'data_type' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'bigint'</font> <i>(length=6)</i>
      <i>public</i> 'character_maximum_length' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_octet_length' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'numeric_precision' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>64</font>
      <i>public</i> 'numeric_precision_radix' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>2</font>
      <i>public</i> 'numeric_scale' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>0</font>
      <i>public</i> 'datetime_precision' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'interval_type' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'interval_precision' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_set_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_set_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_set_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'collation_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'collation_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'collation_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'domain_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'domain_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'domain_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'udt_catalog' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'bet'</font> <i>(length=3)</i>
      <i>public</i> 'udt_schema' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'pg_catalog'</font> <i>(length=10)</i>
      <i>public</i> 'udt_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'int8'</font> <i>(length=4)</i>
      <i>public</i> 'scope_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'scope_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'scope_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'maximum_cardinality' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'dtd_identifier' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'9'</font> <i>(length=1)</i>
      <i>public</i> 'is_self_referencing' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NO'</font> <i>(length=2)</i>
      <i>public</i> 'is_identity' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NO'</font> <i>(length=2)</i>
      <i>public</i> 'identity_generation' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_start' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_increment' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_maximum' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_minimum' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_cycle' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'is_generated' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NEVER'</font> <i>(length=5)</i>
      <i>public</i> 'generation_expression' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'is_updatable' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'YES'</font> <i>(length=3)</i>
  8 <font color='#888a85'>=&gt;</font> 
    <b>object</b>(<i>stdClass</i>)[<i>22</i>]
      <i>public</i> 'table_catalog' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'bet'</font> <i>(length=3)</i>
      <i>public</i> 'table_schema' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'sport'</font> <i>(length=5)</i>
      <i>public</i> 'table_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'region'</font> <i>(length=6)</i>
      <i>public</i> 'column_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'remote_sport_id'</font> <i>(length=15)</i>
      <i>public</i> 'ordinal_position' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>10</font>
      <i>public</i> 'column_default' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'is_nullable' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'YES'</font> <i>(length=3)</i>
      <i>public</i> 'data_type' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'bigint'</font> <i>(length=6)</i>
      <i>public</i> 'character_maximum_length' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_octet_length' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'numeric_precision' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>64</font>
      <i>public</i> 'numeric_precision_radix' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>2</font>
      <i>public</i> 'numeric_scale' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>0</font>
      <i>public</i> 'datetime_precision' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'interval_type' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'interval_precision' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_set_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_set_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'character_set_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'collation_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'collation_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'collation_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'domain_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'domain_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'domain_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'udt_catalog' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'bet'</font> <i>(length=3)</i>
      <i>public</i> 'udt_schema' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'pg_catalog'</font> <i>(length=10)</i>
      <i>public</i> 'udt_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'int8'</font> <i>(length=4)</i>
      <i>public</i> 'scope_catalog' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'scope_schema' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'scope_name' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'maximum_cardinality' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'dtd_identifier' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'10'</font> <i>(length=2)</i>
      <i>public</i> 'is_self_referencing' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NO'</font> <i>(length=2)</i>
      <i>public</i> 'is_identity' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NO'</font> <i>(length=2)</i>
      <i>public</i> 'identity_generation' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_start' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_increment' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_maximum' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_minimum' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'identity_cycle' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'is_generated' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NEVER'</font> <i>(length=5)</i>
      <i>public</i> 'generation_expression' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'is_updatable' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'YES'</font> <i>(length=3)</i>
</pre><?php }
}
