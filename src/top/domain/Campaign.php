<?php

/**
 * 推广计划列表
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
	 * 推广计划结算下线原因，1-余额不足；2-超过日限额，以分号分隔多个下线原因（注明：使用此字段之前应该先行查看settle_status状态，如果settle_status状态为在线状态：1，则此字段settle_reason的值应该忽略）
	 **/
	public $settle_reason;
	
	/** 
	 * 推广计划结算状态，offline-下线（0）；online-上线（1），注明：查看结算上下线状态应该优先查看此字段的值，如果是online上线状态，则settleReason状态是可以忽略的，如果是offline下线状态，则下线原因去查看settleReason的值
	 **/
	public $settle_status;
	
	/** 
	 * 推广计划名称，不能多余20个汉字，不能重复
	 **/
	public $title;	
}
?>