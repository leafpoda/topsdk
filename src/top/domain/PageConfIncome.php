<?php

/**
 * 落地页配置
 * @author auto create
 */
class PageConfIncome
{
	
	/** 
	 * 需要将落地页发布到哪个bp，可选值为： zuanshi、subway、xiaopin
	 **/
	public $bp;
	
	/** 
	 * 组件配置列表（限制最多20元素）
	 **/
	public $comp_list;
	
	/** 
	 * 如果是编辑页面，需提供页面id
	 **/
	public $id;
	
	/** 
	 * 落地页名字
	 **/
	public $name;	
}
?>