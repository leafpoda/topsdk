<?php

/**
 * 批量结果集
 * @author auto create
 */
class ItemVo
{
	
	/** 
	 * 销量
	 **/
	public $bid_count;
	
	/** 
	 * 主站类目路径，空格分隔多级
	 **/
	public $category_id;
	
	/** 
	 * 首次上架时间
	 **/
	public $first_starts_time;
	
	/** 
	 * 商品图片
	 **/
	public $img_url;
	
	/** 
	 * 商品id
	 **/
	public $item_id;
	
	/** 
	 * 商品地址
	 **/
	public $link_url;
	
	/** 
	 * 价格
	 **/
	public $price;
	
	/** 
	 * 库存
	 **/
	public $quantity;
	
	/** 
	 * 最近上架时间
	 **/
	public $starts;
	
	/** 
	 * 是否定时上架,true:是,false:否
	 **/
	public $timing;
	
	/** 
	 * 商品标题
	 **/
	public $title;	
}
?>