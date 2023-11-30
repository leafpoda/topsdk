<?php

/**
 * 创意素材
 * @author auto create
 */
class ToutiaoMediaCreativeGroupV2TopDTO
{
	
	/** 
	 * 行动号召，最多10个行动号召，单个号召2-6个字
	 **/
	public $action_texts;
	
	/** 
	 * 锚点组件id
	 **/
	public $anchor_component_id;
	
	/** 
	 * 锚点启用类型 1 不启用  2 手动选择   注:账户类型为深转,推广目的为电商店铺推广且为原生广告投放才可使用锚点  
	 **/
	public $anchor_related_type;
	
	/** 
	 * 创意组件ID
	 **/
	public $creative_component_id;
	
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