<?php

/**
 * result
 * @author auto create
 */
class AdgroupTargetingTagDto
{
	
	/** 
	 * 人群信息
	 **/
	public $crowd;
	
	/** 
	 * 用户溢价比例,溢价20%,接口返回120
	 **/
	public $discount;
	
	/** 
	 * 人群Id
	 **/
	public $id;
	
	/** 
	 * 是否不溢价1:不溢价,0:溢价
	 **/
	public $is_default_price;
	
	/** 
	 * 人群上下线状态,0:下线;1:上线
	 **/
	public $online_status;
	
	/** 
	 * 人群包出价方式0:出价;1:溢价
	 **/
	public $price_mode;	
}
?>