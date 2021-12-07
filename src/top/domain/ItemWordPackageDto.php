<?php

/**
 * 词包列表
 * @author auto create
 */
class ItemWordPackageDto
{
	
	/** 
	 * 开/关词包（0-关闭，1-开启）
	 **/
	public $online_status;
	
	/** 
	 * 词包类型（1-流量智选， 19-捡漏词包）
	 **/
	public $package_type;
	
	/** 
	 * pc端出价（单位为分）
	 **/
	public $pc_bid_price;
	
	/** 
	 * 无线端出价（单位为分）
	 **/
	public $wl_bid_price;
	
	/** 
	 * 词包id（1-流量智选，2-捡漏词包）
	 **/
	public $word_package_id;
	
	/** 
	 * 词包名称（可选：流量智选词包、捡漏词包）
	 **/
	public $word_package_name;	
}
?>