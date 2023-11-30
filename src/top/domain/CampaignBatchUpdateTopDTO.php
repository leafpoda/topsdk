<?php

/**
 * 入参
 * @author auto create
 */
class CampaignBatchUpdateTopDTO
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
	 * 状态，-1：删除，0：暂停，1：启用
	 **/
	public $status;	
}
?>