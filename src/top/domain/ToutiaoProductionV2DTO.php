<?php

/**
 * 产品信息
 * @author auto create
 */
class ToutiaoProductionV2DTO
{
	
	/** 
	 * 产品主图，最多10个，产品主图尺寸大小只支持108*108
	 **/
	public $material_ids;
	
	/** 
	 * 产品名称
	 **/
	public $name;
	
	/** 
	 * 产品卖点，最多10条，单个卖点6-9个字符，中文算1字符，英文/数字算0.5字符
	 **/
	public $selling_points;	
}
?>