<?php

/**
 * 分页列表
 * @author auto create
 */
class CheckinRecordVo
{
	
	/** 
	 * 签到时间,单位毫秒
	 **/
	public $checkin_time;
	
	/** 
	 * 签到详细地址
	 **/
	public $detail_place;
	
	/** 
	 * 签到照片url列表
	 **/
	public $image_list;
	
	/** 
	 * 签到位置维度（暂未开放）
	 **/
	public $latitude;
	
	/** 
	 * 签到位置经度（暂未开放）
	 **/
	public $longitude;
	
	/** 
	 * 签到地址
	 **/
	public $place;
	
	/** 
	 * 签到备注
	 **/
	public $remark;
	
	/** 
	 * 员工唯一标识
	 **/
	public $userid;	
}
?>