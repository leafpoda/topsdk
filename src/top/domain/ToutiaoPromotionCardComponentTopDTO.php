<?php

/**
 * 组件详细信息-图片磁贴
 * @author auto create
 */
class ToutiaoPromotionCardComponentTopDTO
{
	
	/** 
	 * 出现时间，单位s。 当show_time为自定义时必传，小于等于59，大于等于10。 当show_time为系统默认时，可不传，默认为10
	 **/
	public $duration;
	
	/** 
	 * 投放结束时间。格式: "2020-12-01"
	 **/
	public $end_time;
	
	/** 
	 * 图片id 尺寸<=540*276px ，大小<2M
	 **/
	public $img_id;
	
	/** 
	 * 出现时间类型。1 系统默认，2自定义。不传代表系统默认
	 **/
	public $show_time;
	
	/** 
	 * 投放开始时间。格式: "2020-12-01"
	 **/
	public $start_time;	
}
?>