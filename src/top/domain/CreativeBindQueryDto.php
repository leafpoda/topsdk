<?php

/**
 * 绑定查询条件
 * @author auto create
 */
class CreativeBindQueryDto
{
	
	/** 
	 * 单元id
	 **/
	public $adgroup_id;
	
	/** 
	 * 审核状态，W待审核，P审核通过，R审核拒绝
	 **/
	public $audit_status;
	
	/** 
	 * 创意id列表
	 **/
	public $creative_id_list;
	
	/** 
	 * 创意名称
	 **/
	public $creative_name;
	
	/** 
	 * 分页起始位置
	 **/
	public $offset;
	
	/** 
	 * 分页页码
	 **/
	public $page_size;	
}
?>