<?php

/**
 * 效果数据
 * @author auto create
 */
class RptEffectEntityDTO
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
	 * 点击转化率
	 **/
	public $coverage;
	
	/** 
	 * 人群id
	 **/
	public $crowdid;
	
	/** 
	 * 人群名称
	 **/
	public $crowdname;
	
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
	 * 流量来源，设备和网络，包含值：PC站内，PC站外,移动站内，移动站外
	 **/
	public $source;
	
	/** 
	 * 日期
	 **/
	public $thedate;	
}
?>