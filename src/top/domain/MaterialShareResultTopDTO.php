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
	 * 推送后新生成的图片ID
	 **/
	public $image_id;
	
	/** 
	 * 推送的原图片id
	 **/
	public $original_image_id;
	
	/** 
	 * 推送的原视频id
	 **/
	public $original_video_id;
	
	/** 
	 * 推送是否成功
	 **/
	public $success;
	
	/** 
	 * 要推送到的广告主ID
	 **/
	public $target_advertiser_id;
	
	/** 
	 * 文件类型，1：图片，2：视频
	 **/
	public $type;
	
	/** 
	 * 推送后新生成的视频ID
	 **/
	public $video_id;	
}
?>