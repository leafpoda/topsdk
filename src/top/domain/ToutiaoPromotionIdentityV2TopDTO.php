<?php

/**
 * 广告推广类型
 * @author auto create
 */
class ToutiaoPromotionIdentityV2TopDTO
{
	
	/** 
	 * 授权类型  1  抖音号授权  2  单视频授权   推广类型为抖音号时必填
	 **/
	public $auth_type;
	
	/** 
	 * 是否主页作品列表隐藏广告内容：1：隐藏，0：不隐藏   推广类型为抖音号时有效且必传
	 **/
	public $is_hide_video;
	
	/** 
	 * 推广类型:1：抖音号，2：账户信息. 默认为账户信息
	 **/
	public $promotion_type;
	
	/** 
	 * 抖音达人ID。推广类型为抖音号时必填
	 **/
	public $talent_id;	
}
?>