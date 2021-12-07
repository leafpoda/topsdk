<?php

/**
 * 新建物料信息列表(主体为商品时支持传入最多10个，主体为店铺和自定义时，仅需传入1个)
 * @author auto create
 */
class MaterialAddTopDto
{
	
	/** 
	 * 物料id(主体为商品时传itemId,为店铺时传shopId,为自定义时传userId)
	 **/
	public $material_id;
	
	/** 
	 * 物料名称(32字符,主体为商品时传商品名称,为店铺时传店铺名称,为自定义时传用户nick)
	 **/
	public $material_name;	
}
?>