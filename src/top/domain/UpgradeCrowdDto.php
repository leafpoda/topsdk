<?php

/**
 * 人群
 * @author auto create
 */
class UpgradeCrowdDTO
{
	
	/** 
	 * 单元id
	 **/
	public $adgroup_id;
	
	/** 
	 * 是否绑定定向
	 **/
	public $bind_crowd;
	
	/** 
	 * 计划id
	 **/
	public $campaign_id;
	
	/** 
	 * 人群描述
	 **/
	public $crowd_desc;
	
	/** 
	 * 人群名称
	 **/
	public $crowd_name;
	
	/** 
	 * 人群id，查询时返回的人群id
	 **/
	public $id;
	
	/** 
	 * 系统自动生成
	 **/
	public $matrix_price;
	
	/** 
	 * 人群状态，ONLINE在线，OFFLINE下线
	 **/
	public $status;
	
	/** 
	 * 标签
	 **/
	public $target_label;	
}
?>