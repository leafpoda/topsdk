<?php

/**
 * 快手特有参数
 * @author auto create
 */
class KuaishouCreativeGroupTopDTO
{
	
	/** 
	 * 创意组件，投放范围是快手默认时必填
	 **/
	public $creative_component_id;
	
	/** 
	 * 创意名称
	 **/
	public $name;
	
	/** 
	 * 封面贴纸id，通过封面贴纸查询接口获取
	 **/
	public $sticker_styles;
	
	/** 
	 * 封面广告语
	 **/
	public $sticker_titles;	
}
?>