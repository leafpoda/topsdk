<?php

/**
 * 广告位查询结果列表
 * @author auto create
 */
class AdzoneDTO
{
	
	/** 
	 * 广告位id
	 **/
	public $adzone_id;
	
	/** 
	 * 广告位等级
	 **/
	public $adzone_level;
	
	/** 
	 * 广告位名称
	 **/
	public $adzone_name;
	
	/** 
	 * 广告位尺寸列表
	 **/
	public $adzone_size_list;
	
	/** 
	 * 广告位允许的创意类型列表
	 **/
	public $allow_ad_format_list;
	
	/** 
	 * 广告位允许的广告主类型。 -1表示不限，1表示淘宝，2表示天猫，3表示淘宝和天猫
	 **/
	public $allow_adv_type;
	
	/** 
	 * 媒体类型。1表示PC 2表示无线
	 **/
	public $media_type;	
}
?>