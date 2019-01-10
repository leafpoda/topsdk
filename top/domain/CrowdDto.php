<?php

/**
 * 人群信息
 * @author auto create
 */
class CrowdDto
{
	
	/** 
	 * 业务类型
	 **/
	public $biz_type;
	
	/** 
	 * 人群id ,报表用
	 **/
	public $crowd_id;
	
	/** 
	 * 用户id
	 **/
	public $cust_id;
	
	/** 
	 * 人群建议溢价,取值范围[5,300]
	 **/
	public $fit_discount;
	
	/** 
	 * 人群名称
	 **/
	public $name;
	
	/** 
	 * 人群包模版ID
	 **/
	public $template_id;
	
	/** 
	 * 人群类型
	 **/
	public $type;	
}
?>