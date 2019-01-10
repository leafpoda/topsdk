<?php

/**
 * 商品库存更新时候的可选参数
 * @author auto create
 */
class UpdateItemQuantityOption
{
	
	/** 
	 * 增量幂等外部编码
	 **/
	public $outer_biz_key;
	
	/** 
	 * 库存更新方式: 1是全量更新 2是增量更新；默认是1。
	 **/
	public $type;	
}
?>