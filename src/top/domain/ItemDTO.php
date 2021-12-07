<?php

/**
 * 商品列表
 * @author auto create
 */
class ItemDto
{
	
	/** 
	 * 不可以使用的原因
	 **/
	public $access_allowed_info;
	
	/** 
	 * 商品主图
	 **/
	public $img_url;
	
	/** 
	 * 是否可以使用，false不可以进行广告投放
	 **/
	public $is_access_allowed;
	
	/** 
	 * 商品id
	 **/
	public $item_id;
	
	/** 
	 * 商品落地页
	 **/
	public $link_url;
	
	/** 
	 * 商品标题
	 **/
	public $title;	
}
?>