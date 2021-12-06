<?php

/**
 * 出价建议
 * @author auto create
 */
class GuidancePrice
{
	
	/** 
	 * 相对当前价格点击提升比例
	 **/
	public $click_up_rate;
	
	/** 
	 * flag＝0，1时为目标排名，flag＝2时无意义,flag=3时代表对应的建议
	 **/
	public $flag;
	
	/** 
	 * 相对当前价格展现提升比例
	 **/
	public $impression_up_rate;
	
	/** 
	 * 建议价格能够拿到的点击量
	 **/
	public $new_click;
	
	/** 
	 * 建议价格能够拿到的展现量
	 **/
	public $new_impression;
	
	/** 
	 * 建议出价（分）
	 **/
	public $price;
	
	/** 
	 * 价格类型，0代表正常排名建议，1代表被过滤排名建议， 		 * 2代表相近价格建议，3代表转化出价建议
	 **/
	public $price_flag;	
}
?>