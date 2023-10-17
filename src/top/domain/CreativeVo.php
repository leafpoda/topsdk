<?php

/**
 * 批量结果集
 * @author auto create
 */
class CreativeVo
{
	
	/** 
	 * 审核信息
	 **/
	public $adzone_audit_result_list;
	
	/** 
	 * 审核信息
	 **/
	public $audit;
	
	/** 
	 * 关键词推广素材
	 **/
	public $children;
	
	/** 
	 * 二跳地址
	 **/
	public $click_url;
	
	/** 
	 * 跳转地址媒体类型,1:PC,2:无线,3:PC和无线
	 **/
	public $clickurl_media_type_list;
	
	/** 
	 * 创建时间
	 **/
	public $create_time;
	
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
	 * 创意尺寸
	 **/
	public $creative_size;
	
	/** 
	 * 创意分类,1:静态创意,2:智能创意,3:PSD创意,4:动态文案创意,5:自动化创意,6:智能创意,7:综合静态创意,8:综合智能创意,9:自动直播创意,10:元素化创意,11:素材类创意,12:钻展多图创意
	 **/
	public $creative_type;
	
	/** 
	 * 创意结束时间，用户设置
	 **/
	public $end_time;
	
	/** 
	 * 扩展数据
	 **/
	public $extend_data;
	
	/** 
	 * 创意格式,1:文字,2:图片,3:Flash,4:视频,5:文字链,9:FLASH不遮盖,10:创意模板,11:视频直播,12:微视频,203:智能创意-三图创意
	 **/
	public $format;
	
	/** 
	 * 一跳地址
	 **/
	public $image_path;
	
	/** 
	 * 创意关联宝贝
	 **/
	public $item_id_list;
	
	/** 
	 * 单品创意视频
	 **/
	public $item_videos;
	
	/** 
	 * 从海棠获取的地址
	 **/
	public $js_in_html;
	
	/** 
	 * 创意是否为主图视频创意，异步创建,1:是,其他不是
	 **/
	public $main_pic_video;
	
	/** 
	 * 物料图片信息
	 **/
	public $material_image_info;
	
	/** 
	 * 单品创意素材
	 **/
	public $material_list;
	
	/** 
	 * 创意状态,1:ON,-1:ARCHIVE
	 **/
	public $online_status;
	
	/** 
	 * 外部实体id,eg:前端创意中心id
	 **/
	public $outer_id;
	
	/** 
	 * 创意预览信息
	 **/
	public $preview_list;
	
	/** 
	 * 创意来源,1:本地上传,2:BannerMaker,3:CreativeCenter,4:LuBan,5:直播广场,6:活动招商,7:海棠,8:原生创意
	 **/
	public $source;
	
	/** 
	 * 创意开始时间，用户设置
	 **/
	public $start_time;
	
	/** 
	 * tab类型,101:竖版大图800x1200,102:竖版视频800x1200,103:竖版长图513x750,104:竖版视频512x750,105:竖版模板513x750,113:方图800x800,114:方视频800x800,115:横版大图320x90,116:横版大图240x100,117:横版大图140x120,118:横版大图730x350,119:横版大图846x220,120:横版大图780x210,121:横版大图840x90,122:横版大图180x100,124:横版大图980x200,125:横版大图820x90,126:竖版视频750x1000,127:竖版视频720x960,128:竖版视频1080x1440,129:竖版视频720x1280,130:竖版视频1080x1920
	 **/
	public $tab_type;
	
	/** 
	 * tab类型名称,101:竖版大图800x1200,102:竖版视频800x1200,103:竖版长图513x750,104:竖版视频512x750,105:竖版模板513x750,113:方图800x800,114:方视频800x800,115:横版大图320x90,116:横版大图240x100,117:横版大图140x120,118:横版大图730x350,119:横版大图846x220,120:横版大图780x210,121:横版大图840x90,122:横版大图180x100,124:横版大图980x200,125:横版大图820x90,126:竖版视频750x1000,127:竖版视频720x960,128:竖版视频1080x1440,129:竖版视频720x1280,130:竖版视频1080x1920
	 **/
	public $tab_type_name;
	
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
	 * 创意类型名称,1:自定义创意,1:主副图创意,1:主图视频创意,5:智能创意
	 **/
	public $type;
	
	/** 
	 * 创意类型名称,1:自定义创意,1:主副图创意,1:主图视频创意,5:智能创意
	 **/
	public $type_name;
	
	/** 
	 * 更新时间
	 **/
	public $update_time;
	
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