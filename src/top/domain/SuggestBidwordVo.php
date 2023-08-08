<?php

/**
 * 批量结果集
 * @author auto create
 */
class SuggestBidwordVo
{
	
	/** 
	 * 市场平均出价
	 **/
	public $avg_price;
	
	/** 
	 * 关键词
	 **/
	public $bid_price;
	
	/** 
	 * 点击率
	 **/
	public $ctr;
	
	/** 
	 * 点击转化率
	 **/
	public $cvr;
	
	/** 
	 * 预估展现
	 **/
	public $impression;
	
	/** 
	 * 相关性,1:差,2:中,3:好
	 **/
	public $relevance_type;
	
	/** 
	 * 分类,0:宝贝,1:店铺
	 **/
	public $type;
	
	/** 
	 * 关键词
	 **/
	public $word;	
}
?>