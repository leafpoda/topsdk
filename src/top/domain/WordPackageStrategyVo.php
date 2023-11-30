<?php

/**
 * 词包策略信息
 * @author auto create
 */
class WordPackageStrategyVo
{
	
	/** 
	 * 关键词基础出价
	 **/
	public $bid_price;
	
	/** 
	 * 策略状态,1:在线,0:下线
	 **/
	public $online_status;
	
	/** 
	 * 横向管理-实体数据列表-通用标签
	 **/
	public $reason_tag_list;
	
	/** 
	 * 词包策略,0:流量智选,1:好词优选,2:捡漏,2:卖点词包,3:类目优选
	 **/
	public $strategy_id;
	
	/** 
	 * 词包策略名称
	 **/
	public $strategy_name;	
}
?>