<?php

/**
 * 主体类型对应的物料信息
 * @author auto create
 */
class AdgroupMaterialCommandVo
{
	
	/** 
	 * 物料地址
	 **/
	public $link_url;
	
	/** 
	 * 物料id
	 **/
	public $material_id;
	
	/** 
	 * 物料名称
	 **/
	public $material_name;
	
	/** 
	 * 推广主体类型,item:商品,item_private_mini:独享橱窗,shop:店铺,content:内容,short_video:短视频,user_define:自定义;
	 **/
	public $promotion_type;
	
	/** 
	 * 推广子主体类型,item:商品，item_private_mini:独享橱窗，shop:店铺，you_hao_huo:有好货，picture:图文，short_video:短视频，live_room:直播间，live_spot:看点，tao_blocks:淘积木，user_define_url:自定义url
	 **/
	public $sub_promotion_type;	
}
?>