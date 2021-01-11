<?php /* Smarty version Smarty-3.1.7, created on 2021-01-11 12:39:00
         compiled from "/var/www/includes/runtime/../../layouts/vlayout/modules/WorldClock/ListViewSidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5280059645ffc46e4ab7cf7-52140280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '992d91da2d2f1aab8463415fe2e7b4e8d1fa4883' => 
    array (
      0 => '/var/www/includes/runtime/../../layouts/vlayout/modules/WorldClock/ListViewSidebar.tpl',
      1 => 1610368700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5280059645ffc46e4ab7cf7-52140280',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CURRENT_USER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ffc46e4ac9d3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ffc46e4ac9d3')) {function content_5ffc46e4ac9d3($_smarty_tpl) {?><link rel="stylesheet" href="layouts/vlayout/modules/WorldClock/resources/lib/jquery-clock-plugin/css/analog.css" type="text/css" />
<script src="layouts/vlayout/modules/WorldClock/resources/lib/jquery-clock-plugin/js/jquery.clock.js"></script>

<div style="text-align: center">
	<ul id="worldclock-on-sidebar" class="analog" data-tz="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->name;?>
">
	  <li class="hour"></li>
	  <li class="min"></li>
	  <li class="sec"></li>
	  <li class="meridiem"></li>
	</ul>
</div><?php }} ?>