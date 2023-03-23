<?php

/**
 * 地域信息
 * @author auto create
 */
class AdgroupAreaTopDTO
{
	
	/** 
	 * 地域id
	 **/
	public $id;
	
	/** 
	 * 地域名称
	 **/
	public $name;
	
	/** 
	 * 父级id
	 **/
	public $parent_id;
	
	/** 
	 * 地域所在层级，1：省级，2：市级，3：区县级
	 **/
	public $region_level;	
}
?>