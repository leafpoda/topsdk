<?php

/**
 * 资源位关联关系
 * @author auto create
 */
class AdzoneRefCommandVo
{
	
	/** 
	 * 资源包id
	 **/
	public $adzone_id;
	
	/** 
	 * 计划id,计划已经存在场景必填,eg:添加主体、编辑计划状态等场景
	 **/
	public $campaign_id;
	
	/** 
	 * 资源位/包 溢价
	 **/
	public $discount;
	
	/** 
	 * 状态,start:投放,pause:暂停
	 **/
	public $status;	
}
?>