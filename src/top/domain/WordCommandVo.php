<?php

/**
 * 批量结果集
 * @author auto create
 */
class WordCommandVo
{
	
	/** 
	 * 单元id,单元已经存在场景必填
	 **/
	public $adgroup_id;
	
	/** 
	 * 关键词基础出价
	 **/
	public $bid_price;
	
	/** 
	 * 关键词id,关键词已经存在场景必填
	 **/
	public $bidword_id;
	
	/** 
	 * 计划id,计划已经存在场景必填
	 **/
	public $campaign_id;
	
	/** 
	 * 匹配类型,1:精准匹配,4:广泛匹配
	 **/
	public $match_scope;
	
	/** 
	 * 词包状态,1:在线,0:下线
	 **/
	public $online_status;
	
	/** 
	 * 词
	 **/
	public $word;	
}
?>