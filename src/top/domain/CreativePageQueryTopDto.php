<?php

/**
 * 创意查询条件信息
 * @author auto create
 */
class CreativePageQueryTopDto
{
	
	/** 
	 * 创意审核状态, P审核通过 W待审核 R审核拒绝
	 **/
	public $audit_status_list;
	
	/** 
	 * 计划ID列表
	 **/
	public $campaign_id_list;
	
	/** 
	 * 创意ID列表
	 **/
	public $creative_id_list;
	
	/** 
	 * 当前页要显示数据的起始位置
	 **/
	public $offset;
	
	/** 
	 * 创意状态, 1表示在线 0表示下线即回收状态
	 **/
	public $online_status_list;
	
	/** 
	 * 每页显示的记录条数
	 **/
	public $page_size;
	
	/** 
	 * 创意来源，1表示本地上传 3表示模板创意 8表示原生创意
	 **/
	public $source_list;	
}
?>