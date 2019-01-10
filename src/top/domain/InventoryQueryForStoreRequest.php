<?php

/**
 * 查询列表
 * @author auto create
 */
class InventoryQueryForStoreRequest
{
	
	/** 
	 * 实体类型  2：仓库类型， 6：门店类型
	 **/
	public $inv_store_type;
	
	/** 
	 * 后端商品code
	 **/
	public $sc_item_code;
	
	/** 
	 * 后端商品id
	 **/
	public $sc_item_id;
	
	/** 
	 * 仓库code
	 **/
	public $store_code;	
}
?>