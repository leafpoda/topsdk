<?php

/**
 * 腾讯特有参数
 * @author auto create
 */
class TencentCreativeGroupTopDTO
{
	
	/** 
	 * 品牌名称
	 **/
	public $ad_source;
	
	/** 
	 * 是否自动生成应用直达链接:0，1
	 **/
	public $auto_open_url;
	
	/** 
	 * 按钮文案
	 **/
	public $button_text;
	
	/** 
	 * 落地页推广内容：1：单品推广，2：店铺/活动等其他推广
	 **/
	public $content_type;
	
	/** 
	 * 倒计时组件 
	 **/
	public $countdown;
	
	/** 
	 * 创意描述
	 **/
	public $description_options;
	
	/** 
	 * 创意规格模板：1：竖版视频，2：横版视频，3：大图横图，6：大图竖图，9：常规多图，10：卡片广告_横版大图，11：卡片广告_横版视频，12：常规大图，13：banner图，17：4:3视频
	 **/
	public $format;
	
	/** 
	 * 落地页链接
	 **/
	public $landing_page;
	
	/** 
	 * 落地页id
	 **/
	public $landing_page_id;
	
	/** 
	 * 创意名称
	 **/
	public $name;
	
	/** 
	 * 用户头像id
	 **/
	public $profile_id;	
}
?>