<?php

/**
 * 单元集合
 * @author auto create
 */
class AdgroupCommandVo
{
	
	/** 
	 * 单元id,单元已经存在场景必填
	 **/
	public $adgroup_id;
	
	/** 
	 * ocpc出价
	 **/
	public $adgroup_ocpc;
	
	/** 
	 * 创意关联关系
	 **/
	public $creative_info;
	
	/** 
	 * 定向关联关系
	 **/
	public $crowd_list;
	
	/** 
	 * 智能标题开关
	 **/
	public $dynamic_title_flag;
	
	/** 
	 * 主体类型对应的物料信息
	 **/
	public $material;
	
	/** 
	 * 关键词
	 **/
	public $word_list;
	
	/** 
	 * 词包
	 **/
	public $word_package_list;	
}
?>