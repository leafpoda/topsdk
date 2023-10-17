<?php

/**
 * 页面列表
 * @author auto create
 */
class PageConfMini
{
	
	/** 
	 * 需要将落地页发布到哪个bp，可选值为： zuanshi、subway、xiaopin
	 **/
	public $bp;
	
	/** 
	 * 页面中的组件列表
	 **/
	public $comp_list;
	
	/** 
	 * 页面创建时间
	 **/
	public $create_date;
	
	/** 
	 * 页面类型 滑屏/长页面 slidepage/longpage
	 **/
	public $editor;
	
	/** 
	 * 页面id
	 **/
	public $id;
	
	/** 
	 * 页面最近一次修改时间
	 **/
	public $modify_date;
	
	/** 
	 * 页面名称
	 **/
	public $name;
	
	/** 
	 * 页面首屏快照
	 **/
	public $pic;
	
	/** 
	 * 页面状态，3为已发布，其余为未发布
	 **/
	public $status;
	
	/** 
	 * 页面分类
	 **/
	public $tag;
	
	/** 
	 * 页面url
	 **/
	public $url;	
}
?>