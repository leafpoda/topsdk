<?php

/**
 * 流量智选天级别报表数据
 * @author auto create
 */
class ResultMap
{
	
	/** 
	 * 推广组id
	 **/
	public $adgroupid;
	
	/** 
	 * 计划id
	 **/
	public $campaignid;
	
	/** 
	 * 点击量
	 **/
	public $click;
	
	/** 
	 * 消耗（分）
	 **/
	public $cost;
	
	/** 
	 * 点击转化率
	 **/
	public $coverage;
	
	/** 
	 * cpm
	 **/
	public $cpm;
	
	/** 
	 * ctr
	 **/
	public $ctr;
	
	/** 
	 * 展现量
	 **/
	public $impression;
	
	/** 
	 * roi
	 **/
	public $roi;
	
	/** 
	 * 词包类型（0：汇总-流量包，-1：汇总-自主买词）
	 **/
	public $sub_package;
	
	/** 
	 * 词包名称（汇总-流量包、汇总-自主买词）
	 **/
	public $sub_package_name;
	
	/** 
	 * 报表数据日期
	 **/
	public $thedate;	
}
?>