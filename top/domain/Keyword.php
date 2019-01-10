<?php

/**
 * 关键词
 * @author auto create
 */
class Keyword
{
	
	/** 
	 * 推广组id
	 **/
	public $adgroup_id;
	
	/** 
	 * 审核拒绝原因描述
	 **/
	public $audit_desc;
	
	/** 
	 * 审核状态： audit_wait-待审核；audit_pass-审核通过(上线)；audit_reject-审核拒绝；audit_offline-审核直接下线；默认为 audit_pass。
	 **/
	public $audit_status;
	
	/** 
	 * 推广计划id
	 **/
	public $campaign_id;
	
	/** 
	 * 创建时间
	 **/
	public $create_time;
	
	/** 
	 * 是否使用推广组默认出价，true-是；false-否；
	 **/
	public $is_default_price;
	
	/** 
	 * 是否是垃圾词，false-不是；true-是；垃圾词是近期无点击的词
	 **/
	public $is_garbage;
	
	/** 
	 * 关键词id
	 **/
	public $keyword_id;
	
	/** 
	 * 匹配模式
	 **/
	public $match_scope;
	
	/** 
	 * 无线独立出价（0：代表使用PC*无线溢价，如果不是0则代表无线出价的值）
	 **/
	public $max_mobile_price;
	
	/** 
	 * 关键词出价，单位为分，不能小于5
	 **/
	public $max_price;
	
	/** 
	 * 无线上是否采用PC*无线溢价的出价模式（1：是，0：否）
	 **/
	public $mobile_is_default_price;
	
	/** 
	 * 最后修改时间
	 **/
	public $modified_time;
	
	/** 
	 * 主人昵称
	 **/
	public $nick;
	
	/** 
	 * 词质量得分
	 **/
	public $qscore;
	
	/** 
	 * 关键词
	 **/
	public $word;	
}
?>