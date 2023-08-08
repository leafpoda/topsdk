<?php

/**
 * 词包策略信息
 * @author auto create
 */
class WordPackageStrategyCommandVo
{
	
	/** 
	 * 策略（目标）的基础出价
	 **/
	public $bid_price;
	
	/** 
	 * 策略状态,1:在线,0:下线
	 **/
	public $online_status;
	
	/** 
	 * 词包策略,0:流量智选,1:好词优选,2:捡漏,2:卖点词包,3:类目优选
	 **/
	public $strategy_id;	
}
?>