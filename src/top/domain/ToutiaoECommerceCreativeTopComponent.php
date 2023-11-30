<?php

/**
 * 组件详细信息-电商磁贴-头条
 * @author auto create
 */
class ToutiaoECommerceCreativeTopComponent
{
	
	/** 
	 * 按钮文案。只支持立即下单和立即购买
	 **/
	public $button_text;
	
	/** 
	 * 投放结束时间。格式: "2020-12-01"
	 **/
	public $end_time;
	
	/** 
	 * 图片，宽高比1:1，尺寸最大为174*174，大小<1M
	 **/
	public $img_id;
	
	/** 
	 * 磁贴标题。长度最大为10。一个中文长度为1
	 **/
	public $magnet_title;
	
	/** 
	 * 投放开始时间。格式: "2020-12-01"
	 **/
	public $start_time;
	
	/** 
	 * 文案内容。长度最大为15。一个中文长度为1
	 **/
	public $title;	
}
?>