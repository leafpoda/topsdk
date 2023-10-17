<?php

/**
 * 批量结果集
 * @author auto create
 */
class WordVo
{
	
	/** 
	 * 单元id
	 **/
	public $adgroup_id;
	
	/** 
	 * 关键词基础出价
	 **/
	public $bid_price;
	
	/** 
	 * 抢位信息
	 **/
	public $bid_strategy_info;
	
	/** 
	 * 词id
	 **/
	public $bidword_id;
	
	/** 
	 * 计划id,计划已经存在场景必填,eg:添加主体、编辑计划状态等场景
	 **/
	public $campaign_id;
	
	/** 
	 * 匹配类型,1:精准匹配,4:广泛匹配
	 **/
	public $match_scope;
	
	/** 
	 * 报表数据
	 **/
	public $report_info;
	
	/** 
	 * 状态,reject:排查拒绝,preview:排查中,launch:投放中,noflow:无展现
	 **/
	public $status;
	
	/** 
	 * 词
	 **/
	public $word;	
}
?>