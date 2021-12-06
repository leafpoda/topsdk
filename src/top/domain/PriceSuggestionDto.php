<?php

/**
 * true 表示符合准入，false不符合
 * @author auto create
 */
class PriceSuggestionDto
{
	
	/** 
	 * 关键词id
	 **/
	public $bidwordid;
	
	/** 
	 * 出价建议
	 **/
	public $guidance_price;
	
	/** 
	 * 状态码
	 **/
	public $stat;
	
	/** 
	 * 关键词原词
	 **/
	public $word;
	
	/** 
	 * 昨日信息
	 **/
	public $yesterday_info;	
}
?>