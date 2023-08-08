<?php

/**
 * stdCategoryQueryVO
 * @author auto create
 */
class StdCategoryQueryVo
{
	
	/** 
	 * 宝贝id集合
	 **/
	public $material_id_list;
	
	/** 
	 * 父级类目级别
	 **/
	public $parent_cat_level;
	
	/** 
	 * 推广主体类型,item:商品,item_private_mini:独享橱窗,shop:店铺,content:内容,short_video:短视频,user_define:自定义;
	 **/
	public $promotion_type;	
}
?>