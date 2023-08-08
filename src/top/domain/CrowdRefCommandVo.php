<?php

/**
 * list
 * @author auto create
 */
class CrowdRefCommandVo
{
	
	/** 
	 * 单元id,单元已经存在场景必填
	 **/
	public $adgroup_id;
	
	/** 
	 * 计划id,计划已经存在场景必填
	 **/
	public $campaign_id;
	
	/** 
	 * 人群
	 **/
	public $crowd;
	
	/** 
	 * 人群主键id,人群已经存在场景必填
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