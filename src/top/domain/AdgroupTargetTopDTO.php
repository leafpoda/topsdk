<?php

/**
 * 定向
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
	 * 过滤已转化用户，0(默认)：不限；1：广告组2：广告计划；3：本账户；4：公司主体；5：APP
	 **/
	public $hide_if_converted;
	
	/** 
	 * 网络，-1：不限，0：Wi-Fi，1：移动网络，2：2G，3：3G，4：4G
	 **/
	public $network;	
}
?>