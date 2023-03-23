<?php

/**
 * 抖音达人定向
 * @author auto create
 */
class AwemeFanBehaviorDTO
{
	
	/** 
	 * 抖音达人账号类目
	 **/
	public $aweme_fan_categories;
	
	/** 
	 * 互动天数，1：15天，2：30天，3：60天
	 **/
	public $aweme_fan_days;
	
	/** 
	 * 行为场景，1：关注，2：评论，3：点赞，4：分享
	 **/
	public $aweme_fan_scene;
	
	/** 
	 * 关键词
	 **/
	public $keywords;	
}
?>