<?php

/**
 * 页面列表
 * @author auto create
 */
class PageListItem
{
	
	/** 
	 * 页面投放平台
	 **/
	public $bp;
	
	/** 
	 * 页面创建时间
	 **/
	public $create_date;
	
	/** 
	 * 页面类型 滑屏/长页面 craft|teemo
	 **/
	public $editor;
	
	/** 
	 * 页面ID
	 **/
	public $id;
	
	/** 
	 * 页面修改时间
	 **/
	public $modify_date;
	
	/** 
	 * 页面名称
	 **/
	public $name;
	
	/** 
	 * 页面缩略图
	 **/
	public $pic;
	
	/** 
	 * 页面发布状态，3为已发布
	 **/
	public $status;
	
	/** 
	 * 页面分组类型
	 **/
	public $tag;
	
	/** 
	 * 已发布页面的url
	 **/
	public $url;	
}
?>