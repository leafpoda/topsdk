<?php

/**
 * 广告主账户整体报表信息对象
 * @author auto create
 */
class RptAdvertiserDayDTO
{
	
	/** 
	 * 展现量
	 **/
	public $ad_pv;
	
	/** 
	 * 广告主id
	 **/
	public $advertiser_id;
	
	/** 
	 * 广告主名称
	 **/
	public $advertiser_name;
	
	/** 
	 * 消耗
	 **/
	public $charge;
	
	/** 
	 * 点击量
	 **/
	public $click;
	
	/** 
	 * 点击率
	 **/
	public $ctr;
	
	/** 
	 * 点击单价
	 **/
	public $ecpc;
	
	/** 
	 * 千次展现成本
	 **/
	public $ecpm;
	
	/** 
	 * 日期
	 **/
	public $log_date;
	
	/** 
	 * 计划类型
	 **/
	public $rpt_type;	
}
?>