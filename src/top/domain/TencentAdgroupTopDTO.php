<?php

/**
 * 腾讯特有参数
 * @author auto create
 */
class TencentAdgroupTopDTO
{
	
	/** 
	 * 投放范围类型：1：优量汇，2：微信公众号与小程序，3：腾讯新闻，4：腾讯视频，5：腾讯看点，6：QQ、腾讯音乐及游戏，8：微信朋友圈 
	 **/
	public $cast_scopes;
	
	/** 
	 * 创意展现方式：1：优选模式，2轮播模式
	 **/
	public $creative_group_display_type;
	
	/** 
	 * 是否开启衍生创意功能：1：是，0：否
	 **/
	public $derive_switch;	
}
?>