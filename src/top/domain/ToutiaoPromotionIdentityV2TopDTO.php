<?php

/**
 * 广告推广主体
 * @author auto create
 */
class ToutiaoPromotionIdentityV2TopDTO
{
	
	/** 
	 * 是否主页作品列表隐藏广告内容：1：隐藏，0：不隐藏
	 **/
	public $is_hide_video;
	
	/** 
	 * 推广类型:1：抖音号，2：账户信息
	 **/
	public $promotion_type;
	
	/** 
	 * 抖音达人ID
	 **/
	public $talent_id;	
}
?>