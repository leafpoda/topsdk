<?php

/**
 * 返回宝贝模板对象。包含模板id，模板name，还有模板的类别（0表示外店，1表示内店）
 * @author auto create
 */
class ItemTemplate
{
	
	/** 
	 * 用于区分宝贝模板属于内店和外店
	 **/
	public $shop_type;
	
	/** 
	 * 宝贝模板的id
	 **/
	public $template_id;
	
	/** 
	 * 宝贝详情模板的名称
	 **/
	public $template_name;	
}
?>