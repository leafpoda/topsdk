<?php

/**
 * list
 * @author auto create
 */
class CreativeCommandVo
{
	
	/** 
	 * 单元id
	 **/
	public $adgroup_id;
	
	/** 
	 * 二跳地址
	 **/
	public $click_url;
	
	/** 
	 * 跳转地址媒体类型,1:PC,2:无线,3:PC和无线
	 **/
	public $clickurl_media_type_list;
	
	/** 
	 * 前端创意中心id
	 **/
	public $creative_center_id;
	
	/** 
	 * 创意id
	 **/
	public $creative_id;
	
	/** 
	 * 创意名称
	 **/
	public $creative_name;
	
	/** 
	 * 推广主体
	 **/
	public $creative_promotion_entity;
	
	/** 
	 * 视频保护,0-关闭,1-开启
	 **/
	public $creative_protection;
	
	/** 
	 * 创意尺寸
	 **/
	public $creative_size;
	
	/** 
	 * 创意结束时间，用户设置
	 **/
	public $end_time;
	
	/** 
	 * 一跳地址
	 **/
	public $image_path;
	
	/** 
	 * 是否裁剪过,true:是,false:否
	 **/
	public $is_clip;
	
	/** 
	 * 创意关联宝贝
	 **/
	public $item_id_list;
	
	/** 
	 * 从海棠获取的地址
	 **/
	public $js_in_html;
	
	/** 
	 * 单品创意素材
	 **/
	public $material_list;
	
	/** 
	 * 外部实体id,eg:前端创意中心id
	 **/
	public $outer_id;
	
	/** 
	 * 创意来源,1:本地上传,3:CreativeCenter
	 **/
	public $source;
	
	/** 
	 * 创意开始时间，用户设置
	 **/
	public $start_time;
	
	/** 
	 * tab类型,
	 **/
	public $tab_type;
	
	/** 
	 * 从海棠获取的templateData
	 **/
	public $template_data;
	
	/** 
	 * 创意模板ID,
	 **/
	public $template_id;
	
	/** 
	 * 推广标题
	 **/
	public $title;
	
	/** 
	 * 创意格式,2:图片,10:创意模板,12:微视频
	 **/
	public $tp_format;
	
	/** 
	 * 视频时长
	 **/
	public $video_duration;
	
	/** 
	 * 视频id
	 **/
	public $video_id;
	
	/** 
	 * 视频封面地址
	 **/
	public $video_image_path;
	
	/** 
	 * 视频地址
	 **/
	public $video_path;	
}
?>