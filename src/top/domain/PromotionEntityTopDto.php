<?php

/**
 * 推广主体信息
 * @author auto create
 */
class PromotionEntityTopDto
{
	
	/** 
	 * 推广主体类型(1:商品;3:店铺;9:自定义)
	 **/
	public $promotion_type;
	
	/** 
	 * 子推广主体类型(11:淘宝商品;31:淘宝店铺;92:自定义URL)
	 **/
	public $sub_promotion_type;	
}
?>