<?php

/**
 * 人群查询条件
 * @author auto create
 */
class CrowdQueryDTO
{
	
	/** 
	 * 人群名称模糊查询
	 **/
	public $crowd_name;
	
	/** 
	 * 3-未同步钻展渠道人群;2-过期失效人群,11-钻展同步中,12-钻展已同步,10-钻展同步中和已同步人群
	 **/
	public $query_status;	
}
?>