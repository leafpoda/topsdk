<?php

/**
 * 报表查询条件
 * @author auto create
 */
class RptQueryVO
{
	
	/** 
	 * 查询条件列表;场景1、实体列表中只需填充汇总报表数据，此时条件列表传一个即可；场景2、实体列表中需同时查询两天的数据做对比，此时条件列表内传两天各自的查询条件；
	 **/
	public $condition_list;
	
	/** 
	 * 查询指标字段
	 **/
	public $fields;	
}
?>