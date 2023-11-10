<?php

/**
 * 返回结果,审核拒绝的账户不会返回
 * @author auto create
 */
class AdvertiserTopDTO
{
	
	/** 
	 * 客户名称
	 **/
	public $customer_name;
	
	/** 
	 * 广告主id
	 **/
	public $id;
	
	/** 
	 * 组织id
	 **/
	public $master_id;
	
	/** 
	 * 直投媒体
	 **/
	public $media;
	
	/** 
	 * 广告主名称
	 **/
	public $name;
	
	/** 
	 * 账户转化类型 1 引流 2 深转
	 **/
	public $optimize_type;
	
	/** 
	 * 组织名称
	 **/
	public $organization_name;
	
	/** 
	 * 广告主状态，1：启用，0：停用
	 **/
	public $status;	
}
?>