<?php

/**
 * 地域定向
 * @author auto create
 */
class AreaDTO
{
	
	/** 
	 * 地域信息
	 **/
	public $city;
	
	/** 
	 * 城市目标人群，1：正在该地区的用户，2：居住在该地区的用户，3：到该地区旅行的用户，4：该地区内的所有用户
	 **/
	public $city_target;
	
	/** 
	 * 地域定向类型，-1:不限，1：指定地区
	 **/
	public $type;	
}
?>