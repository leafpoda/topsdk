<?php

/**
 * 创意主体类型
 * @author auto create
 */
class CreativePromotionTopDto
{
	
	/** 
	 * 创意主体id，主体为商品和橱窗的时候必填
	 **/
	public $promotion_id;
	
	/** 
	 * 创意子主体类型：11商品 ，21橱窗，31店铺，92自定义
	 **/
	public $sub_promotion_type;	
}
?>