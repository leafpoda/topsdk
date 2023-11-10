<?php

/**
 * 查询参数
 * @author auto create
 */
class CampaignTopQueryDTO
{
	
	/** 
	 * 广告主id
	 **/
	public $advertiser_id;
	
	/** 
	 * 计划组ids
	 **/
	public $ids;
	
	/** 
	 * 第几页
	 **/
	public $page_no;
	
	/** 
	 * 每页多少条
	 **/
	public $page_size;
	
	/** 
	 * 平台版本，9999：升级版API（仅巨量2.0API需传入）
	 **/
	public $version;	
}
?>