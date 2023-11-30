<?php

/**
 * 定向标签
 * @author auto create
 */
class LabelVo
{
	
	/** 
	 * 是否可以绑定多个定向,获取不到 默认为否,true:是 false:否
	 **/
	public $is_multi;
	
	/** 
	 * 定向标签描述
	 **/
	public $label_desc;
	
	/** 
	 * 定向标签id
	 **/
	public $label_id;
	
	/** 
	 * 定向标签名称
	 **/
	public $label_name;
	
	/** 
	 * 透传属性
	 **/
	public $label_option_properties;
	
	/** 
	 * 定向标签值
	 **/
	public $label_value;
	
	/** 
	 * 标签选项分组
	 **/
	public $option_group_list;
	
	/** 
	 * 标签选项
	 **/
	public $option_list;
	
	/** 
	 * 出价维度，OPTION:标签出价，多个子人群同时出价、LABEL:选项出价，以子人群为出价最小单位
	 **/
	public $price_dimension;
	
	/** 
	 * 定向标签类型
	 **/
	public $target_type;	
}
?>