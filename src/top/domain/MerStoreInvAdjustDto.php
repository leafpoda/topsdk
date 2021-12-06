<?php

/**
 * 商家仓编辑库存
 * @author auto create
 */
class MerStoreInvAdjustDto
{
	
	/** 
	 * 扩展属性
	 **/
	public $attribute;
	
	/** 
	 * 库存类型
	 **/
	public $inventory_type;
	
	/** 
	 * 外部操作唯一编码
	 **/
	public $out_biz_code;
	
	/** 
	 * 数量
	 **/
	public $quantity;
	
	/** 
	 * 货品id
	 **/
	public $sc_item_id;
	
	/** 
	 * 仓库编码
	 **/
	public $store_code;	
}
?>