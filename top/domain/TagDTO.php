<?php

/**
 * result
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
	 * 标签选项分组，如店铺标签有2个分组，一个
	 **/
	public $tag_option_group_d_t_os;
	
	/** 
	 * 1-共享的标签,0-私有的标签
	 **/
	public $tag_share;
	
	/** 
	 * 1-正常状态,其它都为不可用状态
	 **/
	public $tag_status;
	
	/** 
	 * 标签有效期
	 **/
	public $valid_date;	
}
?>