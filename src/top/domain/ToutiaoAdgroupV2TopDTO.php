<?php

/**
 * 头条2.0特有参数
 * @author auto create
 */
class ToutiaoAdgroupV2TopDTO
{
	
	/** 
	 * 客户端下载视频开关：1：开启，0：关闭
	 **/
	public $ad_download_switch;
	
	/** 
	 * 广告来源
	 **/
	public $ad_source;
	
	/** 
	 * 是否开启评论功能：1：开启，0：关闭
	 **/
	public $comment_switch;
	
	/** 
	 * 创意素材
	 **/
	public $media_creative_group;
	
	/** 
	 * 产品信息  	
	 **/
	public $production;
	
	/** 
	 * 广告推广主体
	 **/
	public $promotion_identity;	
}
?>