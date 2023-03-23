<?php

/**
 * 入参
 * @author auto create
 */
class AdgroupTopDTO
{
	
	/** 
	 * 广告主id
	 **/
	public $advertiser_id;
	
	/** 
	 * 预算
	 **/
	public $budget;
	
	/** 
	 * 计划组id
	 **/
	public $campaign_id;
	
	/** 
	 * 投放周期
	 **/
	public $cast_time;
	
	/** 
	 * 付费出价
	 **/
	public $pricing;
	
	/** 
	 * 投放， 1 - 加速投放；2 - 平滑投放；3-优先低成本（投放时间范围只可为全天；预算不可为不限或空）
	 **/
	public $smooth;	
}
?>