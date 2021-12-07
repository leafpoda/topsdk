<?php

/**
 * 创意绑定的查询信息
 * @author auto create
 */
class CreativeBindQueryTopDto
{
	
	/** 
	 * adgroupId
	 **/
	public $adgroup_id;
	
	/** 
	 * 场景和bizCode的对应关系为：拉新快adStrategyDkx，上新快adStrategyShangXin ，货品加速adStrategyProductSpeed，入会快adStrategyRuHui，预热蓄水adStrategyYuRe，爆发收割adStrategyBaoFa
	 **/
	public $biz_cod;
	
	/** 
	 * 计划id
	 **/
	public $campaign_id;
	
	/** 
	 * campaignIdList
	 **/
	public $campaign_id_list;
	
	/** 
	 * 报表查询参数
	 **/
	public $report_query;
	
	/** 
	 * status
	 **/
	public $status;	
}
?>