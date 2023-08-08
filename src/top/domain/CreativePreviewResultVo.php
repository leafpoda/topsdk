<?php

/**
 * 创意预览返回前端展示对象
 * @author auto create
 */
class CreativePreviewResultVo
{
	
	/** 
	 * 预览落地页地址
	 **/
	public $preview_click_url;
	
	/** 
	 * 预览创意类型,2:图片,10:创意模板,12:微视频
	 **/
	public $preview_format;
	
	/** 
	 * 预览创意图片地址
	 **/
	public $preview_img_url;
	
	/** 
	 * 预览创意尺寸
	 **/
	public $preview_scale;
	
	/** 
	 * 预览创意尺寸
	 **/
	public $preview_size;
	
	/** 
	 * 视频封面
	 **/
	public $preview_video_image;
	
	/** 
	 * 视频地址
	 **/
	public $preview_video_path;	
}
?>