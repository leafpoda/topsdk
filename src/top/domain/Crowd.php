<?php

/**
 * 定向对象列表
 * @author auto create
 */
class Crowd
{
	
	/** 
	 * 店铺型定向， 主营类目id列表
	 **/
	public $cat_id_list;
	
	/** 
	 * 人群名称
	 **/
	public $crowd_name;
	
	/** 
	 * 定向类型
	 **/
	public $crowd_type;
	
	/** 
	 * 人群取值
	 **/
	public $crowd_value;
	
	/** 
	 * 交叉出价
	 **/
	public $matrix_prices;
	
	/** 
	 * 店铺型定向，最大客单价
	 **/
	public $max_per_sale;
	
	/** 
	 * 店铺型定向，最小客单价
	 **/
	public $min_per_sale;
	
	/** 
	 * 店铺型定向，人群优选选项
	 **/
	public $shop_preference_value;
	
	/** 
	 * 店铺型定向，成交规模id列表
	 **/
	public $shop_scale_id_list;
	
	/** 
	 * 定向人群对象
	 **/
	public $sub_crowds;	
}
?>