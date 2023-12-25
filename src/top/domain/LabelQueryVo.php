<?php

/**
 * labelQueryVO
 * @author auto create
 */
class LabelQueryVo
{
	
	/** 
	 * 单元id
	 **/
	public $adgroup_id;
	
	/** 
	 * 计划id
	 **/
	public $campaign_id;
	
	/** 
	 * 类目信息
	 **/
	public $category;
	
	/** 
	 * 标签信息
	 **/
	public $label_list;
	
	/** 
	 * 宝贝id集合
	 **/
	public $material_id_list;
	
	/** 
	 * 分页页数
	 **/
	public $offset;
	
	/** 
	 * 分页数量
	 **/
	public $page_size;
	
	/** 
	 * 推广主体类型,item:商品,item_private_mini:独享橱窗,shop:店铺,content:内容,short_video:短视频,user_define:自定义;
	 **/
	public $promotion_type;
	
	/** 
	 * 报表数据统计时长
	 **/
	public $rec_query_time;
	
	/** 
	 * 浮层里面用户选的类目
	 **/
	public $search_category;
	
	/** 
	 * 推广子主体类型,item:商品，item_private_mini:独享橱窗，shop:店铺，you_hao_huo:有好货，picture:图文，short_video:短视频，live_room:直播间，live_spot:看点，tao_blocks:淘积木，user_define_url:自定义url
	 **/
	public $sub_promotion_type;	
}
?>