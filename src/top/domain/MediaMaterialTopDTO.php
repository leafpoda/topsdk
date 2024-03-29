<?php

/**
 * 视频素材，图片和视频素材上限均为10个
 * @author auto create
 */
class MediaMaterialTopDTO
{
	
	/** 
	 * 素材id
	 **/
	public $cc_material_id;
	
	/** 
	 * 达人视频素材id 广告形式为抖音号视频的时候必传  从达人授权关系接口获取。video_info.material_id
	 **/
	public $direct_material_id;
	
	/** 
	 * 广告形式，1：竖版视频，2：横版视频，3：大图横图，5：小图，6：大图竖图，7：开屏图片。竖版视频：格式要求：mp4、mpeg、3gp、avi 视频格式，建议尺寸要求：宽高比9:16，分辨率≥ 720*1280，视频码率≥516kbps，时长≥4s； 竖版视频-视频封面：格式要求：jpg、jpeg、png 图片格式，尺寸要求：宽高比9:16，1440*2560 ≤ 尺寸≥ 720*1280； 横版视频：格式要求：mp4、mpeg、3gp、avi 视频格式，建议尺寸要求：宽高比16:9，分辨率≥ 1280*720，视频码率≥516kbps，时长≥4s,大小≤1000M； 横版视频-视频封面：格式要求：jpg、jpeg、png 图片格式，尺寸要求：宽高比16:9，2560*1440 ≤ 尺寸≥ 1280*720； 大图横图：格式要求：jpg、jpeg、png 图片格式，尺寸要求：宽高比16:9，2560*1440 ≤ 尺寸≥ 1280*720； 小图：格式要求：jpg、jpeg、png 图片格式，尺寸要求：宽高比1.52，1368*900 ≤ 尺寸≥ 456*300； 大图竖图：格式要求：jpg、jpeg、png 图片格式，尺寸要求：宽高比9:16，1440*2560 ≤ 尺寸≥ 720*1280；
	 **/
	public $format;
	
	/** 
	 * 视频链接  广告形式为抖音号视频的时候必传  从达人授权关系接口获取。video_info.url
	 **/
	public $native_video_url;
	
	/** 
	 * 达人视频原生id  广告形式为抖音号视频的时候必传  从达人授权关系接口获取。video_info.talent_item_id
	 **/
	public $talent_item_id;
	
	/** 
	 * 达人视频封面id  广告形式为抖音号视频的时候必传  从达人授权关系接口获取。video_info.video_cover_id
	 **/
	public $talent_video_cover_id;
	
	/** 
	 * 达人视频id. 广告形式为抖音号视频的时候必传  从达人授权关系接口获取。video_info.video_id
	 **/
	public $talent_video_id;
	
	/** 
	 * 素材类型，1：图片，2：视频
	 **/
	public $type;
	
	/** 
	 * 视频封面，素材类型为视频时必填
	 **/
	public $video_conver_material;	
}
?>