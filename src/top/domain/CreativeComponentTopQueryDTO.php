<?php

/**
 * 查询参数
 * @author auto create
 */
class CreativeComponentTopQueryDTO
{
	
	/** 
	 * 广告主id
	 **/
	public $advertiser_id;
	
	/** 
	 * 创意组件id
	 **/
	public $id;
	
	/** 
	 * 第几页
	 **/
	public $page_no;
	
	/** 
	 * 每页多少条
	 **/
	public $page_size;
	
	/** 
	 * 组件类型， 1图片磁贴 2电商磁贴 3电商优惠券磁贴 4推广卡片
	 **/
	public $type;	
}
?>