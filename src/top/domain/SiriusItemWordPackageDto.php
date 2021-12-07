<?php

/**
 * 词包结果列表
 * @author auto create
 */
class SiriusItemWordPackageDto
{
	
	/** 
	 * 修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 词包在线状态（0:关闭，1:开启）
	 **/
	public $online_status;
	
	/** 
	 * 词包类型（1:流量智选，19:捡漏词包）
	 **/
	public $package_type;
	
	/** 
	 * pc端出价
	 **/
	public $pc_bid_price;
	
	/** 
	 * 无线端出价
	 **/
	public $wl_bid_price;
	
	/** 
	 * 词包id
	 **/
	public $word_package_id;
	
	/** 
	 * 词包名称
	 **/
	public $word_package_name;	
}
?>