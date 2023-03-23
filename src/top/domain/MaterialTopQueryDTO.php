<?php

/**
 * 查询参数
 * @author auto create
 */
class MaterialTopQueryDTO
{
	
	/** 
	 * 广告主id
	 **/
	public $advertiser_id;
	
	/** 
	 * 素材ids
	 **/
	public $ids;
	
	/** 
	 * 第几页
	 **/
	public $page_no;
	
	/** 
	 * 每页多少条
	 **/
	public $page_size;
	
	/** 
	 * 文件类型，1：图片，2：视频
	 **/
	public $type;	
}
?>