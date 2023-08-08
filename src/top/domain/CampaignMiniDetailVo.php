<?php

/**
 * 橱窗相关
 * @author auto create
 */
class CampaignMiniDetailVo
{
	
	/** 
	 * 橱窗主题,1:默认主题,7:品牌定制主题,4:店铺主题,5:拉新主题,2:新品主题
	 **/
	public $mini_detail_theme;
	
	/** 
	 * 橱窗宝贝id列表
	 **/
	public $private_mini_item_id_list;
	
	/** 
	 * 橱窗宝贝里面置顶的id列表
	 **/
	public $private_mini_top_item_id_list;
	
	/** 
	 * 手动选宝贝还是智能,0:黑名单,1:白名单
	 **/
	public $private_mini_type;	
}
?>