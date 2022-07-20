<?php

/**
 * 资源位审核结果
 * @author auto create
 */
class AuditResultTopDto
{
	
	/** 
	 * 审核原因
	 **/
	public $audit_reason_list;
	
	/** 
	 * 审核状态
	 **/
	public $audit_status;
	
	/** 
	 * 审核状态展示， 审核通过P 审核拒绝R 待审核W
	 **/
	public $status;
	
	/** 
	 * 标id
	 **/
	public $tag;
	
	/** 
	 * 资源位名称
	 **/
	public $tag_name;	
}
?>