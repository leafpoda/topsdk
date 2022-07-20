<?php

/**
 * 新增定向人群
 * @author auto create
 */
class UpgradeCrowdDto
{
	
	/** 
	 * 单元id
	 **/
	public $adgroup_id;
	
	/** 
	 * 是否绑定crowd
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
	 * 人群名
	 **/
	public $crowd_name;
	
	/** 
	 * 主键
	 **/
	public $id;
	
	/** 
	 * 出价
	 **/
	public $matrix_price;
	
	/** 
	 * 状态
	 **/
	public $status;
	
	/** 
	 * 人群标签
	 **/
	public $target_label;	
}
?>