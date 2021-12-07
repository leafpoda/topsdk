<?php

/**
 * 过滤人群信息
 * @author auto create
 */
class CrowdFilterTopDto
{
	
	/** 
	 * 过滤行为维度,1表示过滤购买 2表示过滤加购 4表示过滤收藏 8表示过滤进店
	 **/
	public $behavior;
	
	/** 
	 * 对过滤行为和过滤时间的描述
	 **/
	public $name;
	
	/** 
	 * 过滤时间窗口,7天 15天 30天
	 **/
	public $window;	
}
?>