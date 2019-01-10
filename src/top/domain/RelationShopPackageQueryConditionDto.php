<?php

/**
 * 店铺包条件
 * @author auto create
 */
class RelationShopPackageQueryConditionDto
{
	
	/** 
	 * 类目信息列表
	 **/
	public $cat_list;
	
	/** 
	 * 最大客单价
	 **/
	public $max_per_sale;
	
	/** 
	 * 最小客单价
	 **/
	public $min_per_sale;
	
	/** 
	 * 人群优选逻辑
	 **/
	public $shop_preference_list;
	
	/** 
	 * 店铺规模信息列表
	 **/
	public $shop_scale_list;	
}
?>