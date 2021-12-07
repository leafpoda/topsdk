<?php

/**
 * 新建解决方案
 * @author auto create
 */
class SolutionAddTopDto
{
	
	/** 
	 * 资源位信息列表
	 **/
	public $adzone_list;
	
	/** 
	 * 新建计划信息
	 **/
	public $campaign_add;
	
	/** 
	 * 定向信息列表
	 **/
	public $crowd_list;
	
	/** 
	 * 新建物料信息列表(主体为商品时支持传入最多10个，主体为店铺和自定义时，仅需传入1个)
	 **/
	public $material_list;	
}
?>