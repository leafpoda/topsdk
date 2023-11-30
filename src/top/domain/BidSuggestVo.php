<?php

/**
 * 结果集
 * @author auto create
 */
class BidSuggestVo
{
	
	/** 
	 * 资源包关联关系
	 **/
	public $adzone_list;
	
	/** 
	 * 建议溢价比例
	 **/
	public $adzone_suggest_discount_list;
	
	/** 
	 * 建议出价下界(元)
	 **/
	public $bid_left;
	
	/** 
	 * 建议出价最大值(元)
	 **/
	public $bid_max;
	
	/** 
	 * 建议出价（默认值） 元
	 **/
	public $bid_middle;
	
	/** 
	 * 效果预估数据
	 **/
	public $bid_middle_effect;
	
	/** 
	 * 建议出价最小值(元)
	 **/
	public $bid_min;
	
	/** 
	 * 建议出价上界(元)
	 **/
	public $bid_right;
	
	/** 
	 * 人群关系实体
	 **/
	public $crowd_list;
	
	/** 
	 * 输入框校验上限
	 **/
	public $validate_bid_max;
	
	/** 
	 * 输入框校验下限
	 **/
	public $validate_bid_min;	
}
?>