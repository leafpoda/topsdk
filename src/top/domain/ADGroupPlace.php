<?php

/**
 * 推广组与定向推广位置关系
 * @author auto create
 */
class ADGroupPlace
{
	
	/** 
	 * 推广组ID
	 **/
	public $adgroup_id;
	
	/** 
	 * 推广计划ID
	 **/
	public $campaign_id;
	
	/** 
	 * 创建时间
	 **/
	public $create_time;
	
	/** 
	 * 是否使用默认出价，0-不用；1-使用；
	 **/
	public $is_default_price;
	
	/** 
	 * 出价
	 **/
	public $max_price;
	
	/** 
	 * 修改时间
	 **/
	public $modified_time;
	
	/** 
	 * 主人昵称
	 **/
	public $nick;
	
	/** 
	 * 位置标识
	 **/
	public $place_id;
	
	/** 
	 * 位置名称
	 **/
	public $place_name;	
}
?>