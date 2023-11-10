<?php

/**
 * 查询参数
 * @author auto create
 */
class CreativeTopQueryDTO
{
	
	/** 
	 * 计划id
	 **/
	public $adgroup_id;
	
	/** 
	 * 广告主id
	 **/
	public $advertiser_id;
	
	/** 
	 * 计划组id
	 **/
	public $campaign_id;
	
	/** 
	 * 创建时间小于等于endDate的数据. 格式:yyyy-MM-dd   查询最长跨度为三个月
	 **/
	public $end_time;
	
	/** 
	 * 创意id
	 **/
	public $ids;
	
	/** 
	 * 第几页
	 **/
	public $page_no;
	
	/** 
	 * 每页多少条
	 **/
	public $page_size;
	
	/** 
	 * 创建时间大于等于startDate的数据  格式:yyyy-MM-dd   查询最长跨度为三个月
	 **/
	public $start_time;	
}
?>