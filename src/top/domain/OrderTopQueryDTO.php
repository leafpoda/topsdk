<?php

/**
 * 查询入参
 * @author auto create
 */
class OrderTopQueryDTO
{
	
	/** 
	 * 广告主id
	 **/
	public $advertiser_id;
	
	/** 
	 * 查询日期（只能查今天或昨天 默认今天）
	 **/
	public $date;
	
	/** 
	 * 页码
	 **/
	public $page_no;
	
	/** 
	 * 单页条数（最大500）
	 **/
	public $page_size;	
}
?>