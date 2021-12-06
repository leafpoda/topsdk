<?php

/**
 * 标签列表
 * @author auto create
 */
class TagDTO
{
	
	/** 
	 * 标签ID
	 **/
	public $id;
	
	/** 
	 * 标签描述
	 **/
	public $tag_desc;
	
	/** 
	 * 标签名称
	 **/
	public $tag_name;
	
	/** 
	 * tagOptionGroupDTOs
	 **/
	public $tag_option_group_d_t_os;
	
	/** 
	 * 1-共享标签,0-私有标签
	 **/
	public $tag_share;
	
	/** 
	 * 有效期
	 **/
	public $valid_date;	
}
?>