<?php

/**
 * 报表查询条件
 * @author auto create
 */
class RptQueryConditionVo
{
	
	/** 
	 * 流量来源（资源位包id）
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
	 * 归因类型
	 **/
	public $unify_type;	
}
?>