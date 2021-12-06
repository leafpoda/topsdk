<?php

/**
 * 课程列表
 * @author auto create
 */
class BatchUploadFeedInfoModel
{
	
	/** 
	 * 课程基础
	 **/
	public $base_model;
	
	/** 
	 * 内容列表，一个为单课，多个为系列课
	 **/
	public $content_models;
	
	/** 
	 * 支付信息
	 **/
	public $pay_model;
	
	/** 
	 * 资源类型 0 免费公开课 4 平价引流课 5 专栏课 6 训练营课
	 **/
	public $resource_type;
	
	/** 
	 * 服务群名称
	 **/
	public $work_group_name;	
}
?>