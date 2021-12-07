<?php

/**
 * 查询条件
 * @author auto create
 */
class AdzoneQuery
{
	
	/** 
	 * 广告位尺寸
	 **/
	public $adzone_size_list;
	
	/** 
	 * 允许的创意类型(2表示图片 5表示文字链  3表示Flash 9表示FLASH不遮盖 10表示创意模板)
	 **/
	public $allow_ad_format_list;
	
	/** 
	 * 媒体类型(1表示PC 2表示无线)
	 **/
	public $media_type_list;
	
	/** 
	 * 结算类型(1表示CPM 2表示CPC)
	 **/
	public $settle_type_list;	
}
?>