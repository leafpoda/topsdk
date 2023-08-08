<?php

/**
 * 批量结果集
 * @author auto create
 */
class CrowdBindResultVo
{
	
	/** 
	 * 单元id
	 **/
	public $adgroup_id;
	
	/** 
	 * 计划id,计划已经存在场景必填,eg:添加主体、编辑计划状态等场景
	 **/
	public $campaign_id;
	
	/** 
	 * 定向关联关系
	 **/
	public $crowd_list;	
}
?>