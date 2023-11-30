<?php

/**
 * 头条2.0特有参数
 * @author auto create
 */
class ToutiaoAdgroupV2TopDTO
{
	
	/** 
	 * 是否开启客户端下载功能：1：开启，0：关闭 投放位置仅包含“穿山甲”时不支持选择【广告评论】和【客户端下载视频】.  推广类型为抖音号时开启不生效
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
	 * 广告推广类型
	 **/
	public $promotion_identity;	
}
?>