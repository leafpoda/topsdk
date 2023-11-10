<?php

/**
 * 创意素材
 * @author auto create
 */
class ToutiaoMediaCreativeGroupV2TopDTO
{
	
	/** 
	 * 行动号召
	 **/
	public $action_texts;
	
	/** 
	 * 创意组件ID
	 **/
	public $creative_component_id;
	
	/** 
	 * 头条2.0暂不支持。智能创意自动生成开关：1：开启，0：关闭
	 **/
	public $derive_switch;
	
	/** 
	 * 视频素材，图片和视频素材上限均为10个  	
	 **/
	public $materials;
	
	/** 
	 * 标题，最多添加10个标题，每个标题最多30个字
	 **/
	public $title_materials;	
}
?>