<?php

/**
 * 被删除的推广组
 * @author auto create
 */
class ADGroup
{
	
	/** 
	 * 推广组id
	 **/
	public $adgroup_id;
	
	/** 
	 * 推广计划Id
	 **/
	public $campaign_id;
	
	/** 
	 * 商品类目id，从根类目到子类目，用空格分割
	 **/
	public $category_ids;
	
	/** 
	 * 创建时间
	 **/
	public $create_time;
	
	/** 
	 * 默认出价，单位为分，不能小于5
	 **/
	public $default_price;
	
	/** 
	 * 非搜索是否使用默认出价，false-不用；true-使用；默认为true;
	 **/
	public $is_nonsearch_default_price;
	
	/** 
	 * 最后修改时间
	 **/
	public $modified_time;
	
	/** 
	 * 推广组主人昵称
	 **/
	public $nick;
	
	/** 
	 * 非搜索出价，单位为分，不能小于5
	 **/
	public $nonsearch_max_price;
	
	/** 
	 * 商品数字id
	 **/
	public $num_iid;
	
	/** 
	 * online-上线；audit_offline-审核下线；crm_offline-CRM下线；默认为online
	 **/
	public $offline_type;
	
	/** 
	 * 用户设置的上下线状态，offline-下线(暂停竞价)；online-上线；默认为online
	 **/
	public $online_status;
	
	/** 
	 * 审核下线原因
	 **/
	public $reason;	
}
?>