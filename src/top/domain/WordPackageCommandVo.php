<?php

/**
 * 关键词包集合
 * @author auto create
 */
class WordPackageCommandVo
{
	
	/** 
	 * 单元id,单元已经存在场景必填
	 **/
	public $adgroup_id;
	
	/** 
	 * 词包基础出价
	 **/
	public $bid_price;
	
	/** 
	 * 计划id,计划已经存在场景必填
	 **/
	public $campaign_id;
	
	/** 
	 * 词包状态,1:在线,0:下线
	 **/
	public $status;
	
	/** 
	 * 词包策略信息
	 **/
	public $strategy_list;
	
	/** 
	 * 词包id,词包已经存在场景必填
	 **/
	public $word_package_id;
	
	/** 
	 * 词包名称
	 **/
	public $word_package_name;
	
	/** 
	 * 词包类型,0:流量智选,1:好词优选,19:捡漏,20:卖点词包,21:类目优选
	 **/
	public $word_package_type;	
}
?>