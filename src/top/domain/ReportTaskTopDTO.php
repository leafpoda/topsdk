<?php

/**
 * 入参，每个账户(adv)每天最多创建20个任务
 * @author auto create
 */
class ReportTaskTopDTO
{
	
	/** 
	 * 广告主id
	 **/
	public $advertiser_id;
	
	/** 
	 * 强制生成新的任务，参数相同会复用之前的任务，1：是，0：否
	 **/
	public $force;
	
	/** 
	 * 任务名称
	 **/
	public $name;
	
	/** 
	 * 报表任务参数
	 **/
	public $params;
	
	/** 
	 * 平台版本，9999：升级版API（仅巨量2.0API需传入）
	 **/
	public $version;	
}
?>