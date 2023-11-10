<?php

/**
 * 返回结果
 * @author auto create
 */
class TalentAuthorizationTopDTO
{
	
	/** 
	 * 授权状态(1:授权中 2:待授权确认 3:授权失效)
	 **/
	public $auth_status;
	
	/** 
	 * 授权类型(1:抖音号授权 2:单视频授权)
	 **/
	public $auth_type;
	
	/** 
	 * 授权结束时间
	 **/
	public $end_time;
	
	/** 
	 * 授权开始时间
	 **/
	public $start_time;
	
	/** 
	 * 达人号
	 **/
	public $talent_id;
	
	/** 
	 * 达人号名称
	 **/
	public $talent_name;
	
	/** 
	 * 授权视频信息
	 **/
	public $video_info;	
}
?>