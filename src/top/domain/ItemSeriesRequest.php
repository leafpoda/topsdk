<?php

/**
 * 商品系列创建或修改请求入参
 * @author auto create
 */
class ItemSeriesRequest
{
	
	/** 
	 * 品牌值,当品牌作为聚合属性时生效
	 **/
	public $brand_name;
	
	/** 
	 * 类目id
	 **/
	public $cat_id;
	
	/** 
	 * 市场
	 **/
	public $market;
	
	/** 
	 * 系列描述
	 **/
	public $series_desc;
	
	/** 
	 * 系列id
	 **/
	public $series_id;
	
	/** 
	 * 系列名称
	 **/
	public $series_name;
	
	/** 
	 * 系列状态
	 **/
	public $status;	
}
?>