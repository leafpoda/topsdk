<?php

/**
 * 组件详细信息-推广卡片-头条
 * @author auto create
 */
class ToutiaoPromotionCardComponentTopDTO
{
	
	/** 
	 * 行动号召。内容长度要求：2 ≤ x ≤6。一个中文长度为1
	 **/
	public $button_text;
	
	/** 
	 * 是否开启智能优选，1-开启、0-不开启
	 **/
	public $enable_personal_action;
	
	/** 
	 * 图片文件
	 **/
	public $img_id;
	
	/** 
	 * 推广卖点。最多选择10个推广卖点 ，内容长度要求：6 ≤ x ≤9 。一个中文长度为1
	 **/
	public $product_selling_points;
	
	/** 
	 * 卡片标题。长度最大为20。一个中文长度为1
	 **/
	public $title;	
}
?>