<?php

/**
 * 创意形式信息
 * @author auto create
 */
class CreativeFormInfoVo
{
	
	/** 
	 * 底部文案
	 **/
	public $content;
	
	/** 
	 * 创意添加途径,video:视频创意,creativeCool:创意库,local:图片,template:模板创意
	 **/
	public $creative_add_operators;
	
	/** 
	 * 当前计划下的创意数量
	 **/
	public $current_creative_num;
	
	/** 
	 * 前端用 文案2
	 **/
	public $desc_info;
	
	/** 
	 * 创意图标
	 **/
	public $icon;
	
	/** 
	 * 数量上限
	 **/
	public $num_limit;
	
	/** 
	 * 模板id，场景推广使用，创建创意时候写到创意上面
	 **/
	public $template_id;
	
	/** 
	 * 前端用 文案1
	 **/
	public $text;
	
	/** 
	 * tab类型,101:竖版大图800x1200,102:竖版视频800x1200,103:竖版长图513x750,104:竖版视频512x750,105:竖版模板513x750,113:方图800x800,114:方视频800x800,115:横版大图320x90,116:横版大图240x100,117:横版大图140x120,118:横版大图730x350,119:横版大图846x220,120:横版大图780x210,121:横版大图840x90,122:横版大图180x100,124:横版大图980x200,125:横版大图820x90,126:竖版视频750x1000,127:竖版视频720x960,128:竖版视频1080x1440,129:竖版视频720x1280,130:竖版视频1080x1920
	 **/
	public $type;	
}
?>