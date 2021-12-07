<?php

/**
 * 单元智能出价信息
 * @author auto create
 */
class CiaConfig
{
	
	/** 
	 * 推广组id
	 **/
	public $ad_group_id;
	
	/** 
	 * 出价偏好（3:促进收藏加购，4:促进点击，5:促进成交）
	 **/
	public $bid_target_type;
	
	/** 
	 * 是否自动流转
	 **/
	public $is_circulation;
	
	/** 
	 * 是否开启智能出价
	 **/
	public $is_smart_bidding;
	
	/** 
	 * 最高溢价比例
	 **/
	public $max_premium;
	
	/** 
	 * 目标点击量
	 **/
	public $target_click;	
}
?>