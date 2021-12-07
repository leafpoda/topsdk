<?php

/**
 * 基本报表DTO
 * @author auto create
 */
class RptBaseEntityDTO
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
	 * 花费
	 **/
	public $cost;
	
	/** 
	 * 每点击一次花费
	 **/
	public $cpc;
	
	/** 
	 * 每千次展现花费
	 **/
	public $cpm;
	
	/** 
	 * 人群id
	 **/
	public $crowdid;
	
	/** 
	 * 人群名称
	 **/
	public $crowdname;
	
	/** 
	 * 点击率
	 **/
	public $ctr;
	
	/** 
	 * 展现量
	 **/
	public $impression;
	
	/** 
	 * 流量来源，设备和网络。值包含PC站内，PC站外,移动站内，移动站外
	 **/
	public $source;
	
	/** 
	 * 日期
	 **/
	public $thedate;	
}
?>