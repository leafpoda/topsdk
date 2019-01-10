<?php

/**
 * 标签列表，标签之间逻辑关系为并且关系
 * @author auto create
 */
class SelectTagOptionDTO
{
	
	/** 
	 * 标签选项分组ID，可以通过标签详细接口查询
	 **/
	public $option_group_id;
	
	/** 
	 * 标签ID,用户有权限的标签
	 **/
	public $tag_id;
	
	/** 
	 * 多个选项用逗号分隔；INPUT连续值使用1,100表示从1到100。注意：INPUT类型必须区间，如想取大于1，填1,999999999；取小于100，填0,100
	 **/
	public $values;	
}
?>