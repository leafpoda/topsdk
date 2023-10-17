<?php

/**
 * 用于保存拍卖有关的信息
 * @author auto create
 */
class PaimaiInfo
{
	
	/** 
	 * 拍品封顶价（分）
	 **/
	public $ceil_price;
	
	/** 
	 * 增加拍延迟周期（分钟）
	 **/
	public $delay_in_minute;
	
	/** 
	 * 用户自定义的固定保证金。如果用户未传则说明用户选择使用淘宝默认的保证金模式10%，此时deposit等于0.
	 **/
	public $deposit;
	
	/** 
	 * 拍品结束时间
	 **/
	public $end;
	
	/** 
	 * 降价时间周期（分钟）
	 **/
	public $frequency;
	
	/** 
	 * 增价幅度或降价幅度
	 **/
	public $increment;
	
	/** 
	 * 降价拍中的降价间隔
	 **/
	public $interval;
	
	/** 
	 * 拍卖类型，目前包括增加拍，荷兰拍和降价拍。
	 **/
	public $mode;
	
	/** 
	 * 拍卖周期（秒钟），非重复上架为（开始时间-结束时间），当为重复上拍时为一次重复上架的时间
	 **/
	public $period;
	
	/** 
	 * 重复上拍总次数，如果不是重复上拍的，则为0
	 **/
	public $repeat;
	
	/** 
	 * 降价拍的保留价
	 **/
	public $reserve;
	
	/** 
	 * 拍品开始时间
	 **/
	public $start;
	
	/** 
	 * 拍品起拍价
	 **/
	public $start_price;
	
	/** 
	 * 对于拍卖来说可以设定有效期，这里是有效期的小时数。
	 **/
	public $valid_hour;
	
	/** 
	 * 对于拍卖来说可以设定有效期，这里是有效期的分钟数。
	 **/
	public $valid_minute;	
}
?>