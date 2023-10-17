<?php

/**
 * 查询条件列表;场景1、实体列表中只需填充汇总报表数据，此时条件列表传一个即可；场景2、实体列表中需同时查询两天的数据做对比，此时条件列表内传两天各自的查询条件；
 * @author auto create
 */
class RptQueryConditionVO
{
	
	/** 
	 * 流量来源(资源位包id),可为空
	 **/
	public $adzone_pkg_id_list;
	
	/** 
	 * 结束时间
	 **/
	public $end_time;
	
	/** 
	 * 是否查询实时报表，true查实时、false查离线，不传则默认查离线
	 **/
	public $is_rt;
	
	/** 
	 * 开始时间
	 **/
	public $start_time;
	
	/** 
	 * 归因口径
	 **/
	public $unify_type;	
}
?>