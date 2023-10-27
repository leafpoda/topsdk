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
	 * 竞争指数
	 **/
	public $competition_index;
	
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
	 * 展现指数
	 **/
	public $impression_index;
	
	/** 
	 * 进店次数
	 **/
	public $item_click;
	
	/** 
	 * 下单转化率
	 **/
	public $item_click_coverage;
	
	/** 
	 * 助攻roi
	 **/
	public $mta_roi;
	
	/** 
	 * 预估质量分
	 **/
	public $qscore;
	
	/** 
	 * 推荐原因打标
	 **/
	public $reason_tag_list;
	
	/** 
	 * 相关性,1:差,2:中,3:好
	 **/
	public $relevance_type;
	
	/** 
	 * 搜索指数
	 **/
	public $search_index;
	
	/** 
	 * 引导下单数
	 **/
	public $transaction_shipping_total;
	
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