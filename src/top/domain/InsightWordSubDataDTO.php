<?php

/**
 * 关键词按流量细分的数据
 * @author auto create
 */
class InsightWordSubDataDTO
{
	
	/** 
	 * 关键词
	 **/
	public $bidword;
	
	/** 
	 * 点击量
	 **/
	public $click;
	
	/** 
	 * 竞争度
	 **/
	public $competition;
	
	/** 
	 * 花费，单位（分）
	 **/
	public $cost;
	
	/** 
	 * 点击转化率
	 **/
	public $coverage;
	
	/** 
	 * 平均点击花费
	 **/
	public $cpc;
	
	/** 
	 * 点击率
	 **/
	public $ctr;
	
	/** 
	 * 直接成交金额
	 **/
	public $directtransaction;
	
	/** 
	 * 直接成交笔数
	 **/
	public $directtransactionshipping;
	
	/** 
	 * 宝贝搜藏数
	 **/
	public $favitemtotal;
	
	/** 
	 * 店铺搜藏数
	 **/
	public $favshoptotal;
	
	/** 
	 * 总的收藏数，包括宝贝收藏和店铺收藏
	 **/
	public $favtotal;
	
	/** 
	 * 展现量
	 **/
	public $impression;
	
	/** 
	 * 间接成交金额
	 **/
	public $indirecttransaction;
	
	/** 
	 * 间接成交笔数
	 **/
	public $indirecttransactionshipping;
	
	/** 
	 * 投放机制:0:关键词推广 2：定向推广 3：通用定向
	 **/
	public $mechanism;
	
	/** 
	 * 流量来源：1:PC站内，2：PC站外,4:无线站内 5：无线站外
	 **/
	public $network;
	
	/** 
	 * 投入产出比
	 **/
	public $roi;
	
	/** 
	 * 总的成交笔数
	 **/
	public $transactionshippingtotal;
	
	/** 
	 * 成交总金额
	 **/
	public $transactiontotal;	
}
?>