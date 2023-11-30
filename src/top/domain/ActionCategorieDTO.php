<?php

/**
 * 行为分类
 * @author auto create
 */
class ActionCategorieDTO
{
	
	/** 
	 * 行为类目
	 **/
	public $action_categories;
	
	/** 
	 * 行为天数，1：7天，2：15天，3：30天，4：60天，5：90天，6：180天，7：365天
	 **/
	public $action_days;
	
	/** 
	 * 行为场景，1：电商行为场景，2：咨询行为场景，3：app行为场景
	 **/
	public $action_scene;
	
	/** 
	 * 行为强度，0：不限；1：高强度
	 **/
	public $action_strength;
	
	/** 
	 * 关键词
	 **/
	public $keywords;	
}
?>