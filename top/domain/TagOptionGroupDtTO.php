<?php

/**
 * 标签选项分组，如店铺标签有2个分组，一个
 * @author auto create
 */
class TagOptionGroupDtTO
{
	
	/** 
	 * 标签选项分组名称
	 **/
	public $group_name;
	
	/** 
	 * 标签选项分组ID，用于创建人群使用
	 **/
	public $id;
	
	/** 
	 * tagOptionDTOs
	 **/
	public $tag_option_d_t_os;
	
	/** 
	 * 标签类型，单选，多选，输入框等
	 **/
	public $type;	
}
?>