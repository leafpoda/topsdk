<?php

/**
 * 查询参数
 * @author auto create
 */
class AdgroupTopQueryDTO
{
	
	/** 
	 * 广告主id
	 **/
	public $advertiser_id;
	
	/** 
	 * 计划组id
	 **/
	public $campaign_id;
	
	/** 
	 * 查询格式  yyyy-MM-dd  查询最长跨度为三个月
	 **/
	public $end_time;
	
	/** 
	 * 计划id
	 **/
	public $ids;
	
	/** 
	 * 计划名称
	 **/
	public $name;
	
	/** 
	 * 第几页
	 **/
	public $page_no;
	
	/** 
	 * 每页多少条
	 **/
	public $page_size;
	
	/** 
	 * 查询格式  yyyy-MM-dd  查询最长跨度为三个月
	 **/
	public $start_time;
	
	/** 
	 * 投放状态，-1：已删除，1：审核不通过，2：不在投放时段，3：已被广告组暂停，4：计划暂停，5：超出预算，6：广告组超出预算，7：账户余额不足，8：新建审核中，9：修改审核中，10：计划新建，11：投放中，12：已完成，13：未到达投放时间，15：超出广告主日预算
	 **/
	public $status;
	
	/** 
	 * 头条2.0状态参数，一级状态，14：投放中，4：未投放，16：已终止，12：已完成，-1：已删除
	 **/
	public $status_first;
	
	/** 
	 * 头条2.0状态参数，二级状态，一级状态为未投放时必填，其他状态不填， 1：审核不通过，8：新建审核中，9：修改审核中，23：已暂停，24：配额达限， 3：项目已被暂停，2：不在投放时段，13：未到达投放时间，7：账户余额不足， 15：账户超出预算，6：项目超出预算，5：广告超出预算，25：直播间不可投， 26：商品不可投，27：抖音账号不可投，28：锚点不可投
	 **/
	public $status_second;
	
	/** 
	 * 平台版本，9999：升级版API（仅巨量2.0API需传入）
	 **/
	public $version;	
}
?>