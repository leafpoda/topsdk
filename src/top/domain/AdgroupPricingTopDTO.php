<?php

/**
 * 付费出价
 * @author auto create
 */
class AdgroupPricingTopDTO
{
	
	/** 
	 * 出价方式：0：手动（默认），1：自动
	 **/
	public $bid_type;
	
	/** 
	 * 付费方式，2：CPM，3：CPC，5：OCPM，6：OCPC
	 **/
	public $pricing_type;	
}
?>