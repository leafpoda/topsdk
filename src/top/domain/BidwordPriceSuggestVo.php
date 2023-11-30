<?php

/**
 * 结果集
 * @author auto create
 */
class BidwordPriceSuggestVo
{
	
	/** 
	 * 单元id
	 **/
	public $adgroup_id;
	
	/** 
	 * 抢位信息
	 **/
	public $bid_strategy_info;
	
	/** 
	 * 词id
	 **/
	public $bidword_id;
	
	/** 
	 * 计划id
	 **/
	public $campaign_id;
	
	/** 
	 * 0正常，1-销量星级，2-相关性差
	 **/
	public $no_impression_reason;
	
	/** 
	 * 出价建议
	 **/
	public $suggest_list;	
}
?>