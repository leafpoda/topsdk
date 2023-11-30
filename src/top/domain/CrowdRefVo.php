<?php

/**
 * 人群关系实体
 * @author auto create
 */
class CrowdRefVo
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
	 * 人群
	 **/
	public $crowd;
	
	/** 
	 * 人群主键id
	 **/
	public $crowd_id;
	
	/** 
	 * 定向状态,0:下线 1:上线
	 **/
	public $online_status;
	
	/** 
	 * 出价
	 **/
	public $price;	
}
?>