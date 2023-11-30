<?php

/**
 * 查询入参
 * @author auto create
 */
class AdgroupCategoryQueryDTO
{
	
	/** 
	 * 广告主id
	 **/
	public $advertiser_id;
	
	/** 
	 * 行为天数，1：7天，2：15天，3：30天，4：60天，5：90天，6：180天，7：365天
	 **/
	public $days;
	
	/** 
	 * 行为场景，1：电商行为场景，2：咨询行为场景，3：app行为场景
	 **/
	public $scene;
	
	/** 
	 * 请求类型 1=行为类目词（scene、days必填） 2=兴趣类目词（无scene、days），3=网红粉丝类目（仅快手）
	 **/
	public $type;	
}
?>