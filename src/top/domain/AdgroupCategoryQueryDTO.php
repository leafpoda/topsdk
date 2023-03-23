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
	 * 类目id
	 **/
	public $category_id;
	
	/** 
	 * 行为场景，1：关注，2：评论，3：点赞，4：分享
	 **/
	public $scene;	
}
?>