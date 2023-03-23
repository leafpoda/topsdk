<?php

/**
 * 推送失败的信息
 * @author auto create
 */
class MaterialShareResultTopDTO
{
	
	/** 
	 * 广告主ID，素材归属的广告主
	 **/
	public $advertiser_id;
	
	/** 
	 * 推送失败原因
	 **/
	public $fail_reason;
	
	/** 
	 * 图片ID
	 **/
	public $image_id;
	
	/** 
	 * 要推送到的广告主ID
	 **/
	public $target_advertiser_id;
	
	/** 
	 * 文件类型，1：图片，2：视频
	 **/
	public $type;
	
	/** 
	 * 视频ID
	 **/
	public $video_id;	
}
?>