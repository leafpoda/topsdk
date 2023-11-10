<?php

/**
 * 头条2.0特有参数
 * @author auto create
 */
class ToutiaoCampaignV2TopDTO
{
	
	/** 
	 * 投放周期，头条2.0必填
	 **/
	public $cast_time;
	
	/** 
	 * 定向，未特殊标明的不传字段的值表示不限
	 **/
	public $target;	
}
?>