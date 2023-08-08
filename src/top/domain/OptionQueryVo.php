<?php

/**
 * 选项信息
 * @author auto create
 */
class OptionQueryVo
{
	
	/** 
	 * 人群名称
	 **/
	public $option_name;
	
	/** 
	 * 人群推广基础属性人群执行人群id，其他人群等于dmp的crowdId
	 **/
	public $option_value;
	
	/** 
	 * dmp 模板id
	 **/
	public $template_id;
	
	/** 
	 * dmp 榜单id
	 **/
	public $topic_id;
	
	/** 
	 * dmp 唯一串
	 **/
	public $uuid_mark;	
}
?>