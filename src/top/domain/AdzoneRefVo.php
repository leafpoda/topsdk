<?php

/**
 * 批量结果集
 * @author auto create
 */
class AdzoneRefVo
{
	
	/** 
	 * 资源包id
	 **/
	public $adzone_id;
	
	/** 
	 * 资源包名字
	 **/
	public $adzone_name;
	
	/** 
	 * 出价方式,custom_bid:手动出价,max_amount:最大化拿量,cost_control:控成本,roi_control:控投产比
	 **/
	public $bid_type;
	
	/** 
	 * 计划id,计划已经存在场景必填,eg:添加主体、编辑计划状态等场景
	 **/
	public $campaign_id;
	
	/** 
	 * 计划名称
	 **/
	public $campaign_name;
	
	/** 
	 * 资源位/包 溢价
	 **/
	public $discount;
	
	/** 
	 * 资源位支持的最高溢价
	 **/
	public $max_discount;
	
	/** 
	 * 资源位支持的最低溢价
	 **/
	public $min_discount;
	
	/** 
	 * 操作按钮列表
	 **/
	public $operation_list;
	
	/** 
	 * 状态,start:投放,pause:暂停
	 **/
	public $status;	
}
?>