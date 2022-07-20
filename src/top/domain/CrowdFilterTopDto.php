<?php

/**
 * 过滤人群
 * @author auto create
 */
class CrowdFilterTopDto
{
	
	/** 
	 * 过滤行为维度(1:过滤购买 2:过滤加购 4:过滤收藏 8:过滤进店)
	 **/
	public $behavior;
	
	/** 
	 * 过滤行为描述
	 **/
	public $name;
	
	/** 
	 * 过滤时间窗口(7:7天 15:15天 30:30天)
	 **/
	public $window;	
}
?>