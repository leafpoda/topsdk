<?php

/**
 * 查询关联的定向人群的条件
 * @author auto create
 */
class CrowdRefQueryTopDto
{
	
	/** 
	 * 计划id
	 **/
	public $campaign_id;
	
	/** 
	 * 当前页要显示数据的起始位置
	 **/
	public $offset;
	
	/** 
	 * 人群绑定状态(1:上线 0:下线)
	 **/
	public $online_status;
	
	/** 
	 * 每页显示的记录条数
	 **/
	public $page_size;	
}
?>