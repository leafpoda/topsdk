<?php

/**
 * 修改后的推广计划
 * @author auto create
 */
class Campaign
{
	
	/** 
	 * 推广计划ID
	 **/
	public $campaign_id;
	
	/** 
	 * 计划类型0 标准计划，16 销量明星
	 **/
	public $campaign_type;
	
	/** 
	 * 创建时间
	 **/
	public $create_time;
	
	/** 
	 * 最后修改时间
	 **/
	public $modified_time;
	
	/** 
	 * 主人昵称
	 **/
	public $nick;
	
	/** 
	 * 用户设置的上下限状态；offline-下线；online-上线；
	 **/
	public $online_status;
	
	/** 
	 * 推广计划结算下线原因，1-余额不足；2-超过日限额，以分号分隔多个下线原因
	 **/
	public $settle_reason;
	
	/** 
	 * 推广计划结算状态，offline-下线；online-上线，
	 **/
	public $settle_status;
	
	/** 
	 * 推广计划名称，不能多余20个汉字
	 **/
	public $title;	
}
?>