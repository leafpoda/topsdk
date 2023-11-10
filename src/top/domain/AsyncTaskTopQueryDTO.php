<?php

/**
 * 查询参数
 * @author auto create
 */
class AsyncTaskTopQueryDTO
{
	
	/** 
	 * 广告主id
	 **/
	public $advertiser_id;
	
	/** 
	 * 任务ids
	 **/
	public $ids;
	
	/** 
	 * 任务名称
	 **/
	public $name;
	
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