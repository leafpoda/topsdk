<?php

/**
 * 系统自动生成
 * @author auto create
 */
class CiaUpdateDto
{
	
	/** 
	 * 推广组Id
	 **/
	public $adgroup_id;
	
	/** 
	 * 出价目标（3:促进收藏加购,4:促进点击,5:促进成交）
	 **/
	public $bid_target_type;
	
	/** 
	 * 计划Id
	 **/
	public $campaign_id;
	
	/** 
	 * 是否自动流转（0:否，1:是）
	 **/
	public $is_circulation;
	
	/** 
	 * 是否开启智能出价
	 **/
	public $is_smart_bidding;
	
	/** 
	 * 最高溢价比例（30-300）
	 **/
	public $max_premium;	
}
?>