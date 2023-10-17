<?php

/**
 * 宝贝主图视频的数据信息，包括：视频ID，视频缩略图URL，视频时长，视频状态等信息。
 * @author auto create
 */
class MpicVideo
{
	
	/** 
	 * 主图视频记录所关联的商品的数字id
	 **/
	public $num_iid;
	
	/** 
	 * 主图视频的时长，单位：秒
	 **/
	public $video_duaration;
	
	/** 
	 * 主图视频的在淘视频中的ID
	 **/
	public $video_id;
	
	/** 
	 * 主图视频的缩略图URL
	 **/
	public $video_pic;
	
	/** 
	 * 主图视频的状态
	 **/
	public $video_status;	
}
?>