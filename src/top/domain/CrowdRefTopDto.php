<?php

/**
 * 人群绑定信息
 * @author auto create
 */
class CrowdRefTopDto
{
	
	/** 
	 * 人群关联的计划id
	 **/
	public $campaign_id;
	
	/** 
	 * 人群信息
	 **/
	public $crowd;
	
	/** 
	 * 人群绑定状态(1:上线 0:下线)
	 **/
	public $online_status;
	
	/** 
	 * 人群出价
	 **/
	public $price;	
}
?>