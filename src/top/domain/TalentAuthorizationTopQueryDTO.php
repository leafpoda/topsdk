<?php

/**
 * 入参
 * @author auto create
 */
class TalentAuthorizationTopQueryDTO
{
	
	/** 
	 * 广告主id
	 **/
	public $advertiser_id;
	
	/** 
	 * 授权状态(1:授权中 2:待授权确认 3:授权失效)
	 **/
	public $auth_status;
	
	/** 
	 * 授权类型(1:抖音号授权 2:单视频授权)
	 **/
	public $auth_type;
	
	/** 
	 * 页码
	 **/
	public $page_no;
	
	/** 
	 * 每页显示数量
	 **/
	public $page_size;
	
	/** 
	 * 授权达人类型(1:微信视频号 2:微信广告专用视频号 3:抖音授权)
	 **/
	public $type;	
}
?>