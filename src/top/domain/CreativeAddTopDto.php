<?php

/**
 * 创意添加实体
 * @author auto create
 */
class CreativeAddTopDto
{
	
	/** 
	 * 创意落地页，主体为自定义的时候需要填写
	 **/
	public $click_url;
	
	/** 
	 * 创意名称
	 **/
	public $creative_name;
	
	/** 
	 * 创意主体类型
	 **/
	public $creative_promotion;
	
	/** 
	 * 创意尺寸
	 **/
	public $creative_size;
	
	/** 
	 * 创意结束时间
	 **/
	public $end_time;
	
	/** 
	 * 创意图片地址，淘系弹内可访问的地址
	 **/
	public $image_path;
	
	/** 
	 * 创意开始时间
	 **/
	public $start_time;
	
	/** 
	 * 创意推广标题，商品主体创意必须有
	 **/
	public $title;	
}
?>