<?php

/**
 * 定向，未特殊标明的不传字段的值表示不限
 * @author auto create
 */
class AdgroupTargetTopDTO
{
	
	/** 
	 * 年龄
	 **/
	public $age;
	
	/** 
	 * 地域定向
	 **/
	public $area;
	
	/** 
	 * 性别，-1：不限，1：女，2：男
	 **/
	public $gender;
	
	/** 
	 * 过滤已转化用户，0(默认)：不限；2：同计划广告；3：同账户广告
	 **/
	public $hide_if_converted;
	
	/** 
	 * 网络，-1：不限，0：Wi-Fi，2：2G，3：3G，4：4G
	 **/
	public $network;	
}
?>