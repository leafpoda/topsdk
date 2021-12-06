<?php

/**
 * 绑定创意的列表
 * @author auto create
 */
class CreativeBindDto
{
	
	/** 
	 * 单元id
	 **/
	public $adgroup_id;
	
	/** 
	 * 审核拒绝原因
	 **/
	public $audit_reason;
	
	/** 
	 * 审核状态，W待审核，P审核通过，R审核拒绝
	 **/
	public $audit_status;
	
	/** 
	 * 计划id
	 **/
	public $campaign_id;
	
	/** 
	 * 创意id
	 **/
	public $creative_id;
	
	/** 
	 * 创意名称
	 **/
	public $creative_name;
	
	/** 
	 * 图片地址
	 **/
	public $img_url;
	
	/** 
	 * 创意文案
	 **/
	public $title;	
}
?>