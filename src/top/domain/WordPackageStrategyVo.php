<?php

/**
 * 词包策略信息
 * @author auto create
 */
class WordPackageStrategyVo
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
	 * 计划id,计划已经存在场景必填,eg:添加主体、编辑计划状态等场景
	 **/
	public $campaign_id;
	
	/** 
	 * 策略状态,1:在线,0:下线
	 **/
	public $online_status;
	
	/** 
	 * 词包策略的报表数据
	 **/
	public $report_info;
	
	/** 
	 * 词包策略,0:流量智选,1:好词优选,2:捡漏,2:卖点词包,3:类目优选
	 **/
	public $strategy_id;
	
	/** 
	 * 词包策略名称
	 **/
	public $strategy_name;
	
	/** 
	 * 词包类型,0:流量智选,1:好词优选,19:捡漏,20:卖点词包,21:类目优选
	 **/
	public $word_package_type;	
}
?>