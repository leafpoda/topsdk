<?php

/**
 * tagOptionDTOs
 * @author auto create
 */
class TagOptionDTO
{
	
	/** 
	 * 标签选项ID，注意:只用于和parentId一起判断选项父子关系,创建人群使用optionValue
	 **/
	public $id;
	
	/** 
	 * 选项所属的选项分组ID
	 **/
	public $option_group_id;
	
	/** 
	 * 标签选项显示名称
	 **/
	public $option_name;
	
	/** 
	 * 标签选项取值,用于创建人群等
	 **/
	public $option_value;
	
	/** 
	 * 父选项ID,0表示是顶层选项
	 **/
	public $parent_option_id;
	
	/** 
	 * 选项排序
	 **/
	public $sort_num;	
}
?>