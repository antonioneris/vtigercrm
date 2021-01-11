<?php /* Smarty version Smarty-3.1.7, created on 2021-01-11 19:03:11
         compiled from "/var/www/includes/runtime/../../layouts/vlayout/modules/Vtiger/RelatedTickets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:879445575ffb6b8452cd62-27445570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcd01788cdbed84a506a2a7db70a56b040543eb2' => 
    array (
      0 => '/var/www/includes/runtime/../../layouts/vlayout/modules/Vtiger/RelatedTickets.tpl',
      1 => 1610391788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '879445575ffb6b8452cd62-27445570',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ffb6b846a989',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'TICKETS' => 0,
    'RECORD' => 0,
    'PAGING_MODEL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ffb6b846a989')) {function content_5ffb6b846a989($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_variable("Calendar", null, 0);?><div  class="summaryWidgetContainer"><div class="widget_header row-fluid"><span class="span8"><h4 class="textOverflowEllipsis"><?php echo vtranslate('Chamados',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h4></span></div><div class="widget_contents"><?php if (count($_smarty_tpl->tpl_vars['TICKETS']->value)!='0'){?><?php  $_smarty_tpl->tpl_vars['RECORD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RECORD']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TICKETS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RECORD']->key => $_smarty_tpl->tpl_vars['RECORD']->value){
$_smarty_tpl->tpl_vars['RECORD']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY']->value = $_smarty_tpl->tpl_vars['RECORD']->key;
?><div class="activityEntries"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value['title'];?>
<?php echo $_smarty_tpl->tpl_vars['RECORD']->value['ticket_no'];?>
</div><hr><?php } ?><?php }else{ ?><div class="summaryWidgetContainer"><p class="textAlignCenter"><?php echo vtranslate('LBL_NO_PENDING_ACTIVITIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</p></div><?php }?><?php if ($_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isNextPageExists()){?><div class="row-fluid"><div class="pull-right"><a href="javascript:void(0)" class="moreRecentActivities"><?php echo vtranslate('LBL_MORE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
..</a></div></div><?php }?></div></div>
<?php }} ?>