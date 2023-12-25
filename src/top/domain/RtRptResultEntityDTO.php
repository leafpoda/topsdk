<?php

/**
 * 直通车实时报表调用返回结果
 * @author auto create
 */
class RtRptResultEntityDTO
{
	
	/** 
	 * 推广组id
	 **/
	public $adgroupid;
	
	/** 
	 * 关键词id
	 **/
	public $bidwordid;
	
	/** 
	 * 计划id
	 **/
	public $campaignid;
	
	/** 
	 * 购物车总数
	 **/
	public $carttotal;
	
	/** 
	 * click
	 **/
	public $click;
	
	/** 
	 * cost
	 **/
	public $cost;
	
	/** 
	 * 点击转化率
	 **/
	public $coverage;
	
	/** 
	 * cpc
	 **/
	public $cpc;
	
	/** 
	 * cpm
	 **/
	public $cpm;
	
	/** 
	 * 创意id
	 **/
	public $creativeid;
	
	/** 
	 * 人群id
	 **/
	public $crowdid;
	
	/** 
	 * 人群名称
	 **/
	public $crowdtitle;
	
	/** 
	 * ctr
	 **/
	public $ctr;
	
	/** 
	 * 直接购物车数
	 **/
	public $directcarttotal;
	
	/** 
	 * 直接成交金额
	 **/
	public $directtransaction;
	
	/** 
	 * 直接成交笔数
	 **/
	public $directtransactionshipping;
	
	/** 
	 * 收藏宝贝数
	 **/
	public $favitemtotal;
	
	/** 
	 * 收藏店铺数
	 **/
	public $favshoptotal;
	
	/** 
	 * 总收藏数
	 **/
	public $favtotal;
	
	/** 
	 * impression
	 **/
	public $impression;
	
	/** 
	 * 间接购物车数
	 **/
	public $indirectcarttotal;
	
	/** 
	 * 间接成交金额
	 **/
	public $indirecttransaction;
	
	/** 
	 * 间接成交笔数
	 **/
	public $indirecttransactionshipping;
	
	/** 
	 * 投入产出比
	 **/
	public $roi;
	
	/** 
	 * 报表类型（搜索：0,类目出价：1, 单品定向：2, 店铺定向:3）
	 **/
	public $search_type;
	
	/** 
	 * 流量来源( PC站内:1， PC站外:2 , 移动站内:4，移动站外:5)
	 **/
	public $source;
	
	/** 
	 * 日期
	 **/
	public $thedate;
	
	/** 
	 * 流量类型 1: PC站内, 2: PC站外 , 4: 无线站内, 5: 无线站外
	 **/
	public $traffictype;
	
	/** 
	 * 总成交笔数
	 **/
	public $transactionshippingtotal;
	
	/** 
	 * 总成交金额
	 **/
	public $transactiontotal;	
}
?>