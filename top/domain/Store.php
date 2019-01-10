<?php

/**
 * 仓库对象
 * @author auto create
 */
class Store
{
	
	/** 
	 * 仓库的物理地址
	 **/
	public $address;
	
	/** 
	 * 仓库对应的淘宝区域
	 **/
	public $address_area_name;
	
	/** 
	 * 仓库简称
	 **/
	public $alias_name;
	
	/** 
	 * 联系人
	 **/
	public $contact;
	
	/** 
	 * 联系电话
	 **/
	public $phone;
	
	/** 
	 * 邮编
	 **/
	public $post_code;
	
	/** 
	 * 商家的仓库编码，不允许重复
	 **/
	public $store_code;
	
	/** 
	 * 商家的仓库名称
	 **/
	public $store_name;
	
	/** 
	 * 仓库类型
	 **/
	public $store_type;	
}
?>