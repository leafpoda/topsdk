<?php

/**
 * wordPackageSuggestQueryVO
 * @author auto create
 */
class WordPackageSuggestQueryVo
{
	
	/** 
	 * 单元id
	 **/
	public $adgroup_id;
	
	/** 
	 * 计划id
	 **/
	public $campaign_id;
	
	/** 
	 * 宝贝id
	 **/
	public $material_id;
	
	/** 
	 * 类型,overall:综合推荐,trendtheme:趋势词包,automatch:流量智选,extend:流量扩展,highquality:优质卖点词包推荐(用于卖点词包报告),new_default:新建流程默认推荐词包;
	 **/
	public $type;	
}
?>