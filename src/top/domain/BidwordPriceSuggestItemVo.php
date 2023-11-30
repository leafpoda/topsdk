<?php

/**
 * 出价建议
 * @author auto create
 */
class BidwordPriceSuggestItemVo
{
	
	/** 
	 * 出价
	 **/
	public $bid_price;
	
	/** 
	 * 溢价
	 **/
	public $discount;
	
	/** 
	 * 市场份额
	 **/
	public $market_share_info;
	
	/** 
	 * 排名
	 **/
	public $rank;
	
	/** 
	 * 排名范围
	 **/
	public $rank_name;
	
	/** 
	 * 原因
	 **/
	public $reason;
	
	/** 
	 * 0:出价建议，4：抢位建议，5：当前出价
	 **/
	public $type;	
}
?>