<?php

/**
 * 定向
 * @author auto create
 */
class LabelDto
{
	
	/** 
	 * 标签id，可通过标签接口获取
	 **/
	public $label_id;
	
	/** 
	 * 标签值，可通过标签接口获取
	 **/
	public $label_value;
	
	/** 
	 * 选项结构
	 **/
	public $options;
	
	/** 
	 * 定向id，可通过标签接口获取
	 **/
	public $target_id;
	
	/** 
	 * 定向类型
	 **/
	public $target_type;	
}
?>