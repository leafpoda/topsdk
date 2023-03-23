<?php

/**
 * 入参
 * @author auto create
 */
class MaterialShareTopDTO
{
	
	/** 
	 * 广告主ID，素材归属的广告主
	 **/
	public $advertiser_id;
	
	/** 
	 * 图片IDs，图片和视频必须二选一，一次最多10个
	 **/
	public $image_ids;
	
	/** 
	 * 要推送到的广告主IDs，一次最多50个
	 **/
	public $target_advertiser_ids;
	
	/** 
	 * 文件类型，1：图片，2：视频
	 **/
	public $type;
	
	/** 
	 * 视频IDs，图片和视频必须二选一，一次最多10个
	 **/
	public $video_ids;	
}
?>