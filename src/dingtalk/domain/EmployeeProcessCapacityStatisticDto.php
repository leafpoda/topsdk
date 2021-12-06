<?php

/**
 * 返回结果
 * @author auto create
 */
class EmployeeProcessCapacityStatisticDto
{
	
	/** 
	 * 订单品类
	 **/
	public $category;
	
	/** 
	 * 工序技能id
	 **/
	public $process_capacity_id;
	
	/** 
	 * 结构化工序id
	 **/
	public $process_structural_cluster_id;
	
	/** 
	 * 经验值
	 **/
	public $production_quantity;
	
	/** 
	 * 统计类型
	 **/
	public $statistic_category;
	
	/** 
	 * 统计值
	 **/
	public $statistics_value;
	
	/** 
	 * 租户
	 **/
	public $tenant_id;
	
	/** 
	 * 工号
	 **/
	public $work_no;	
}
?>