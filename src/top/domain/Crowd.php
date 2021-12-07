<?php

/**
 * 按类型更新,需先根据crowdType查询出定向再修改；如果像访客定向添加了自主店铺和种子店铺，修改时只传了一个则另一个被删除
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
	 * 交叉出价,必须填完整的所有资源位的交叉出价信息
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
	 * 子人群
	 **/
	public $sub_crowds;	
}
?>