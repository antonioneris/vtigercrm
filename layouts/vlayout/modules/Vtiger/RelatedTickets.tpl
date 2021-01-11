{*<!--
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
*
 ********************************************************************************/
-->*}
{strip}
{assign var=MODULE_NAME value="Calendar"}
<div  class="summaryWidgetContainer">
	<div class="widget_header row-fluid">
		<span class="span8"><h4 class="textOverflowEllipsis">{vtranslate('Chamados',$MODULE_NAME)}</h4></span>
	</div>
	<div class="widget_contents">
		{if count($TICKETS) neq '0'}
			{foreach item=RECORD key=KEY from=$TICKETS}
				<div class="activityEntries">
					{$RECORD['title']} <b>Ticket</b>{$RECORD['ticket_no']}
				</div>	
				<hr>
			{/foreach}
		{else}
			<div class="summaryWidgetContainer">
				<p class="textAlignCenter">{vtranslate('LBL_NO_PENDING_ACTIVITIES',$MODULE_NAME)}</p>
			</div>
		{/if}
		{if $PAGING_MODEL->isNextPageExists()}
			<div class="row-fluid">
				<div class="pull-right">
					<a href="javascript:void(0)" class="moreRecentActivities">{vtranslate('LBL_MORE',$MODULE_NAME)}..</a>
				</div>
			</div>
		{/if}
	</div>
</div>
{/strip}
