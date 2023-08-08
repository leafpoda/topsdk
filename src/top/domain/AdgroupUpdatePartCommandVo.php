<?php

/**
 * list
 * @author auto create
 */
class AdgroupUpdatePartCommandVo
{
	
	/** 
	 * 单元id
	 **/
	public $adgroup_id;
	
	/** 
	 * 计划id
	 **/
	public $campaign_id;
	
	/** 
	 * 前端展示状态,pause:暂停推广,start:正在推广,terminate:结束推广,wait:等待推广,pending:准备推广,wait_pay:计划未付款
	 **/
	public $display_status;
	
	/** 
	 * 物料id
	 **/
	public $material_id;	
}
?>